<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$_SESSION['Selected_Error_ID'] = $_GET['m'];
$Selected_ErrorID = $_SESSION['Selected_Error_ID'];
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

    <style>
        .table td, .table th {
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 8px;
        }
    </style>

</head>

<body>
<form action="" method="POST" id="PostEditReviewQAIO" role="form">
    <div class="container-fluid">
        <table class="table">
            <tr>
                <th>Error</th>
                <th>Description</th>
                <th>Quantity</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `io_errorinfo` where `ID` = '$Selected_ErrorID'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result))
            { ?>
                <tr>
                    <td><input type="text" id="EditErrorCodeIO<?php $row["ID"]; ?>"
                               Value="<?php echo $row["ErrorCode"]; ?>"></td>
                    <td><input type="text" id="EditDescriptionIO<?php $row["ID"]; ?>"
                               Value="<?php echo $row["ErrorDesc"]; ?>"></td>
                    <td><input type="text" id="EditQuantityIO<?php $row["ID"]; ?>"
                               Value="<?php echo $row["Quantity"]; ?>"></td>
                    <td><input type="hidden" id="$Selected_ErrorIDIO<?php $row["ID"]; ?>"
                               Value="<?php echo $row["ID"]; ?>"></td>
                </tr>
                <?php
            } ?>
        </table>

        <input style="margin-left:40%;" type="submit" name="SubmitRQA" value="Submit">
    </div>
</form>
<br><br>

</body>
</html>
