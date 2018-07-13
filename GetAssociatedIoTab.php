<?php
include 'connect.php';
session_start();
$_SESSION["SELECTED_IO_ID"] = $_GET["az"];
//echo $_SESSION['SELECTED_WO_ID'];
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
<?php if ($_SESSION["AccessValue"] === '6' or $_SESSION["AccessValue"] === '0')
{
?>
<ul class="nav nav-tabs nav-justified">
    <li><a data-toggle="tab" href="#" onclick="ShowStartWIPIOFields(this.value);" value="">Start-WIP</a></li>
    <li><a data-toggle="tab" href="#" onclick="ShowIlluAddEditCommentsFields(this.value);" value="">Illustrator-Add/Edit
            Comments</a></li>
    <li><a data-toggle="tab" href="#" onclick="ShowSfckIOFields(this.value);" value="">SFCK-IO</a></li>

    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reviewer - QA
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a data-toggle="tab" href="#" onclick="ShowAddReviewerQAIOFields(this.value);" value="">Add</a></li>
            <li><a data-toggle="tab" href="#" onclick="ShowEditReviewerQAIOButtons(this.value);" value="">Edit</a></li>
            <li><a data-toggle="tab" href="#" onclick="ShowDeleteReviewerQAIOFields(this.value);" value="">Delete</a>
            </li>
            <li><a data-toggle="tab" href="#" onclick="CalculateReviewScoreIO(this.value);" value="">Calculate</a></li>
            <li><a data-toggle="tab" href="#" onclick="SubmitReviewIO(this.value);" value="">Submit</a></li>
        </ul>
    </li>
    <li><a data-toggle="tab" href="#" onclick="ShowSendToOwnerFields(this.value);" value="">Send To Author</a></li>
    <?php
    }
    if ($_SESSION["AccessValue"] === '5' or $_SESSION["AccessValue"] === '0')
    {
    ?>
    <ul class="nav nav-tabs nav-justified">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Author - QA
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#" onclick="ShowEnterOwnerQAFields(this.value);" value="">Enter
                        Comment/error</a></li>
                <li><a data-toggle="tab" href="#" onclick="ShowAcceptOwnerQAFields(this.value);" value="">Accept QA</a>
                </li>
            </ul>
        </li>
        <?php
        }
        if ($_SESSION["AccessValue"] === '5' or $_SESSION["AccessValue"] === '0' or $_SESSION["AccessValue"] === '1' or $_SESSION["AccessValue"] === '6')
        {
            ?>
            <li><a data-toggle="tab" href="#" onclick="ShowVandVIOFields(this.value);" value="">V & V</a></li>

            <?php
        }
        ?>
    </ul>
</ul>
<div id="AssociatedilluProgress"></div>
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>