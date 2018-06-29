
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
                  <a href="#"><i class="fa fa-globe fa-lg"></i> View-WO</a>
                </li>  
                
                 <li  data-toggle="collapse" data-target="#WOC" class="collapsed active">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Creation WO <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="WOC">
                    <li><a href="AddWo.php">Add</a></li>
                    <li class="active"><a href="#">Edit</a></li>
                </ul> 
                
                <li>
                  <a href="PMAddEditComments.php"><i class="fa fa-globe fa-lg"></i> PM-Add/Edit Comments</a>
                </li>  
            </ul>
        </div>
    </div>
    <br><br>
    <div class = "container-fluid">
        <table class="table">
            <tr>
                <th>WO No.</th>
                <td><input type = "text" name = "WONo"></td>
            </tr>
            
            <tr>
                <th>ATA Number</th>
                <td><input type = "text" name = "ATANumber"></td>
            </tr>
            
            <tr>
                <th>OWNER</th>
                <td><input type = "text" name = "Owner"></td>
            </tr>
            
            <tr>
                <th>WO Allotted Date</th>
                <td><input type = "text" name = "WOAllottedDate"></td>
            </tr>
            
            <tr>
                <th>SFCK Date - Planned</th>
                <td><input type = "text" name = "SFCKDatePlanned"></td>
            </tr>
            
            <tr>
                <th>PR</th>
                <td><input type = "text" name = "PR"></td>
            </tr>
            
            <tr>
                <th>PR QA Completion Date - Planned</th>
                <td><input type = "text" name = "PRQACompletionDatePlanned"></td>
            </tr>
            
            <tr>
                <th>IR</th>
                <td><input type = "text" name = "IR"></td>
            </tr>
            
            <tr>
                <th>IR QA Completion Date - Planned</th>
                <td><input type = "text" name = "IRQACompletionDatePlanned"></td>
            </tr>
            
        </table>
        <input type = "submit" name = "Submit" value = "Submit">
    </div>
<br><br><br><br><br><br>

</body>
</html>
