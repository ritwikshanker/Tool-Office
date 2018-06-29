<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Date: 25-06-2018
 * Time: 11:04
 */
include 'connect.php';
session_start();
$WO_ID = $_SESSION['SELECTED_WO_ID'];
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
<form action="" method="POST" id="CalculateQA" role="form">
    <div class="container-fluid">
        <table id="StatusTable">
            <tr>
                <th>Review Type</th>
                <th> Score</th>
                <th> StartDate</th>
                <th> Completion Date</th>
<!--                <th> ID</th>-->
                <th style="width:60px;">Info</th>
            </tr>
            <tr>
                <?php
                $select = "SELECT * FROM `wo_reviewerqa` WHERE `WO_ID` = '$WO_ID'";
                $result = mysqli_query($conn, $select);
                $num_rows = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result))
                {
                ?>
            <tr>
                <td><?php echo $row["reviewType"]; ?></td>
                <td><?php echo $row["reviewScore"]; ?></td>
                <td><?php echo $row["reviewStartDate"]; ?></td>
                <td><?php echo $row["reviewCompleteDate"]; ?></td>
<!--                <td>--><?php //echo $row["ID"]; ?><!--</td>-->
                <td><input type="radio" name="DisplayQAReviewButtons" id="QACalculateReviewID" value="<?php echo $row["ID"]; ?>" required></td>
            </tr>
            <?php
            }
            ?>
            </tr>
        </table>
        <br>
        <input type="submit" name="Calculate" value="Calculate" style="margin-left:45%;">
    </div>
</form>
</body>
</html>
