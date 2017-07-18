<?php 

session_start();

$page_titele='Members';
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

         /* i use $do to select one page (Manage-Active-Add-Insert-Edit-Update-delete)*/
          if(isset($_GET['do']))
               {
                  $do=$_GET['do'];
               }
              else 
               {$do='Manage';}

          if ($do=='Manage')
            {  //------------manage page 

               $Regstatus='AND active=1';
            if(isset($_GET['page']) && $_GET['page']=='pending'){  $Regstatus ='AND active=0';}

              //Select All User From DataBeas Without Admin 
              $stmt = $con -> prepare( " SELECT * FROM users WHERE group_id !=4 $Regstatus " );

              // Excute the Statment
              $stmt -> execute();

              //save data in variable
               $rows = $stmt -> fetchAll();
            ?>
            <h1 class = "text-center"> Manage Members</h1> 
              <div class = 'container'>
               <div class="table-responsive">
                  <table class="table table-striped"  >
                     <thead><tr>
                        <th>#ID</th>
                        <th>Usre Name</th>
                        <th>Email</th>
                        <th>Full Name</th>
                        <?php 
                            if ($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>2)echo '<th>Grour</th>';
                        if($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>2)echo '<th>Control</th>';
                        ?>
                     </tr></thead><tbody>
                  <?php  
                     //for display information about users in table 
                     foreach ($rows as $row) {
                             echo  "<tr>";
                                     echo "<td>"  . $row['user_id']   . "</td>";
                                     echo "<td>"  . $row['user_name'] . "</td>";
                                     echo "<td>"  . $row['e_mail']    . "</td>";
                                     echo "<td>"  . $row['full_name'] . "</td>";
                                    if($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>2)
                                       {
                                          echo "<td>". $row['group_id'] . "</td>";
                                        }
                             if($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>2)
                                       {

                                          echo "<td> <a href='member-edit.php?do=Edit&userid=". $row['user_id'] . " 'class='btn btn-success'><i class='fa fa-edit' ></i> Edit</a>";
                                          if($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']==4)
                                       {
                                          echo "<a href='member-delete.php?do=delete&userid=". $row['user_id'] . " 'class='btn btn-danger confirm'><i class='fa fa-close' ></i>Delete</a>";
                                       }

                                    if($row['active']==0)
                                       {
                                       echo "<a href='pages-members.php?do=Active&userid=". $row['user_id'] . " 'class='btn btn-info '>Active</a>";
                                       } 
                                    echo  "</td>";  } 
                           echo  "</tr>";          

                              }

                          ?>

                  </tbody></table>
              </div>
              <?php 
                if ($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>2)
                              {
                                 echo "<a href='member-add.php'  class='btn btn-success '><i class='fa fa-plus'></i> Add a new member</a> "; 
                              } 
              echo '</div>';

                  }
require_once'footer.php';
   }
else 
{   // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: index.php');
            exit();
            }



?>