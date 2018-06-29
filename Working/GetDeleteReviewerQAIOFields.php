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
 * Time: 10:21
 */

include 'connect.php';
session_start();
$IO_ID = $_SESSION['SELECTED_IO_ID'];
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
<form action="" method="POST" id="PostDeleteReviewQAIO" role="form">
    <div class="container-fluid">
        <table id="StatusTable">
            <tr>
                <th>Review</th>
                <th> Score</th>
                <th> StartDate</th>
                <th> Completion Date</th>
                <th>Error</th>
                <th>Description</th>
                <th>Quantity</th>
                <th style="width:60px;">Info</th>

            </tr>
            <?php
            //        echo "ritwik";
            $sql = "SELECT * FROM `io_errorinfo` WHERE `IO_ID` = '$IO_ID'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            ?>
            <tr>
                <th rowspan="<?php echo $num_rows + 1; ?>">Review</th>
                <?php
                $select = "SELECT * FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
                $result1 = mysqli_query($conn, $select);
                $num_rows1 = mysqli_num_rows($result1);
                while ($row1 = mysqli_fetch_array($result1))
                {
                    ?>
                    <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["Score"]; ?></td>
                    <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["ReviewStartDate"]; ?></td>
                    <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["ReviewCompleteDate"]; ?></td>
                    <?php
                }
                ?>
                <?php
                while ($row = mysqli_fetch_array($result))
                { ?>
            <tr>
                <td><?php echo $row["ErrorCode"]; ?></td>
                <td><?php echo $row["ErrorDesc"]; ?></td>
                <td><?php echo $row["Quantity"]; ?></td>
                <td><input type="radio" name="DisplayQAReviewButtons" value="<?php echo $row["ID"]; ?>" id="QAReviewID"
                           required></td>
            </tr>
        <?php
        } ?>
            </tr>
        </table>
        <input style="margin-left:40%;" type="submit" name="SubmitRQA" value="Submit">
    </div>
</form>
<!--<div id="AssociatedilluButton"></div>-->
<br><br>

</body>
</html>
