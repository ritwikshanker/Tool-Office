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

    <style>
        .table td, .table th {
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 8px;
            overflow: hidden;
        }
    </style>

</head>
<body>

<div class="container-fluid" style="margin-top:5%;">
    <h3><b>PRODUCTION</b></h3>
    <table id="StatusTable">
        <tr>
            <th>Phase</th>
            <th>Score</th>
            <th>Start Date</th>
            <th>Incorporation Date</th>
            <th>Completion Date</th>
            <th>Error Code</th>
            <th>Error Description</th>
            <th>Turnback</th>
        </tr>
        <tr>
            <th>Illustration</th>
            <?php
            session_start();
            $IO_ID = $_SESSION['SELECTED_IO_ID'];
            $sql = "SELECT * FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
            //echo $sql;
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result))
            { ?>
                <td>---</td>
                <td><?php echo $row["StartDate"]; ?></td>
                <td>---</td>
                <td><?php echo $row["SFCK SubmissionDate"]; ?></td>
                <?php
            } ?>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <tr>
            <?php
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
                <td rowspan="<?php echo $num_rows + 1 ?>">---</td>
                <td rowspan="<?php echo $num_rows + 1 ?>">---</td>
                <td rowspan="<?php echo $num_rows + 1 ?>">---</td>
                <td rowspan="<?php echo $num_rows + 1 ?>">---</td>
                <?php
            }
            ?>
            <?php
            while ($row = mysqli_fetch_array($result))
            { ?>
        <tr>
            <td>---</td>
            <td>---</td>
            <td>---</td>
        </tr>
        <?php
        } ?>
        <br>
        <?php
        $sql = "SELECT * FROM `io_ownererror` WHERE `IO_ID` = '$IO_ID'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        ?>
        <tr>
            <th rowspan="<?php echo $num_rows + 1; ?>">Author Review</th>
            <?php
            $select = "SELECT * FROM `wo_raisingillustration` WHERE `IO_ID` = '$IO_ID'";
            $result1 = mysqli_query($conn, $select);
            $num_rows1 = mysqli_num_rows($result1);
            while ($row1 = mysqli_fetch_array($result1))
            {
                ?>
                <td rowspan="<?php echo $num_rows + 1 ?>">---</td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["OwnerStartDate"]; ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["OR_SFCKDate"]; ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["OwnerSendDate"]; ?></td>
                <?php
            }
            ?>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result))
        { ?>
            <tr>
                <td><?php echo $row["Error_Code"]; ?></td>
                <td><?php echo $row["Error_Desc"]; ?></td>
                <td><?php echo $row["Quantity"]; ?></td>
            </tr>
            <?php
        } ?>
    </table>

    <br><br>
</div>

<br><br>

</body>
</html>
