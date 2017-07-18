<?php 

$page_titele='Cources';
session_start();
require_once'connect.php';

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5)
   {
      
      require_once'header.php';

      ?>
      </head>
      <body class="fixed-left">
         <?php
      require_once'navbar.php';

       //Select All Courses From DataBeas
              $stmt = $con -> prepare( " SELECT * FROM coursess " );

              // Excute the Statment
              $stmt -> execute();

              //save data in variable
               $rows = $stmt -> fetchAll();
               $count=$stmt->rowCount();

      ?>


         <div class="page-content-wrapper ">
               <div class="container">
      
                  <?php  
                     //for display information about users in table 
                     for($i=0;$i<$count;$i+=3) 
                        {
                           echo'<div class="row">';
                           for($j=$i;$j<$count&&$j<($i+3);$j++)
                             {?>
                               <div class="col-sm-4">
                                  <div class="panel">
                                     <div class="panel-body user-card">
                                        <div class="media-main">
                                           <div class="info">
                                              <div >
                                                 <img src="<?php echo $rows[$j]['image_of_courses'];?>" alt="" style="height: 241px;width: 100%;" >
                                              </div>
                                             <h4><?php echo $rows[$j]['courses_name'];?> </h4>
                                           </div>
                                          </div>
                                       <div class="clearfix"></div>
                                       <p class='text-muted info-text'><?php echo $rows[$j]['description']. 'Uploaded BY '.$rows[$j]['user_name'] ;?>
                                        </p> 
                                        <hr>
                                 <div class="view-btn">
                                    <a href="course-details.php?id=<?php echo $rows[$j]['course_id'].'&name='.$rows[$j]['courses_name'].'&do=videos' ;?>"class="btn btn-success"style="position: relative;left: 40px;"> videos </a>7
                                    
                                    <a href="course-details.php?id=<?php echo $rows[$j]['course_id'].'&name='.$rows[$j]['courses_name'].'&do=Delete';?>"class="btn btn-danger" style="position: absolute;right:78px;"> Delete </a>
                                        </div>
                                     </div>
                                  </div>
                              </div>
                     <?php
                           }
                           echo'</div>';
                     }
                           ?>
               </div>
            </div>

         <?php 
   require_once'footer.php';

}
else {   // Redirect To Index Page If not found session
           header('location: index.php');
            exit();
            }

?>