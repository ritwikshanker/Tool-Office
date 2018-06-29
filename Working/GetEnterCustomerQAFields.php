
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
<form action="" method="POST" id="PostAddCSTMRQA" role="form">
    <div class = "container-fluid">
        <table class="table">
            <tr>
                <th>Error Code</th>
                <td><input type = "text" name = "ErrorCode" id = "ErrorCode"></td>
            </tr>
            
            <tr>
                <th>Error Description</th>
                <td><input type = "text" name = "ErrorDescription" id = "ErrorDescription"></td>
            </tr>
            
            <tr>
                <th>Escapes</th>
                <td><input type = "text" name = "Escapes" id = "Escapes"></td>
            </tr>
            
            <tr>
                <th>Received Date</th>
                <td><input type = "text" id = "Receiveddatepicker" name = "ReceivedDate"></td>
            </tr>
            
        </table>
        <br>
        <input style = "margin-left:45%;" type = "submit" name = "SubmitCQA" value = "Submit">
    </div>
</form>
<br><br>

</body>
</html>
