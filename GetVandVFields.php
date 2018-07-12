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
            overflow: auto;
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
            <th>Authoring</th>
            <?php
            session_start();
            $WO_ID = $_SESSION['SELECTED_WO_ID'];
            $sql = "SELECT * FROM `associated_wos` WHERE `ID` = '$WO_ID'";
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
            $value = 'Peer Review';
            $sql = "SELECT * FROM `wo_errorinfo` WHERE `WO_NO` = '$WO_ID' AND `Review_Type` = '$value'";
            $result = mysqli_query($conn, $sql);
            $num_rows = mysqli_num_rows($result);
            ?>
        <tr>
            <th rowspan="<?php echo $num_rows + 1; ?>">Peer Review</th>
            <?php
            $select = "SELECT * FROM `wo_reviewerqa` WHERE `WO_ID` = '$WO_ID' and `reviewType` = '$value'";
            $result1 = mysqli_query($conn, $select);
            $num_rows1 = mysqli_num_rows($result1);
            while ($row1 = mysqli_fetch_array($result1))
            {
                ?>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewScore"]; ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewStartDate"]; ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["IncorporationDate"] ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewCompleteDate"]; ?></td>
                <?php
            }
            ?>
            <?php
            while ($row = mysqli_fetch_array($result))
            { ?>
        <tr>
            <td><?php echo $row["Error_Code"]; ?></td>
            <td><?php echo $row["Error_Description"]; ?></td>
            <td><?php echo $row["Error_Quantity"]; ?></td>
        </tr>
        <?php
        } ?>
        <br>
        <?php
        $value = 'Internal Review';
        $sql = "SELECT * FROM `wo_errorinfo` WHERE `WO_NO` = '$WO_ID' AND `Review_Type` = '$value'";
        $result = mysqli_query($conn, $sql);
        $num_rows = mysqli_num_rows($result);
        ?>
        <tr>
            <th rowspan="<?php echo $num_rows + 1; ?>">Internal Review</th>
            <?php
            $select = "SELECT * FROM `wo_reviewerqa` WHERE `WO_ID` = '$WO_ID' and `reviewType` = '$value'";
            $result1 = mysqli_query($conn, $select);
            $num_rows1 = mysqli_num_rows($result1);
            while ($row1 = mysqli_fetch_array($result1))
            {
                ?>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewScore"]; ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewStartDate"]; ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["IncorporationDate"]; ?></td>
                <td rowspan="<?php echo $num_rows + 1 ?>"><?php echo $row1["reviewCompleteDate"]; ?></td>
                <?php
            }
            ?>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($result))
        { ?>
            <tr>
                <td><?php echo $row["Error_Code"]; ?></td>
                <td><?php echo $row["Error_Description"]; ?></td>
                <td><?php echo $row["Error_Quantity"]; ?></td>
            </tr>
            <?php
        } ?>
    </table>

    <br><br>

    <h3><b>EXTERNAL</b></h3>
    <table id="StatusTable">
        <tr>
            <th>Phase</th>
            <!--                <th>Score</th>-->
            <th>Draft Delivery</th>
            <th>Shop Verification Date</th>
            <th>Final Delivery Date</th>
            <!--            <th>Accepted Date</th>-->
            <!--                <th>Error Code</th>-->
            <!--                <th>Error Description</th>-->
            <!--                <th>Escape</th>-->
        </tr>
        <!--            <tr>-->
        <!--                <th>FTA</th>-->
        <!--                <td>---</td>-->
        <!--                <td>---</td>-->
        <!--                <td>---</td>-->
        <!--                <td>---</td>-->
        <!--                <td>---</td>-->
        <!--                <td>---</td>-->
        <!--                <td>---</td>-->
        <!--                <td>---</td>-->
        <!--            </tr>-->
        <tr>


        <tr>
            <th>External</th>
            <?php
            $select = "SELECT * FROM `wo_externalqa` WHERE `WO_ID` = '$WO_ID'";
            $result1 = mysqli_query($conn, $select);
            $num_rows1 = mysqli_num_rows($result1);
            while ($row1 = mysqli_fetch_array($result1))
            {
                ?>
                <!--                <td rowspan="--><?php //echo $num_rows + 1
                ?><!--">-->
                <!--                    --><?php //echo $row1["Score"];
                ?><!--</td>-->
                <td>
                    <?php echo $row1["DraftDeliveryDate"]; ?></td>
                <td>
                    <?php echo $row1["ShopVerificationDate"]; ?></td>
                <td>
                    <?php echo $row1["SendDate"]; ?></td>
                <!--                <td rowspan="--><?php //echo $num_rows + 1
                ?><!--">-->
                <!--                    --><?php //echo $row1["AcceptedDate"];
                ?><!--</td>-->
                <!--                --><?php
            }
            ?>
        </tr>
        <!--        --><?php
        //        while ($row = mysqli_fetch_array($result))
        //        { ?>
        <!--            <tr>-->
        <!--                <!--                <td>--<?php ////echo $row["Error_Code"];
        //                ?><!--<!--</td>-->
        <!--                <!--                <td>--><?php ////echo $row["Error_Desc"];
        //                ?><!--<!--</td>-->
        <!--                <!--                <td>--><?php ////echo $row["Escapes"];
        //                ?><!--<!--</td>-->
        <!--            </tr>-->
        <!--            --><?php
        //        } ?>
    </table>
</div>

<br><br>

</body>
</html>
