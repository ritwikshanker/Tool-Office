

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href = "style.css" rel= "stylesheet" type= "text/css"/>
<style>
.panel-heading{
    background-color:#0131A9;
}
</style>

<script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>


</head> 

<?php
include 'connect_login.php';

if(isset($_POST['ResetPassword']))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    $NewPassword = $_POST["NewPassword"];
    $NewPasswordConfirm = $_POST["NewPasswordConfirm"];
    if($NewPassword == $NewPasswordConfirm){
        $update = "UPDATE `employee_details` SET `Emp_Password`='$NewPassword' WHERE `Emp_Id` = '" . $_SESSION["user_id"] . "'";
        
        mysqli_query($conn,$update);
        
        if($conn->query($update) === True) { 
            echo "<script type='text/javascript'>alert('Password changed successfully!');</script>";
        }
    }else{
        echo "<script type='text/javascript'>alert('Password does'nt match!');</script>";
    }
}

?>


<body>

<div class="container" style = "width:30%;margin-top:7%;">   
    <center><h1><b>TASK TRACKER LOGIN</b></h1></center>
    <br><br>
    <img src="ESL_Color_trans.gif" alt="Avatar" style = "margin-left:28%;width:235px;height:60px;">
    <br><br><br>
    
    <div class="panel panel-info" >
        <div class="panel-heading">
            <div class="panel-title">Sign In</div>
            <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="ForgotPassword.php">Forgot password?</a></div>
        </div>     

        <div style="padding-top:30px" class="panel-body" >
                
            <form action = "Accesscontrol.php" method = "post">
                        
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" name="username" value="" placeholder="Employee ID" required>                                        
                </div>
                    
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" name="password" placeholder="password" required>
                </div>
					 <div>
						<select name="Select Team" style = "margin-left:16%;" required>
							<option value="" disabled selected>--Select Team--</option>
							<optgroup label="ECCS">
								<option value="korry">Korry</option>
							</optgroup>
							<optgroup label="EAD">
								<option value="defense">Defense</option>
								<option value="avionics">Avionics</option>
								<option value="svs">SVS</option>
							</optgroup>
							<optgroup label="EAS">
								<option value="aunitrol">Aunitrol</option>
								<option value="veston">Veston</option>
							</optgroup>
							<optgroup label="EPS">
								<option value="lie">LIE</option>
							</optgroup>
						</select>
					</div>
					<div>
					<select name="Select Role" style = "margin-left:16%;" required>
							<option value="" disabled selected>--Select Role--</option>
							<option value="PM">Project Manager</option>
							<option value="TL">Technical Lead</option>
							<option value="PR">Peer Reviewer</option>
							<option value="IR">Internal Reviewer</option>
							<option value="ILLUS">Illustrator</option>
							<option value="ILR">Illustrator Reviewer</option>
						</select>
					</div>
					<br>
					</br>
                <input type="submit" value = "Login" name="Login" style = "margin-left:40%;">
            </form>     
        </div>                      
    </div>
</div>
</body>
</html>       