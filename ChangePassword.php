<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="generator"
    content="HTML Tidy for HTML5 (experimental) for Windows https://github.com/w3c/tidy-html5/tree/c63cc39" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title></title>
  </head>
  <body>
    <div class="container" style="width:30%;margin-top:10%;">
      <img src="ESL_Color_trans.gif" alt="Avatar" style="margin-left:20%;width:235px;height:60px;" />
      <br />
      <br />
      <br />
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="panel-title">Change Password</div>
          <div style="float:right; font-size: 80%; position: relative; top:-10px">
            <a href="Login.php">Sign in</a>
          </div>
        </div>
        <div style="padding-top:30px;padding-bottom:20px;" class="panel-body">
          <form action="Login.php" method="post">
            <div style="margin-bottom: 25px" class="input-group">
              <input type="password" class="form-control" name="NewPassword" placeholder="New Password" required="" />
            </div>
            <div style="margin-bottom: 25px" class="input-group">
              <input type="password" class="form-control" name="NewPasswordConfirm" placeholder="Confirm Password" required="" />
            </div>
            <input type="submit" value="Reset Password" name="ResetPassword" style="margin-left:35%;" />
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
