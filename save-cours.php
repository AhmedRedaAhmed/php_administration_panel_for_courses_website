<?php 



function saveImage($nameOfCourses,$imagePath,$Descraption,$userId,$userName)
      { global $con;
         require_once'connect.php';
         $stmt=$con->prepare("INSERT INTO `coursess` (`course_id`, `courses_name`, `image_of_courses`, `description`, `user_id`, `user_name`) VALUES (NULL, '{$nameOfCourses}', '{$imagePath}', '{$Descraption}','{$userId}','{$userName}')");
          $stmt->execute();
          $count=$stmt->rowCount();
                //if found ID showing form data
                         if($count>0) {
                            echo "<div class='alert alert-danger' > Doin . </div>";
                            echo "<div class='alert alert-danger' > you will be redirectory to page courses  . </div>";
                             header('location: pages-cources.php');
                            
                                     }
      }

if(isset($_POST['new-course'])&&$_POST['new-course']=='Save-course')
      
      {
         
         
      $page_titele='add course';
require_once'connect.php';
require_once'/assets/func/function.php';
require_once'header.php';
               ?>
</head>
<body class="fixed-left">
   <?php


         
         
         $dir='assets/images/courses/';
         $nameOfCourses=$_POST['name-of-courses'];
         $imagePath=$dir.basename($_FILES['image']['name']);
         $Descraption=$_POST['Descraption'];
         $userId=$_POST['user_id'];
         $userName=$_POST['user_name'];
         if(move_uploaded_file($_FILES['image']['tmp_name'],$imagePath))
            {
               echo "<div class='alert alert-danger' > uploaded successfully. </div>";
               
               saveImage($nameOfCourses,$imagePath,$Descraption,$userId,$userName);
            }
         
      require_once'footer.php';
      }

else 
{   // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: index.php');
            exit();
            }



?>