<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>

<body>
<form action="" method="POST" id="PostAddWO" role="form">
    <div class="container-fluid">
        <table class="table">
            <tr>
                <th>WO No.</th>
                <td><input type="text" name="WONo" id="AddWONo" required></td>
            </tr>

            <tr>
                <th>ATA Number</th>
                <td><input type="text" name="ATANumber" id="AddATANumber" required></td>
            </tr>

            <tr>
                <th>OWNER</th>
                <td>
                    <select name="owner" id="AddOwner" title="Owner">
                        <option selected disabled>--Select--</option>
                        <?php
                        $sql = "SELECT Name FROM `employee_details` ORDER BY Name";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <option><?php echo $row['Name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th>WO Allotted Date</th>
                <td><input type="text" name="WOAllottedDate" id="AddWOAdatepicker" required></td>
            </tr>

            <tr>
                <th>SFCK Date - Planned</th>
                <td><input type="text" name="SFCKDatePlanned" id="AddSFCKPdatepicker"></td>
            </tr>

            <tr>
                <th>PR</th>
                <td>
                    <select name="PR" id="AddPR" title="Peer Reviewer">
                        <option selected disabled>--Select--</option>
                        <?php
                        $sql = "SELECT Name FROM `employee_details` ORDER BY Name";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <option><?php echo $row['Name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th>PR QA Completion Date - Planned</th>
                <td><input type="text" name="PRQACompletionDatePlanned" id="AddPRQACPdatepicker"></td>
            </tr>

            <tr>
                <th>IR</th>
                <td>
                    <select name="IR" id="AddIR" title="Internal Reviewer">
                        <option selected disabled>--Select--</option>
                        <?php
                        $sql = "SELECT Name FROM `employee_details` ORDER BY Name";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($result))
                        {
                            ?>
                            <option><?php echo $row['Name']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <th>IR QA Completion Date - Planned</th>
                <td><input type="text" name="IRQACompletionDatePlanned" id="AddIRQACPdatepicker"></td>
            </tr>

        </table>
        <input type="hidden" id="SelectedProject" value="<?php echo $_SESSION["SELECTED_PRJ"]; ?> ">
        <input type="submit" name="AddWO" value="AddWO" style="margin-left:45%;">
    </div>
</form>
<br><br>

</body>
</html>
