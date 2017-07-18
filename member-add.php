<?php 

session_start();

      $page_titele='add member';
require_once'connect.php';
require_once'/assets/func/function.php';

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5)
   {
      require_once'header.php';
                  ?>
      </head>
      <body class="fixed-left">

       <h1 class = "text-center">Add a new Member</h1>
       <div class = 'container'>
          <!-- this form go to member-insert.php -->
           <form class= "form-horizontal"  action="member-insert.php" method="POST" style="position: relative; right: -152px; top: 31px; " >

               <!-- start username filed -->
                   <div class="form-group  form-group-lg">
                       <label class = "col-sm-2 control-label">Username</label>
                       <div class ="col-sm-10 col-md-6">
                           <input  type="text" name="username" class="form-control"     autocomplete="off" required="required" placeholder="Username to login into shop" / > 
                       </div>
                   </div>
                   <!-- end username filed -->

               <!-- start password filed -->

                   <div class="form-group form-group-lg">
                       <label class = "col-sm-2 control-label">Password</label>
                       <div class ="col-sm-10 col-md-6">
                           <input  type="password" name="Password" class=" password form-control"  autocomplete="new-password"  required="required" placeholder="password must be Hard & complex" /> 
                           <i class="show-pass fa fa-eye fa-2x"></i>
                       </div>
                   </div>
                   <!-- end password filed -->

               <!-- start Email filed -->
                   <div class="form-group form-group-lg">
                       <label class = "col-sm-2 control-label">E-mail</label>
                       <div class ="col-sm-10 col-md-6">
                           <input  type="Email" name="Email" class="form-control" required="required" placeholder="Email must be valid" / > 
                       </div>
                   </div>
                   <!-- end Email filed -->

               <!-- start FullName filed -->
                   <div class="form-group form-group-lg">
                       <label class = "col-sm-2 control-label">FullName</label>
                       <div class ="col-sm-10 col-md-6">
                           <input  type="text" name="FullName" class="form-control" required="required"  placeholder="Full Name Appear in your profile page" / > 
                       </div>
                   </div>
                   <!-- end FullName filed -->

                    <!-- start submet filed -->
                   <div  class="form-group form-group-lg">

                       <div class =" col-sm-offset-2 col-sm-10">
                           <input  type="submit" value='save' 
                           class = "btn btn-success btn-lg"   />
                           <a href='members.php' class='btn btn-primary btn-lg'>Cancle</a>
                       </div>
                   </div>
                   <!-- end FullName filed -->
          </form>
       </div>
<?php   
   
  require_once'footer.php';
   }
else{

    // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
          header('location: index.php');
            exit();}
            


?>
