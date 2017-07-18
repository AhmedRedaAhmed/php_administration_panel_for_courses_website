<?php
//start session
session_start();
require_once'connect.php';


if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>1 &&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5)
      {
         // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: dashbord.php');
            exit();
      }

//check come from post method
if( $_SERVER['REQUEST_METHOD']=='POST')
   {
    
    $username=$_POST['Username'];
    $password=$_POST['Password'];
      
    //for encryption password becuse i am use sha1 function with record my Admin 
    $hashedpass=sha1($password);
    
    
   // check If user in DataBase this is importan

    $stmt =$con->prepare("SELECT 
                              user_id,user_name, password , group_id 
                              FROM users 
                              WHERE user_name= ? and password = ? and group_id > 1 limit 1");
    
   $stmt->execute(array($username,$hashedpass));
   
   //for keep data from databeas in row 
   $row=$stmt->fetch();
      
   $count=$stmt->rowCount();
    
      // if count > 0 this mean the user in DataBeas
   if($count>0)
     { 
        //register session user_id
       $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id']=$row[user_id];
        
        //register session user_name
	   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_name']=$username;
     
       //register session group_id
   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']=$row[group_id];
        $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_password']=$password;
	        
        //if (user is Admin , develper ,teatch) go to dashboard
        header('location:dashbord.php');
	        exit();
	    
	        }
	    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Login</title>
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
	<div class="accountbg"></div>
	<div class="wrapper-page">
		<div class="panel panel-color panel-primary panel-pages">
			<div class="panel-body">
				<h3 class="text-center m-t-0 m-b-15"> <a href="index.html" class="logo logo-admin"><span>Web</span>Admin</a></h3>
				<h4 class="text-muted text-center m-t-0"><b>Sign In</b></h4>
				<form class="form-horizontal m-t-20" action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST">
					<div class="form-group">
						<div class="col-xs-12"> 
							<input class="form-control" type="text" name="Username" required=""
										 placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12"> 
							<input class="form-control" type="password" name="Password" required="" 
											placeholder="Password">
						</div>
					</div>
					
					<div class="form-group text-center m-t-40">
						<div class="col-xs-12"> 
							<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
						</div>
					</div>
					<div class="form-group m-t-30 m-b-0">
						<div class="col-sm-7"> 
							<a href="pages-recover-password.php" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
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
