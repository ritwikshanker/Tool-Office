<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$WO_ID = $_SESSION['SELECTED_WO_ID'];
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

    <link href = "style.css" rel= "stylesheet" type= "text/css"/>

</head>
<body>
<form action="" method="POST" id="DeleteReviewQA" role="form">
    <div class = "container-fluid">
        <table id="StatusTable">
            <tr>
                <th>Review Type</th>
                <th> Score </th>
                <th> StartDate </th>
                <th> Completion Date </th>
                <th>Error</th>
                <th>Description </th>
                <th>Quantity </th>
                <th style = "width:60px;">Info</th>

            </tr>
            <?php
            $value = 'Peer Review';
            $sql="SELECT * FROM `wo_errorinfo` WHERE `WO_NO` = '$WO_ID' AND `Review_Type` = '$value'";
            $result = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($result);
            ?>
            <tr>
                <td rowspan = "<?php echo $num_rows + 1 ;?>">Peer Review</td>
                <?php
                $select = "SELECT * FROM `wo_reviewerqa` WHERE `WO_ID` = '$WO_ID' and `reviewType` = '$value'";
                $result1 = mysqli_query($conn,$select);
                $num_rows1 = mysqli_num_rows($result1);
                while($row1 = mysqli_fetch_array($result1))
                {?>
                    <td rowspan = "<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewScore"];?></td>
                    <td rowspan = "<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewStartDate"];?></td>
                    <td rowspan = "<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewCompleteDate"];?></td>
                    <?php
                }
                ?>
                <?php
                while ($row = mysqli_fetch_array($result)) {?>
            <tr>
                <td><?php echo $row["Error_Code"];?></td>
                <td><?php echo $row["Error_Description"];?></td>
                <td><?php echo $row["Error_Quantity"];?></td>
            <td><input type = "radio" name = "DisplayQAReviewButtons" id = "QAReviewID" value = "<?php echo $row["ID"];?>" required ></td>
            </tr>
        <?php
        }?>
            </tr>


            <?php
            $value = 'Internal Review';
            $sql="SELECT * FROM `wo_errorinfo` WHERE `WO_NO` = '$WO_ID' AND `Review_Type` = '$value'";
            $result = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($result);
            ?>
            <tr>
                <td rowspan = "<?php echo $num_rows + 1 ;?>">Internal Review</td>
                <?php
                $select = "SELECT * FROM `wo_reviewerqa` WHERE `WO_ID` = '$WO_ID' and `reviewType` = '$value'";
                $result1 = mysqli_query($conn,$select);
                $num_rows1 = mysqli_num_rows($result1);
                while($row1 = mysqli_fetch_array($result1))
                {?>
                    <td rowspan = "<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewScore"];?></td>
                    <td rowspan = "<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewStartDate"];?></td>
                    <td rowspan = "<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewCompleteDate"];?></td>
                    <?php
                }
                ?>
                <?php
                while ($row = mysqli_fetch_array($result)) {?>
            <tr>
                <td><?php echo $row["Error_Code"];?></td>
                <td><?php echo $row["Error_Description"];?></td>
                <td><?php echo $row["Error_Quantity"];?></td>
                <td><input type = "radio" name = "DisplayQAReviewButtons" id = "QAReviewID" value = "<?php echo $row["ID"];?>" required ></td>
        </tr>
        <?php
        }?>
        </table>
        <br>
        <input type = "submit" name = "Submit" value = "Delete" style = "margin-left:45%;">
    </div>
</form>
<br><br>

</body>
</html>
