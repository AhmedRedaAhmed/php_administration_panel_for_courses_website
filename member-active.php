<?php 
session_start();
$page_titele='Active';
require_once'connect.php';
require_once'/assets/func/function.php';

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

            if($do=='Active')
            {  //Active page

                //check if get request user-id is Numaric & get the intval fo it

                if(isset($_GET['userid'])&& is_numeric($_GET['userid']))
                        {

                            $userid = intval($_GET['userid']);
                         }

                   //select all data depand on this ID       
                $stmt =$con->prepare("SELECT * FROM users WHERE user_id=:user_id LIMIT 1");
                //execute quary
                $stmt-> execute (array(':user_id' => $userid));
                //fetch data from database
                $row=$stmt->fetch();

                $count=$stmt->rowCount();
                //if found ID showing form database
                         if($count>0) {
                                //Insert data into Regstatus 

                        $stmt=$con->prepare("UPDATE `users` SET `active` = '1' WHERE user_id=:user_id LIMIT 1;");

                        $stmt-> execute (array(':user_id' => $userid));


                        echo "<div class = 'container'>";
                        $goToPage='pages-members.php';
                         $msg='done Active';
                         redirectHome($msg,$goToPage);
                         echo "</div>";

                      }
                      //if not found ID show this message

                      else {
                            echo "<div class = 'container'>";
                         $msg='not found ID';
                         redirectHome($msg);
                         echo "</div>";


                            }
                   }

     require_once'footer.php';
   }
else 
{   // Redirect To IndexBackEnd 
           header('location: index.php');
            exit();
            }


?> 