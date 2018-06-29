<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect_login.php';

if(isset($_POST['SendRecoveryMail']))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    
    $Username = $_POST["username"];
    $sql="SELECT * FROM `employee_details` WHERE `Emp_Id` = '$Username'";
    $result = mysqli_query($conn,$sql);
	 echo mysqli_num_rows($result);
    $Num_rows = mysqli_num_rows($result);
   
    if($Num_rows > 0){
        while($row = mysqli_fetch_array($result)){
            if($Username == $row["Emp_Id"] or $Username == $row["Email_Id"] ){
                require_once("PasswordRecoveryMail.php");
            }
        }
    }else{
        echo "<script type='text/javascript'>alert('No user found with Employee Id or Email!');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href = "style.css" rel= "stylesheet" type= "text/css"/>

</head> 
<body>
    
<div class="container" style = "width:30%;margin-top:10%;">   
    <img src="ESL_Color_trans.gif" alt="Avatar" style = "margin-left:20%;width:235px;height:60px;">
    <br><br><br>
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Forgot Password</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="Login.php">Sign in</a></div>
        </div>     

        <div style="padding-top:30px;padding-bottom:20px;" class="panel-body" >
                
            <form action = "" method = "post">
                
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="username" value="" placeholder="Employee ID or EMail">                                        
                </div>

                <input type="submit" value = "SendRecoveryMail" name="SendRecoveryMail" style = "margin-left:35%;">
                
            </form>
        </div>                      
    </div>

</div>
</body>
</html>       