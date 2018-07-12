<html>
<head>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
</head>
<body>
<div style="text-align: center;">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <a href="LoggedOut.php">
        <h2>Click here to log out completely...</h2>
    </a>
</div>
</body>
<script>
    $(document).ready(function ()
    {
        function disableBack()
        {
            window.history.forward()
        }

        window.onload = disableBack();
        window.onpageshow = function (evt)
        {
            if (evt.persisted) disableBack()
        }
    });
</script>
</html>
