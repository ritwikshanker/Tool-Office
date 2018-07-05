<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$Seleted_WO_Edit_ID = $_GET["s"];
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
   <form action="" method="POST" id="PostEditWO" role="form">
        <div class = "container-fluid">
            <table class="table">
                <tr>
                    <th>WO No.</th>
                    <th>ATA Number</th>
                    <th>OWNER</th>
                    <th>WO Allotted Date</th>
                    <th>SFCK Date - Planned</th>
                    <th>PR</th>
                    <th>PR QA Completion Date - Planned</th>
                    <th>IR</th>
                    <th>IR QA Completion Date - Planned</th>
                </tr>
                
                <?php
                $sql="SELECT * FROM `associated_wos` WHERE `ID` = '$Seleted_WO_Edit_ID'";
                $result = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result)) {?>
                    <tr>
                        <td><input type = "text" id = "EditWONo<?php $row["WO No"]; ?>"             Value = "<?php echo $row["WO No"];?>" disabled></td>
                        <td><input type = "text" id = "EditATANumber<?php $row["WO No"]; ?>"        Value = "<?php echo $row["ATA Number"];?>"disabled></td>
                        <td><input type = "text" id = "EditOwner<?php $row["WO No"]; ?>"            Value = "<?php echo $row["Owner"];?>"></td>
                        <td><input type = "text" id = "EditWOAdatepicker<?php $row["WO No"]; ?>"    Value = "<?php echo $row["WO Allotted date"];?>"></td>
                        <td><input type = "text" id = "EditSFCKPdatepicker<?php $row["WO No"]; ?>"  Value = "<?php echo $row["SFCK Date- Planned"];?>"></td>
                        <td><input type = "text" id = "EditPR<?php $row["WO No"]; ?>"               Value = "<?php echo $row["Peer Reviewer"];?>"></td>
                        <td><input type = "text" id = "EditPRQACPdatepicker<?php $row["WO No"]; ?>" Value = "<?php echo $row["Peer QA Completion Date- Planned"];?>"></td>
                        <td><input type = "text" id = "EditIR<?php $row["WO No"]; ?>"               Value = "<?php echo $row["Internal Reviewer"];?>"></td>
                        <td><input type = "text" id = "EditIRQACPdatepicker<?php $row["WO No"]; ?>" Value = "<?php echo $row["Internal QA Completion Date- Planned"];?>"></td>
						<td><input type = "hidden" id = "ID<?php $row["WO No"]; ?>"     	 	 	Value = "<?php echo $row["ID"];?>"></td>
					</tr>
                <?php
                }?>
            </table>
            <br>
            <input type = "hidden" id = "WORowsCount" value = "<?php echo $num_rows;?> ">
            <input type = "hidden" id = "SelectedProject" value = "<?php echo $Seleted_Prj;?> ">
            <input type = "submit" name = "Submit" value = "Submit" style = "margin-left:45%;">
        </div>
    </form>
<br><br>

</body>
</html>
