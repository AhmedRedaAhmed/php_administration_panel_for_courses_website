<?php 

session_start();
require_once'connect.php';
$page_titele=$_GET['name'];

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id']) &&                  $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id'] >1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5) 
   {
      ?>

      </head>
      <body class="fixed-left">

         <?php

            require_once'header.php';



         if($_GET['do']=='videos'){
                   require_once'navbar.php';

                //Select All videos From DataBeas by curses id
                       $stmt = $con -> prepare( " SELECT * FROM videos WHERE `course_id`=:course_id " );

                       // Excute the Statment
                       $stmt -> execute(array(':course_id' => $_GET['id']));

                       //save data in variable
                        $rows = $stmt -> fetchAll();

                        $count=$stmt->rowCount();

                        echo"<div class='page-content-wrapper '>";
                        echo'<a href="AddVideo.php?id='.$_GET['id'] .'"'.'class="btn btn-primary">Add Videos</a>';
                        echo '<div class="container" style="padding-top: 100px;">';


                              //for display information about users in table 
                              for($i=0;$i<$count;$i+=4) 
                              { echo'<div class="row">';
                               for($j=$i;$j<$count&&$j<($i+4);$j++)
                               {    ?>
                                  <div class="col-sm-3">
                                     <div class="panel">
                                        <div class="panel-body user-card">

                                           <div class="media-main">
                                                <div class="info">
                                                   <h4> <?php echo $rows[$j]['video_name'] ;?></h4>
                                                   <div>
                                                      <img src="<?php echo $rows[$j]['pass_image'];?>" alt="" style="height: 220px;width: 100%;" >
                                                   </div>

                                              </div>
                                           </div>
                                          <div class="clearfix"></div>
                                           <hr>
                                          <div class="view-btn">
                                          <a href="play-video.php?id=<?php echo $rows[$j]['video_id'];?> "class="btn btn-success" style="position: relative;left:24px;">Play</a>
                                           <a href="delete-video.php?id=<?php echo $rows[$j]['video_id']; ?> "class="btn btn-danger" style="position: relative;right:-96px;">Delete</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                           <?php 
                               }
                                 echo'</div>';
                              }?>


                     </div>
                     </div>


      <?php 
         }
       
         elseif($_GET['do']=='Delete')
            {

                  //Select All Courses From DataBeas
                    $stmt = $con -> prepare( " DELETE  FROM `coursess` WHERE `course_id` =:course_id " );

                    // Excute the Statment
                    $stmt -> execute(array(':course_id' => $_GET['id']));

                    //save data in variable
                     $rows = $stmt -> fetchAll();
                  $count=$stmt->rowCount();

            if($count)
                  {
                  echo 'Dion The course is delete';
                  header("Refresh:5; url=pages-cources.php");
                        exit();
                  }
            else 
               {   
                echo 'Error The course was not deleted';
                  header("Refresh:5; url=pages-cources.php");
                        exit();

                  }

            }

         require_once'footer.php';
         
   }else{

    // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
          header('location: index.php');
            exit();}



?>

