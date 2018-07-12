<?php
/**
 * Created by PhpStorm.
 * User: ritwik.shanker
 * Copyright of Esterline Technologies (c) 2018.
 */
session_start();
if (empty($_SESSION["user"]))
{
    header("Location:Login.php");
}

include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en" xmlns:text-align="http://www.w3.org/1999/xhtml" xmlns:display="http://www.w3.org/1999/xhtml">
<head>
    <title>Task Tracker Tool</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="AjaxRequestFunctions.js"></script>
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAABkunwAW7d0AAAAAADw+fEAXLd0AOP05gB5yYcA0u7WAIbLmAC55MAAasp2AGC8dwCL0ZkAYcNvAOv37QCw4bcA1OzZAH/OkABcunMAaMhyAGTGbwBmvH0AWbhwAP///wDy+vQA+/38AGTBeQBYtW8AWbVvAIrNmQCGy5YAX75xAGnJdgBmx3MAVrZsAGTDdACM0JkAYcJvAFi1bgB1xYUAuOO/AGPEcQC2474AY8FwAGnBfgBnvn0AW7lyAHPKgABjxW4Ah8yYAIjNlgBQuWoAaMh1AGXHcABbuXEA/f79AIXMlwBoyHQAYcRuAFe3bQBixG4AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMzMzMzMzMzMzMzMzMzMzMzMCAgICAgICAgICAgICAjMzAhEREREREREREREREQIzMwIRERERMRUACBERERECMzMCERERCxIWHBsBERERAjMzAhERGh8nEB0iJgQREQIzMwIRESMGGBc3HjsuOBECMzMCEREvAxcOFxkyNi0RAjMzAhERIQ8HKygXGSQsEQIzMwIRESAUOg0lCRcFDBECMzMCEREREzUwPCkqERERAjMzAhEREREKEzk0EREREQIzMwIRERERERERERERERECMzMCERERERERERERERERAjMzAgICAgICAgICAgICAgIzMzMzMzMzMzMzMzMzMzMzMwAAAAB//gAAQAIAAEACAABAAgAAQAIAAEACAABAAgAAQAIAAEACAABAAgAAQAIAAEACAABAAgAAf/4AAAAAAAA="
          rel="icon" type="image/x-icon"/>

</head>

<body>
<img src="ESL_Color_trans.gif" alt="Avatar" width="235" height="60" style="margin-left:40%;">
<br>
<div align="right">
    <label><?php echo 'Welcome ' . $_SESSION["emp_name"] . '   '; ?></label>
</div>
<ul class="nav nav-tabs">
    <?php if ($_SESSION["AccessValue"] === '1' or $_SESSION["AccessValue"] === '0')
    {
        ?>

        <li><a data-toggle="tab" href="#" onclick="ShowAddProjectPage(this.value);" value=""> Add Project </a></li>
    <?php } ?>
    <li><a data-toggle="tab" href="#" onclick="ShowEditProjectPage(this.value);" value="">Editing Project</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Report
            <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a data-toggle="tab" href="#" onclick="ShowIndividualSummary(this.value);" value="">Individual
                    Summary</a></li>
            <li><a data-toggle="tab" href="#" onclick="ShowTeamReport(this.value);" value="">Team Report</a></li>
        </ul>
    </li>
    <li style="float : right"><a text-align:center;="" data-toggle="tab" href="#"
                                 onclick="LoggedOut(this.value);"
                                 value="">
            Logout</a></li>

</ul>

<div id="ProjectPage"></div>

<br><br>

</body>
</html>
