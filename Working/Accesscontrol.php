
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

<?php 
include 'connect_login.php';

if(isset($_POST['Login']))
{
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    

    $sql = "SELECT * FROM `employee_details` WHERE `Emp_Id`='" . $_POST["username"] . "'";
    $result = mysqli_query($conn,$sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows > 0){
        while ($row = mysqli_fetch_array($result)) {
            if($row["Emp_Id"] == $_POST['username']){
                $_SESSION["user_id"] = $_POST['username'];
                $_SESSION["emp_name"] = $row['Name'];
                $_SESSION["emp_mail"] = $row['Email_Id'];
                
                $_SESSION["mr_mail"] = "Prasad.Iyengar@esterline.com";
                $_SESSION["mr_name"] = "Prasad Iyengar";
                
                // $_SESSION["mr_mail"] = "rajesh.reddy@esterline.com";
                // $_SESSION["mr_name"] = "Rajesh Reddy Chirareddy";
                
                if($_POST['password'] == "password"){
                    include 'ChangePassword.php';
                }elseif($row["Emp_Password"] == $_POST['password']){
                    $_SESSION["user_pwd"] = $_POST['password'];
                    header('Location: HomePage.php');
                }else{
                    echo "<script type='text/javascript'>alert('Invalid Username or Password!');</script>";
                    include 'Login.php';
                }
            }
        }
    }else{
        echo "<script type='text/javascript'>alert('Employee ID not found!');</script>";
        include 'Login.php';
    }
}

?>