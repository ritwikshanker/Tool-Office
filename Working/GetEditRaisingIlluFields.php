<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
session_start();
$_SESSION['SELECTED_IO_ID']= $_GET['y'];
$y=$_SESSION['SELECTED_IO_ID'];
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
<body><form action="" method="POST" id="PostEditIllu" role="form">
    <div class = "container-fluid">
        <table class="table">
            <tr>
                <th>Illustrator</th>
                <th>Reviewer</th>
                <th>Graphic ID (Old)</th>
                <th>Type</th>
                <th>Remarks</th>
                <th>Raised Date</th>
                <th>Required Date</th>
			</tr>
			
                <?php
                $sql="SELECT * FROM `wo_raisingillustration` where `IO_ID` = '$y' ";
                $result = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($result);
                while ($row = mysqli_fetch_array($result)) {?>
                    <tr>
                        <td><input type = "text" id = "Illustrator<?php $row["IO_ID"]; ?>"             Value = "<?php echo $row["Illustrator"];?>"></td>
                        <td><input type = "text" id = "Reviewer<?php $row["IO_ID"]; ?>"        Value = "<?php echo $row["Reviewer"];?>"></td>
                        <td><input type = "text" id = "GraphicIDOld<?php $row["IO_ID"]; ?>"            Value = "<?php echo $row["Graphic ID Old"];?>"></td>
                        <td><input type = "text" id = "Type<?php $row["IO_ID"]; ?>"    Value = "<?php echo $row["Type"];?>"  ></td>
                        <td><input type = "text" id = "Remarks<?php $row["IO_ID"]; ?>"  Value = "<?php echo $row["Remarks"];?>"></td>
                        <td><input type = "text" id = "RaisedDate<?php $row["IO_ID"]; ?>"               Value = "<?php echo $row["IO allotted date"];?>"></td>
                        <td><input type = "text" id = "RequiredDate<?php $row["IO_ID"]; ?>" Value = "<?php echo $row["IO required date"];?>"></td>
                	</tr>
                <?php
                }?>
        </table>
        <br>
        <input type = "hidden" id = "IORowsCount" value = "<?php echo $num_rows;?>">
		<input type = "hidden" id = "SelectedIO" value = "<?php echo $_SESSION['SELECTED_IO_ID'];?>" >
        <input style = "margin-left:35%;" type = "submit" name = "SubmitIllu" value = "SubmitIllu">
    </div>
	</form>
<br><br>

</body>
</html>
