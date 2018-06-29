
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

    <img src="ESL_Color_trans.gif" alt="Avatar" width="235" height="60" style = "margin-left:1%;">
    <div class="TopNavMargin">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button"  data-target="#navbarCollapse"  data-toggle="collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Home</a>
            </div>
            <!-- Collection of nav links and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li class="active"><a href="EditProjectPage.php">Editing Project</a></li>
                    <li><a href="AssociatedWO.php">Associated WO</a></li>
                    <li><a href="AssociatedILLU.php">Associated ILLU</a></li>
                    <li><a href="Report.php">Report</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <!--<li><a href="#" data-toggle="modal" data-target="#logoutModal">Logout</a></li>-->
                    <li><a href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="nav-side-menu">
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="#"><i class="fa fa-globe fa-lg"></i>View-WO </a>
                </li>  
                  
                 <li  data-toggle="collapse" data-target="#WOC" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Creation WO <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="WOC">
                    <li><a href="AddWo.php">Add</a></li>
                    <li><a href="EditWO.php">Edit</a></li>
                </ul> 
                
                <li>
                  <a href="PMAddEditComments.php"><i class="fa fa-globe fa-lg"></i>PM-Add Edit Comments</a>
                </li>  
            </ul>
        </div>
    </div>


<br><br><br><br><br><br>

</body>
</html>
