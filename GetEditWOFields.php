<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$Seleted_WO_Edit_ID = $_GET["s"];
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<form action="" method="POST" id="PostEditWO" role="form">
    <div class="container-fluid" style="overflow-x:auto">
        <table class="table" style="overflow-x:auto">
            <tr>
                <th>WO No.</th>
                <th>ATA Number</th>
                <th>Manual</th>
                <th>Target</th>
                <th>Description</th>
                <th>Type of Work</th>
                <th>Author</th>
                <th>WO Allotted Date</th>
                <th>SFCK Date - Planned</th>
                <th>PR</th>
                <th>PR QA Completion Date - Planned</th>
                <th>IR</th>
                <th>IR QA Completion Date - Planned</th>
                <th>Customer Delivery Date</th>
            </tr>

            <?php
            $sql = "SELECT * FROM `associated_wos` WHERE `ID` = '$Seleted_WO_Edit_ID'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result))
            { ?>
                <tr>
                    <td><input type="text" id="EditWONo<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["WO No"]; ?>" title="WONO">
                    </td>
                    <td><input type="text" id="EditATANumber<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["ATA Number"]; ?>" title="ATA"></td>
                    <td><input type="text" id="EditManual<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["Manual"]; ?>" title="Manual"></td>
                    <td><input type="text" id="EditTarget<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["Target%"]; ?>"></td>
                    <td><input type="text" id="EditDescription<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["Description"]; ?>"></td>
                    <td><input type="text" id="EditTypeOfWork<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["Type of Work"]; ?>"></td>
                    <td>
                        <select name="owner" id="EditOwner<?php $row["WO No"]; ?>" title="Owner">
                            <!--                            <option value="--><?php //echo $row["Owner"];
                            ?><!--" selected></option>-->
                            <?php
                            $rit = "SELECT Name FROM `employee_details` ORDER BY Name";
                            $res = mysqli_query($conn, $rit);
                            while ($rown = mysqli_fetch_array($res))
                            {
                                if ($row['Owner'] === $rown['Name'])
                                {
                                    ?>
                                    <option selected><?php echo $rown['Name']; ?></option>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <option><?php echo $rown['Name']; ?></option>
                                    <?php
                                }

                            }
                            ?>
                        </select>
                    </td>
                    <td><input type="text" id="EditWOAdatepicker<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["WO Allotted date"]; ?>"></td>
                    <td><input type="text" id="EditSFCKPdatepicker<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["SFCK Date- Planned"]; ?>"></td>
                    <td>
                        <select name="PR" id="EditPR<?php $row["WO No"]; ?>" title="Peer Reviewer">
                            <!--                            <option value="--><?php //echo $row["Owner"];
                            ?><!--" selected></option>-->
                            <?php
                            $rit = "SELECT Name FROM `employee_details` ORDER BY Name";
                            $res = mysqli_query($conn, $rit);
                            while ($rown = mysqli_fetch_array($res))
                            {
                                if ($row['Peer Reviewer'] === $rown['Name'])
                                {
                                    ?>
                                    <option selected><?php echo $rown['Name']; ?></option>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <option><?php echo $rown['Name']; ?></option>
                                    <?php
                                }

                            }
                            ?>
                        </select>
                    </td>
                    <td><input type="text" id="EditPRQACPdatepicker<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["Peer QA Completion Date- Planned"]; ?>"></td>
                    <td><select name="IR" id="EditIR<?php $row["WO No"]; ?>" title="Internal Reviewer">
                            <!--                            <option value="--><?php //echo $row["Owner"];
                            ?><!--" selected></option>-->
                            <?php
                            $rit = "SELECT Name FROM `employee_details` ORDER BY Name";
                            $res = mysqli_query($conn, $rit);
                            while ($rown = mysqli_fetch_array($res))
                            {
                                if ($row['Internal Reviewer'] === $rown['Name'])
                                {
                                    ?>
                                    <option selected><?php echo $rown['Name']; ?></option>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <option><?php echo $rown['Name']; ?></option>
                                    <?php
                                }

                            }
                            ?>
                        </select>
                    </td>
                    <td><input type="text" id="EditIRQACPdatepicker<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["Internal QA Completion Date- Planned"]; ?>"></td>
                    <td><input type="text" id="EditCDdatepicker<?php $row["WO No"]; ?>"
                               Value="<?php echo $row["Customer Delivery Date"]; ?>"></td>

                    <td><input type="hidden" id="ID<?php $row["WO No"]; ?>" Value="<?php echo $row["ID"]; ?>"></td>
                </tr>
                <?php
            } ?>
        </table>
        <br>
        <input type="hidden" id="WORowsCount" value="<?php echo $num_rows; ?> ">
        <!--        <input type="hidden" id="SelectedProject" value="--><?php //echo $Seleted_Prj; ?><!-- ">-->
    </div>
    <input type="submit" name="Submit" value="Submit" style="margin-left:45%;">
</form>
<br><br>

</body>
</html>
