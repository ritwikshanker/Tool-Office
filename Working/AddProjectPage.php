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
    <form action="" method="POST" id="PostAddProject" role="form">
        <div class = "container-fluid" style = "margin-top:5%;">
            <h3><b>Add Project</b></h3>
            <br>
            <table class="table">
                <tr>
                    <th>Partner</th>
                    <td><input type = "text" name = "Partner" id = "AddPartner" required></td>
                </tr>
                <tr>
                    <th>Project</th>
                    <td><input type = "text" name = "Project" id = "AddProject" required></td>
                </tr>
                <tr>
                    <th>Manual</th>
                    <td><input type = "text" name = "Manual" id = "AddManual" required></td>
                </tr>
                <tr>
                    <th>Target%</th>
                    <td><input type = "text" name = "Target" id = "AddTarget" required></td>
                </tr>
                <tr>
                    <th>Description / Title</th>
                    <td><input type = "text" name = "DescriptionTitle" id = "AddDescriptionTitle" required></td>
                </tr>
                <tr>
                    <th>Type of Work</th>
                    <td><input type = "text" name = "TypeofWork" id = "AddTypeofWork" required></td>
                </tr>
                <tr>
                    <th>Customer Delivery Date</th>
                    <td><input type = "text" name = "CustomerDeliveryDate" id = "AddCustomerDeliveryDate" required></td>
                </tr>
                <tr>
                    <th>Remarks</th>
                    <td><input type = "text" name = "Remarks" id = "AddRemarks" required></td>
                </tr>
                
            </table>
        </div>
        <center><input type = "submit" value = "Add Project" name = "AddProject"></center>
    </form>

<br><br>

</body>
</html>
