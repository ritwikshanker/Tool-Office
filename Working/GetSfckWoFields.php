<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */

include 'connect.php';
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
<form action="" method="POST" id="PostAddSFCKWO" role="form">
    <div class = "container-fluid">
        <table class="table">
            <tr>
                <th>SFCK</th>
                <td>
                    <select type = "text" name = "SFCK" id = "SFCKVal">
                        <option selected disabled>Select SFCK</option>
                        <option value = "SFCK-Completed">Owner SFCK</option>
                        <option value = "PR COMNTS SFCK">Peer Comment SFCK</option>
                        <option value = "IR COMNTS SFCK">Internal Comment SFCK</option>
                    </select>
                </td>
            </tr>
            
            <tr>
                <th>Submission Date</th>
                <td><input type = "text" id = "Sdatepicker" name = "SubmissionDate"></td>
            </tr>
            
        </table>
        <br>
        <input style = "margin-left:35%;" type = "submit" name = "SubmitSFCK" value = "Submit SFCK" >
    </div>
</form>

<br><br>

</body>
</html>
