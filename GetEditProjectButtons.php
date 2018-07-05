<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$p = $_GET["p"];
//echo $p;
$_SESSION["SELECTED_PRJ"] = "$p";
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
<br><br>
<ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="#" onclick="ShowAssociatedWO(this.value);" value="">View-WO</a></li>
    <?php if ($_SESSION["AccessValue"] === '1'  or $_SESSION["AccessValue"] === '0')
    {
        ?>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Creation WO
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#" onclick="ShowAddWOFields(this.value);" value="">Add</a></li>
                <li><a data-toggle="tab" href="#" onclick="ShowEditWOButtons(this.value);" value="">Edit</a></li>
            </ul>
        </li>
        <li><a data-toggle="tab" href="#" onclick="ShowPMAddEditComments(this.value);" value="">PM-Add Edit Comments</a>
        </li>
    <?php }
    ?>
</ul>

<div id="AssociatedWO"></div>
<!-- GetAssociatedWO.php, GetAddWOFields.php,  GetEditWOFields.php, GetPMAddEditComments.php -->


<br><br>

</body>
</html>
