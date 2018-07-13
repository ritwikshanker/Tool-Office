<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$IO_ID = $_SESSION["SELECTED_IO_ID"];
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

<form action="" method="POST" id="PostAddIlluRemarks" role="form">
    <div class="container-fluid" style="margin-top:5%;margin-left:21%;" align="centre">
        <label>Remarks for the IO : </label>
        <br>
        <?php
        $sql = "SELECT `IlluRemarks` FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result))
        {
            $remarks = $row["IlluRemarks"];
        }
        ?>
        <textarea name="Remarks" id="AddIlluRem" title="Remarks"><?php echo $remarks; ?></textarea>
        <br><br>
        <input type="submit" name="SaveRemarks" value="Save Remarks" style="margin-left:29%;">
    </div>
</form>
<br><br>

</body>
</html>
