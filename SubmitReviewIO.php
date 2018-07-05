<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Date: 28-06-2018
 * Time: 15:28
 */
include 'connect.php';
session_start();
$IO_ID = $_SESSION['SELECTED_IO_ID'];
//echo 'ritwik';
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
<form action="" method="POST" id="SubmitQAIO" role="form">
    <div class="container-fluid">
        <table id="StatusTable">
            <tr>
                <th>Review</th>
                <th> Score</th>
                <th> StartDate</th>
                <th> Completion Date</th>
<!--                <th> ID</th>-->
                <th style="width:60px;">Info</th>
            </tr>
            <tr>
                <?php
                $select = "SELECT * FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
                $result = mysqli_query($conn, $select);
                $num_rows = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result))
                {
                ?>
            <tr>
                <td>Review</td>
                <td><?php echo $row["Score"]; ?></td>
                <td><?php echo $row["ReviewStartDate"]; ?></td>
                <td><?php echo $row["ReviewCompleteDate"]; ?></td>
<!--                <td>--><?php //echo $row["ID"]; ?><!--</td>-->
                <td><input type="radio" name="DisplayQASubmitReviewButtonsIO" id="QACalculateReviewIDIO" value="<?php echo $row["IO_ID"]; ?>" required></td>
            </tr>
            <?php
            }
            ?>
            </tr>
        </table>
        <br>
        <input type="submit" name="Submit" value="Submit" style="margin-left:45%;">
    </div>
</form>
</body>
</html>
