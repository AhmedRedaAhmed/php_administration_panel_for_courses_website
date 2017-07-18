<?php 
 
session_start();

      $page_titele='delete member';
require_once'connect.php';
require_once'/assets/func/function.php';

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5&&isset($_GET['do'])&&$_GET['do']=='delete'&& is_numeric($_GET['userid']))
   {
   require_once'header.php';
               ?>
   </head>
   <body class="fixed-left">
      <?php

   //delet page

                         //check if get request user-id is Numaric & get the intval fo it



                               $userid = intval($_GET['userid']);


                  //select all data depand on this ID  for Check find this ID

                   $stmt =$con->prepare("SELECT * FROM users WHERE user_id=:user_id LIMIT 1");

                   //execute quary
                   $stmt-> execute (array(':user_id'=>$userid));

                   //check  Quary is done  
                   $count=$stmt->rowCount();
                   // If Quary is Done 
                            if($count>0) {

                                    //select all data depand on this ID       
                                   $stmt =$con->prepare("DELETE FROM `users` WHERE `user_id` =:user_id ");

                                   //execute quary
                                   $stmt-> execute (array(':user_id'=>$userid));
                                   $goToPage =$_SERVER['HTTP_REFERER'];
                                       //go to members page
                                   header("refresh:0;url=$goToPage");
                                     exit(); 

                               }else {

                                       echo "<h1 class='text-center'>This id not found</h1>";
                               }


     require_once'footer.php';      
   }
   else 
      {   // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: index.php');
            exit();
            }


?> 



