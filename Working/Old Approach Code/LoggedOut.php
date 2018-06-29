<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

session_start();

// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 

?>
<html>
<body style="font-family:Arial;font-size:15px;">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
    <br>
	<b>You have logged out successfully...<b>
    <br>
	<br>
	<a href="Login.php"><h3>Click Here to login<h3></a>	
</center>	
</div>
</body>
</html>