<?php 

session_start();

      $page_titele='insert member';
require_once'connect.php';
require_once'/assets/func/function.php';

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5&& $_SERVER['REQUEST_METHOD']=='POST')
   {
      require_once'header.php';
                  ?>
      </head>
      <body class="fixed-left">
         <?php
      //require_once'/assets/include/templets/navbar.php'; 


      //Insert  Data page 


                          echo "<h1 class = 'text-center'>Insert Data Member</h1>";
                          echo"<div class='container'>";
                              //get data from form

                          $user  =$_POST['username'];
                          $email =$_POST['Email'];
                          $name  =$_POST['FullName'];
                          $pass=($_POST['Password']);    
                          //password trick & encryption the new password
                          if(!empty($pass)){
                                $pass=sha1($_POST['Password']);    
                          }
                          //validate the form
                              $formError=array();
                              if((checkItem("user_name","users",$user))&&(checkItem("e_mail","users",$email)))
                                  {

                                  $formError[]="Sorry This <strong>Username Is Exist In Databeas </strong>";
                                  $formError[]="Sorry This <strong>Email Is Exist In Databeas </strong>";

                              }elseif((checkItem("e_mail","users",$email)))
                                  {
                                  $formError[]="Sorry This <strong>Email Is Exist In Databeas </strong>";
                              }elseif((checkItem("user_name","users",$user)))
                                  {
                                  $formError[]="Sorry This <strong>Username Is Exist In Databeas </strong>";
                              }
                              else{

                                      if(empty($user)){
                                          $formError[]="username Cant be <strong>Empty</strong>";
                                      }
                                      if(strlen($user)<4){
                                          $formError[]="Username Cant be lass <strong> 4 characters</strong>";
                                      }
                                      if(empty($pass)){
                                          $formError[]="Password Cant be <strong>Empty</strong>";
                                      }
                                      if(strlen($pass)<8){
                                          $formError[]="Password Cant be lass <strong> 8 characters</strong>";
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
                              }


                                  //loop into Error array and echo it.

                              foreach ($formError as $error) {

                                  echo "<div class='alert alert-danger' >" .$error ." </div>";
                              }

                           //check if there's  no error  proceed the Insert operation

                           if(empty($formError)){


                              //Insert data into the database 

                              $stmt=$con->prepare("INSERT INTO users(`user_name`,`password`,`e_mail`,`full_name`,`active`)VALUES (?, ?, ?, ?,1)");
                              //$stmt=bind_pramter(':user_name',$username);
                              $stmt->execute(array($user , $pass , $email , $name));


                              //go to member page000000000
                              echo"<div class='container'";
                              $goToPage ="members.php";
                              $msg      ="A new member has been added";
                             // header('location:members.php');
                              redirectHome($msg,$goToPage);
                              echo "</div>";
                           }else {
                               //go to member page
                              echo"<div class='container'";
                              $goToPage =$_SERVER['HTTP_REFERER'];
                              $msg      ="Try again";
                              redirectHome($msg,$goToPage);
                              echo "</div>";
                           }

         require_once'footer.php';
               
}
else 
{   // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location:index.php');
            exit();
            }




?>