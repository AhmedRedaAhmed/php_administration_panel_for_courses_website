<?php session_start();

if($_SERVER['REQUEST_METHOD']=='POST'&&$_POST['password']==$_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_password'])
{header('location:index.php');}



?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>lock screen</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <meta content="Admin Dashboard" name="description" />
      <meta content="ThemeDesign" name="author" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link rel="shortcut icon" href="assets/images/favicon.ico">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
      <link href="assets/css/style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      <div class="accountbg">
      </div>
      <div class="wrapper-page">
         <div class="panel panel-color panel-primary panel-pages">
            <div class="panel-body">
               <h3 class="text-center m-t-0 m-b-15"><a href="pages-lock-screen.php" class="logo logo-admin">
                     <span>Web</span>Admin</a></h3>
               <form class="form-horizontal m-t-20" action="pages-lock-screen.php" method="post">
                  <div class="user-thumb text-center m-b-30"> 
                     <img src="assets/images/users/avatar-1.jpg" class="img-responsive img-circle img-thumbnail" alt="thumbnail">
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12">
                        <input class="form-control"name='password' type="password" required="" placeholder="Password">
                     </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                     <div class="col-xs-12"> 
                        <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                     </div>
                  </div>
                  <div class="form-group m-t-30 m-b-0">
                     <div class="col-sm-12 text-center"> 
                        <a href="logout.php" class="text-muted">Not you?</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery.min.js"></script> 
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/modernizr.min.js"></script>
      <script src="assets/js/detect.js"></script> 
      <script src="assets/js/fastclick.js"></script>
      <script src="assets/js/jquery.slimscroll.js"></script>
      <script src="assets/js/jquery.blockUI.js"></script> 
      <script src="assets/js/waves.js"></script>
      <script src="assets/js/wow.min.js"></script> 
      <script src="assets/js/jquery.nicescroll.js"></script> 
      <script src="assets/js/jquery.scrollTo.min.js"></script> 
      <script src="assets/js/app.js"></script>
   </body>
</html>