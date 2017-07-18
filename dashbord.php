<?php 
/**
 * Created by ahmedreda
 * Date: 18/5/2017
 */
//start session
session_start();

   $page_titele='Dashbord';
require_once'connect.php';
require_once'/assets/func/function.php';

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id']) &&                  $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id'] >1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5) 
   {
      
	/*------------- start Dashboard  ----------- */

      require_once'header.php';
                  ?>
      </head>
      <body class="fixed-left">
         <?php
      require_once'navbar.php';      

         ?>
         <div class="page-content-wrapper ">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6 col-lg-3">
                     <div class="panel text-center">
                       <div class="panel-heading">
                          <h4 class="panel-title text-muted font-light">Total Members</h4>
                       </div>
                       <div class="panel-body p-t-10">
                          <h2 class="m-t-0 m-b-15">
                          <i class="mdi ion-person-stalker text-danger m-r-10"></i>
                          <b><a href="members.php"><?php echo countItems('user_id','users');?></a></b></h2>

                       </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                     <div class="panel text-center">
                      <div class="panel-heading">
                          <h4 class="panel-title text-muted font-light">banding Members</h4>
                      </div>
                      <div class="panel-body p-t-10">
                          <h2 class="m-t-0 m-b-15">
                          <i class="mdi ion-person-stalker text-primary m-r-10"></i><b><a href="members.php?page=pending"><?php echo checkItem('active','users','0');?></a></b>
                          </h2>

                      </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                     <div class="panel text-center">
                        <div class="panel-heading">
                          <h4 class="panel-title text-muted font-light">All Courses </h4>
                        </div>
                        <div class="panel-body p-t-10">
                          <h2 class="m-t-0 m-b-15">
                          <i class="mdi ion-ios7-film-outline  text-danger m-r-10"></i>
                             <b><a href="pages-cources.php"><?php echo countItems('course_id','coursess');?></a></b>
                          </h2>

                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6 col-lg-3">
                     <div class="panel text-center">
                        <div class="panel-heading">
                          <h4 class="panel-title text-muted font-light">All videos</h4>
                        </div>
                        <div class="panel-body p-t-10">
                          <h2 class="m-t-0 m-b-15">
                          <i class="mdi ion-ios7-monitor  text-primary m-r-10"></i>
                             <b><a href="pages-cources.php"><?php echo countItems('video_id','videos');?></a></b></h2>
                        </div>
                     </div>
                  </div>
             </div>
            </div>
         </div>


         <?php 

         require_once "footer.php";
}
else 
   {   
   
      // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: index.php');
            exit();
      }?>