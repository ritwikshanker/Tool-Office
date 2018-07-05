<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$Seleted_Prj = $_SESSION["SELECTED_PRJ"];
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
	<form action="" method="POST" id="PostEditProject" role="form">
    <div class = "container-fluid">
        <table class="table">
            <tr>
                <th>Partner</th>
                <th>Project</th>
                <th>Manual</th>
                <th>Description / Title</th>
                <th>Type of Work</th>
                <th>Customer Delivery Date</th>
                <th>Remarks</th>
            </tr>
            
            <?php
            $sql="SELECT * FROM `editing_project` WHERE `Project` = '$Seleted_Prj'";
            $result = mysqli_query($conn,$sql);
				$num_rows = mysqli_num_rows($result);
            while ($row = mysqli_fetch_array($result)) {?>
            <tr>
                <td><input type = "text" id = "EditPartner"  value = "<?php echo $row["Partner"];?>"></td>
                <td><input type = "text" id = "EditProject"  value = "<?php echo $row["Project"];?>"></td>
                <td><input type = "text" id = "EditManual"  value = "<?php echo $row["Manual"];?>"></td>
                <td><input type = "text" id = "EditDescription"  value = "<?php echo $row["Description"];?>"></td>
                <td><input type = "text" id = "EditTypeOfWork"  value = "<?php echo $row["Type of Work"];?>"></td>
                <td><input type = "text" id = "EditCDdatepicker"  value = "<?php echo $row["Customer Delivery Date"];?>"></td>
                <td><input type = "text" id = "EditRemarks"  value ="<?php echo $row["Remarks"];?>"></td>
            </tr>
            <?php
            }?>
           
        </table>
		   <input type = "hidden" id = "ProjectRowsCount" value = "<?php echo $num_rows;?> ">
			<input type = "hidden" id = "SelectedProject" value = "<?php echo $Seleted_Prj;?> ">
			<input type = "submit" name = "Submit" value = "Submit" style = "margin-left:45%;">
    </div>
	 </form>
<br><br>

</body>
</html>
