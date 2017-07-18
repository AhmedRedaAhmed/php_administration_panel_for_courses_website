<?php 

session_start();
$page_titele='My Cources';
require_once'header.php';
      ?>

</head>
<body class="fixed-left">
   <?php
require_once'navbar.php';
require_once'connect.php';

 //Select All Courses From DataBeas
        $stmt = $con -> prepare( " SELECT * FROM coursess WHERE`user_name`='{$_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_name']}'" );

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
               { echo'<div class="row">';
                for($j=$i;$j<$count&&$j<($i+3);$j++)
                {
                   echo'<div class="col-sm-4">';
                   echo'<div class="panel">';
                   echo'<div class="panel-body user-card">';
                   echo'<div class="media-main"> ';
                   echo'<div class="info">';
                   echo'<div ><img src="'.$rows[$j]['image_of_courses'] .'" alt="" style="height: 241px;width: 100%;" ></div>';
                   echo'<h4>'.$rows[$j]['courses_name'] .'</h4>';
                   echo'</div>';
                   echo'</div>';
                   echo'<div class="clearfix"></div>';
                   echo"<p class='text-muted info-text'>".$rows[$j]['description'].' Uploaded BY '.$rows[$j]['user_name'] . "</p>";
                  echo'<hr>';
                  echo'<div class="view-btn">';echo'<a href="course-details.php?id='.$rows[$j]['course_id'].'&name='.$rows[$j]['courses_name'].'&do=videos'.'"class="btn btn-success"style="position: relative;left: 40px;"> videos </a>';
                   
                              
                   
                   echo'<a href="course-details.php?id='.$rows[$j]['course_id'].'&name='.$rows[$j]['courses_name'].'&do=Delete'.'"class="btn btn-danger" style="position: absolute;right:78px;"> Delete </a>';
                   
                  echo'</div>';
                  echo'</div>';
                  echo'</div>';
                  echo'</div>';
                }
                  echo'</div>';
               }?>
                  
        
         </div>
      </div>
 

<?php 

require_once'footer.php';

?>