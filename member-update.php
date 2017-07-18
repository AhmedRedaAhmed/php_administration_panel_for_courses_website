<?php
session_start();

      $page_titele='update member';
require_once'connect.php';
require_once'/assets/func/function.php';

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5&&$_SERVER['REQUEST_METHOD']=='POST')
   {
      require_once'header.php';
                  ?>
      </head>
      <body class="fixed-left">
         <?php





                   //update page 



                          echo "<h1 class = 'text-center'>Update Member</h1>";
                          echo"<div class='container'>";
                              //get data from form
                          $id    =$_POST['userID'];
                          $user  =$_POST['username'];
                          $email =$_POST['Email'];
                          $name  =$_POST['FullName'];

                          //password trick

                          $pass="";
                          if(empty($_POST['newPassword'])){

                              $pass=$_POST['oldpassword'];

                          }
                          else{//encryption the new password
                              $pass=sha1($_POST['newPassword']);    

                          }

                          //validate the form
                              $formError=array();

                                      if(empty($user)){
                                          $formError[]="Username Cant be <strong>Empty</strong>";
                                      }
                                      if(strlen($user)<4){
                                          $formError[]="Username Cant be lass <strong> 4 characters</strong>";
                                      }
                                      if(strlen($user)>20){
                                          $formError[]="Username Cant be More than <strong>20 characters</strong>";
                                      } 
                                      if(empty($email)){
                                          $formError[]="Email Cant be <strong>Empty</strong> ";
                                      }  
                                      if(empty($name)){
                                          $formError[]="FullName Cant be <strong>Empty</strong>";
                                      }


                                  //loop into Error array and echo it.

                              foreach ($formError as $error) {

                                  echo "<div class='alert alert-danger' >" .$error ." </div>";
                              }

                           //check if there's  no error  proceed the update operation

                           if(empty($formError)){


                                  //Update the database With this info
                              $stmt=$con->prepare("UPDATE users SET user_name=? ,password=?, e_mail=?,full_name=? WHERE user_id=?");
                              $stmt->execute(array($user,$pass,$email,$name,$id));

                              //Go To Members Page
                              $goToPage =$_SERVER['HTTP_REFERER'];
                              $msg      ="Done Updated";
                              redirectHome($msg,$goToPage);
                           }else {
                               //Go To the previous page
                              echo"<div class='container'";
                              $goToPage =$_SERVER['HTTP_REFERER'];
                              $msg      ="Try again";
                              redirectHome($msg,$goToPage);
                              echo "</div>";
                           } 
                         echo " </div>";
      
      require_once'footer.php';
             }
           

else 
{   // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: index.php');
            exit();
            }



?>