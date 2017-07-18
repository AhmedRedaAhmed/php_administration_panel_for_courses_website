<?php 

session_start();
$page_titele='add course';
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

      <?php require_once'navbar.php'; ?>

      <h1 class = "text-center">Add a new course</h1>

      <!-- this form go to save-cours.php  -->

       <div class = 'container ' >
          <form class= "form-horizontal "  action="save-cours.php" method="POST" enctype="multipart/form-data" >
            <div class=" panel panel-primary">
               <div class="panel-body">

                     <div class="form-group">
                        <label class="col-md-4 control-label">Name</label>
                        <div class="col-md-4"> 
                           <input type="text" class="form-control" name="name-of-courses">
                            <input type="hidden"  name="user_id"
                               value="<?php echo $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id']; ?>">
                            <input type="hidden"  name="user_name"
                               value="<?php echo $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_name']; ?>">
                        </div>
                  </div>

                  <div class="form-group ">
                        <label class="col-md-4 control-label">Image</label>
                        <div class="col-md-4"> 
                           <input type="file" class="filestyle " data-buttonname="btn-primary" id="filestyle-4"
                                  name='image' tabindex="-1">
                     </div>
                  </div>

                     <div class="form-group"> 
                        <label class="col-md-4 control-label">Descraption</label>
                        <div class="col-md-4">
                           <textarea class="form-control" name="Descraption" rows="5"></textarea>
                        </div>
                     </div>

                     <div class="form-group"> 
                        <div class="col-md-4">
                           <input class="btn btn-success col-md-4" type='submit' name="new-course" value="Save-course" style="margin: 0px 407px;">
                        </div>
                     </div>

               </div>
             </div>
          </form>
      </div>
   <?php

       echo'<script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>';
         require_once'footer.php';

   }else
      {

    // Redirect To IndexBackEnd Page If not found session
          header('location: index.php');
            exit();
   }


?>




