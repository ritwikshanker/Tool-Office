<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
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
            <th>Partner</th>
            <th>Project</th>
            <th>Remarks</th>
            <!--<th>ID</th> -->
        </tr>

        <?php
        $sql = "SELECT * FROM `editing_project`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result))
        { ?>
            <tr>
                <td><input type="radio" name="DisplayProjectButtons" value="<?php echo $row["Project"]; ?>"
                           onclick="ShowEditProjectButtons(this.value);"></td>
                <td><?php echo $row["Partner"]; ?></td>
                <td><?php echo $row["Project"]; ?></td>
                <td><?php echo $row["Remarks"]; ?></td>
                <!--<td><?php //echo $row["ID"];
                ?></td>-->

            </tr>
            <?php
        } ?>

    </table>
</div>

<div id="EditProjectButtons"></div> <!-- GetEditProjectButtons.php -->


<br><br>

</body>
</html>
