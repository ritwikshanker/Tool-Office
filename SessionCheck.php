<?php

if (!isset($_SESSION))
{
    session_start();
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900))
{
    echo "<script type='text/javascript'>alert('Session Expired. You are logged out!!');</script>";
    session_unset();     // unset $_SESSION variable for the run-time 
    session_destroy();   // destroy session data in storage
    header('Location: Login.php');

}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

?>

