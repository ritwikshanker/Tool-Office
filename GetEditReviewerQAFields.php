<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$_SESSION['Selected_ReviewID'] = $_GET['b'];
$Selected_ReviewID = $_SESSION['Selected_ReviewID'];
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
<form action="" method="POST" id="PostEditReviewQA" role="form">
    <div class="container-fluid">
        <table class="table">
            <tr>
                <th>Error</th>
                <th>Description</th>
                <th>Quantity</th>
            </tr>
            <?php
            $sql = "SELECT * FROM `wo_errorinfo` where `ID` = '$Selected_ReviewID'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result))
            { ?>
                <tr>
                    <td><input type="text" id="EditErrorCode<?php $row["ID"]; ?>"
                               Value="<?php echo $row["Error_Code"]; ?>"></td>
                    <td><input type="text" id="EditDescription<?php $row["ID"]; ?>"
                               Value="<?php echo $row["Error_Description"]; ?>"></td>
                    <td><input type="text" id="EditQuantity<?php $row["ID"]; ?>"
                               Value="<?php echo $row["Error_Quantity"]; ?>"></td>
                    <td><input type="hidden" id="$Selected_ReviewID<?php $row["ID"]; ?>"
                               Value="<?php echo $row["ID"]; ?>"></td>
                </tr>
                <?php
            } ?>
        </table>
        <br>
        <input style="margin-left:35%;" type="submit" name="SumbitEditError" value="Sumbit">
    </div>
</form>

<br><br>

</body>
</html>
