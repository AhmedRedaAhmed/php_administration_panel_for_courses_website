<?php 



   
   require_once'connect.php';

 //Select All Courses From DataBeas
        $stmt = $con -> prepare( " DELETE  FROM `videos` WHERE `videos`.`video_id` ='{$_GET['id']}'" );

        // Excute the Statment
        $stmt -> execute();

        //save data in variable
         $rows = $stmt -> fetchAll();
      $count=$stmt->rowCount();

if($count)
      {
      echo 'Dion The video is delete';
      header("Refresh:5; url=pages-cources.php");
            exit();
      }
else 
   {   
    echo 'Error The video was not deleted';
      header("Refresh:5; url=pages-cources.php");
            exit();
          
      }




?>