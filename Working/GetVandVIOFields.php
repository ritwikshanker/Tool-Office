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
    
    <style>
    .table td, .table th {
        border-right: 1px solid #ddd;
        border-bottom: 1px solid #ddd;
        padding: 8px;
        overflow:hidden;
    }
    </style>
    
</head> 
<body>
    
    <div class = "container-fluid" style = "margin-top:5%;">
        <h3><b>PRODUCTION</b></h3>
        <table id="StatusTable">
            <tr>
                <th>Phase</th>
                <th>Error Code</th>
                <th>Error Description</th>
                <th>Turnback</th>
                <th>Score</th>
                <th>Start Date</th>
                <th>Incorporation Date</th>
                <th>Completion Date</th>
            </tr>
            <tr>
                <th>Illustration</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Review</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th>Owner Review</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>

    </div>

<br><br>

</body>
</html>
