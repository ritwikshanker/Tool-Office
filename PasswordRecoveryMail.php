<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>

<?php
define("PROJECT_HOME", "http://ein-blr-srms01/workflow/");
define("START", "Hi ");

$to = "" . $row["Email_Id"] . "";

$message = "<div>" . START . "" . $row["Name"] . ",<br><br><p>Please click this link to reset your workflow tool password<br><a href='" . PROJECT_HOME . "ResetPassword.php?EmpID=" . $row["Emp_Id"] . "'>" . PROJECT_HOME . "ResetPassword.php?EmpID=" . $row["Emp_Id"] . "</a><br><br></p>Regards,<br> Esterline India.<br>*This is a system generated email*</div>";

/*Setting the header part, this is important */
$header = "From:esliCRtool@esterline.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

/*Subject*/
$subject = "Forgot Password Recovery";

$retval = mail($to, $subject, $message, $header);

if ($retval == true)
{
    echo "<script type='text/javascript'>alert('Please check your email to reset password!');</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Problem in Sending Password Recovery Email');</script>";
}

// remove all session variables
session_unset();
// destroy the session 
session_destroy();

?>
