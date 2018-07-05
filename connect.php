<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "tasktrackertool");
 // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?> 
