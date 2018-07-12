<?php

session_start();

// remove all session variables
session_unset();
// destroy the session 
session_destroy();

?>
<html>
<head>
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAdVItAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERERAAAAAQAAAAEAAAABAAAAAQAAAAEAAAAAAAAAAQAAAAAAEAABAAAAAAARAAEAEREREREQAQAREREREREBABEREREREAEAAAAAABEAAQAAAAAAEAABAAAAAAAAAAEAAAABAAAAAQAAAAEAAAABEREREQAAAAAAAAAAAAAAAAfwAAf38AAH9/AAB//wAAf+8AAH/nAABgAwAAYAEAAGADAAB/5wAAf+8AAH//AAB/fwAAf38AAAB/AAD//wAA"
          rel="icon" type="image/x-icon"/>
</head>
<body style="font-family:Arial;font-size:15px;">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div style="text-align: center;">
    <br>
    <b>You have logged out successfully...<b>
            <br>
            <br>
            <a href="Login.php">
                <h3>Click Here to login<h3>
            </a>
</div>
</body>
</html>