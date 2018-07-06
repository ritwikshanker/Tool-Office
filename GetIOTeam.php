<?php
/**
 * User: ritwik.shanker
 * Copyright of Esterline Technologies  Corporation (c) 2018.
 */

/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Date: 06-07-2018
 * Time: 09:48
 */
include 'connect.php';
$_SESSION["SELECTED_WOTeam"] = $_GET["abc"];
$WO_ID = $_SESSION["SELECTED_WOTeam"];
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
<h3><b>Associated Illustration</b></h3>
<br><br>
<div class="container-fluid">
    <table id="StatusTable">
        <tr>
            <th>ATA Number</th>
            <th>IO No</th>
            <th>Status</th>
            <th>Illustrator</th>
            <th>Type</th>
            <th>Alloted Date</th>
            <th>Required Date</th>
            <th>Reviewer</th>
        </tr>

        <?php
        $usid = $_SESSION["user_id"];
        $sql = "SELECT * FROM `wo_raisingillustration` WHERE `WO_ID` = '$WO_ID' AND (`IID` = '$usid' OR RID = '$usid')";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result))
        { ?>
            <tr>
                <td><?php echo $row["ATA Number"]; ?></td>
                <td><?php echo $row["IO No"]; ?></td>
                <td><?php echo $row["Status"]; ?></td>
                <td><?php echo $row["Illustrator"]; ?></td>
                <td><?php echo $row["Type"]; ?></td>
                <td><?php echo $row["IO allotted date"]; ?></td>
                <td><?php echo $row["IO required date"]; ?></td>
                <td><?php echo $row["Reviewer"]; ?></td>
            </tr>
            <?php
        } ?>

    </table>
</div>
<div id="IOTeam"></div>

<br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>

