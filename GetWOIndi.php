<?php
/**
 * User: ritwik.shanker
 * Copyright of Esterline Technologies  Corporation (c) 2018.
 */

include 'connect.php';
session_start();
$_SESSION["SELECTED_PRJ"] = $_GET["rit"];
$Seleted_Prj = $_SESSION["SELECTED_PRJ"];
//$_SESSION['varname'] = $row["ID"];
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

<div class="container-fluid">
    <table id="StatusTable">
        <tr>
            <th style="width:60px;">Info</th>
            <!--<th>ID</th>-->
            <th>ATA Number</th>
            <th>WO No</th>
            <th>Status</th>
            <th>Owner</th>
            <th>WO Allotted date</th>
            <th>Start Date</th>
            <th>SFCK Date- Planned</th>
            <th>Peer Reviewer</th>
            <th>Peer QA Completion Date- Planned</th>
            <th>Internal Reviewer</th>
            <th>Internal QA Completion Date- Planned</th>
            <th>Remarks</th>
            <!--            <th>Partner/Customer QA Comments Received Date</th>-->
            <!--            <th> Partner/Customer QA Re-submission Date</th>-->
        </tr>

        <?php
        $empid = $_SESSION["user_id"];
        if ($_SESSION["AccessValue"] === '1' or $_SESSION["AccessValue"] === '0')
        {
            $sql = "SELECT * FROM `associated_wos` WHERE `Project` = '$Seleted_Prj'";
        }
        else
        {
            $sql = "SELECT * FROM `associated_wos` WHERE (`Project` = '$Seleted_Prj' AND (`OID` = '$empid' OR `PRID` = '$empid' OR `IRID` = '$empid'))";
        }
        //echo $sql;
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result))
        { ?>
            <tr>
                <td><input type="radio" name="DisplayWOButtons" value="<?php echo $row["ID"]; ?>"
                           onclick="ShowIOIndi(this.value);"></td>
                <td><?php echo $row["ATA Number"]; ?></td>
                <td><?php echo $row["WO No"]; ?></td>
                <td><?php echo $row["WO Status"]; ?></td>
                <td><?php echo $row["Owner"]; ?></td>
                <td><?php echo $row["WO Allotted date"]; ?></td>
                <td><?php echo $row["StartDate"]; ?></td>
                <td><?php echo $row["SFCK Date- Planned"]; ?></td>
                <td><?php echo $row["Peer Reviewer"]; ?></td>
                <td><?php echo $row["Peer QA Completion Date- Planned"]; ?></td>
                <td><?php echo $row["Internal Reviewer"]; ?></td>
                <td><?php echo $row["Internal QA Completion Date- Planned"]; ?></td>
                <td> <?php echo $row["Owner Remarks"]; ?></td>
                <!--                <td>--><?php //echo $row["Customer CompletionDate"];
                ?><!--</td>-->
                <!--                <td>--><?php //echo $row["SendTo CustomerDate"];
                ?><!--</td>-->
            </tr>
            <?php
        } ?>
    </table>
</div>
<div id="WOIndi"></div>
<br><br>

</body>
</html>
