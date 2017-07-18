<?php 

   session_start();
   $page_titele='Add Video';
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

       <h1 class = "text-center">Add a New Video</h1>
      
         <!-- this form go to salf and ?do=Insert  -->
         
       <div class = 'container ' >
          <form class= "form-horizontal "  action="save-video.php" method="POST" enctype="multipart/form-data" >
            <div class=" panel panel-primary">
               <div class="panel-body">

                  <div class="form-group ">
                     
                     <label class="col-md-4 control-label">Name</label>
                     <div class="col-sm-10 col-md-6"> 
                         <input type="text"  name="name" class="form-control" style="width:387px;">
                         <input type="hidden"  name="course_id" value="<?php echo $_GET['id']; ?>">
                     </div>
                  </div>

                  <div class="form-group ">
                        
                     <label class="col-md-4 control-label">Video</label>
                     <div class="col-md-4"> 
                           <input type="file" class="filestyle " data-buttonname="btn-primary" 
                                  name='Video' >
                     </div>
                  </div>
                  
                  <div class="form-group ">
                        
                     <label class="col-md-4 control-label">Image</label>
                     <div class="col-md-4"> 
                           <input type="file" class="filestyle " data-buttonname="btn-primary" 
                                  name='image' >
                     </div>
                  </div>

                  <div class="form-group"> 
                        
                     <div class="col-md-4">
                           <input class="btn btn-success col-md-4" type='submit' name="new-video" value="Save-video" style="margin: 0px 407px;">
                        </div>
                  </div>
                  
               </div>
             </div>
          </form>
      </div>
   <?php
   
      echo '<script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>';
      require_once'footer.php';


      }else
         {

       // Redirect To Index Page If not found session
            
             header('location: index.php');
               exit();
         }
?>


