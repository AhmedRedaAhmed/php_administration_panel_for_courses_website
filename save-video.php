<?php 

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function saveVideo($nameVideo,$passVideo,$passImage,$courseId)
      { 
         global $con;
         
         $stmt=$con->prepare("INSERT INTO `videos` (`video_id`, `video_name`, `video_pass`, `pass_image`, `course_id`) VALUES (NULL, '{$nameVideo}', '{$passVideo}', '{$passImage}', '{$courseId}')");
          $stmt->execute();
          $count=$stmt->rowCount();
                //if found ID showing form data
                         if($count>0) {
                            echo "<div class='alert alert-danger' > Doin . </div>";
                            echo "<div class='alert alert-danger' > you will be redirectory to page courses  . </div>";
                             header('location: pages-cources.php');
                            
                                     }
      }

if(isset($_POST['new-video'])&&$_POST['new-video']=='Save-video')
      
      {
         

               $page_titele='Add Video';
         require_once'connect.php';
         require_once'/assets/func/function.php';
         require_once'header.php';
                        ?>
         </head>
         <body class="fixed-left">
            <?php

                  $dir='assets/images/courses/video/';

                  $nameVideo=$_POST['name'];

                  $courseId=$_POST['course_id'];
         
                  $pathVideo = $_FILES['Video']['name'];
                  $extVideo =pathinfo($pathVideo, PATHINFO_EXTENSION);
                  
         
                  $pathimage = $_FILES['image']['name'];
                  $extimage = pathinfo($pathimage, PATHINFO_EXTENSION);
                  
         
                  $passVideo=$dir.basename(generateRandomString(10)).basename(date("Y-m-d h-i-sa")).basename('.').basename($extVideo);
                  $passImage=$dir.basename(generateRandomString(8)).basename(date("Y-m-d h-i-sa")).basename('.').basename($extimage);
                 
                  
                  echo $passVideo;
                  echo $passImage ;

                  if(move_uploaded_file($_FILES['Video']['tmp_name'],$passVideo)&&move_uploaded_file($_FILES['image']['tmp_name'],$passImage))
                     {
                        echo "<div class='alert alert-danger' > uploaded successfully. </div>";

                        saveVideo($nameVideo,$passVideo,$passImage,$courseId);
                     }

                  require_once'footer.php';
         }

else 
{   // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: index.php');
            exit();
            }



?>