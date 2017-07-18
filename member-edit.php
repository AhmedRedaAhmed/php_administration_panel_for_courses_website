<?php 

session_start();
      $page_titele='Edit Data';
require_once'connect.php';
require_once'/assets/func/function.php';

if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>2&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5&&isset($_GET['do'])&&$_GET['do']=='Edit'&& is_numeric($_GET['userid']))
   {


      require_once'header.php';
                  ?>
      </head>
      <body class="fixed-left">
         <?php
      

                    //Edit page

                      //check if get request user-id is Numaric & get the intval fo it
                  
                     $userid = intval($_GET['userid']);
                     
                     //select all data depand on this ID       
                      $stmt =$con->prepare("SELECT * FROM users WHERE user_id=? LIMIT 1");
                      //execute quary
                      $stmt-> execute (array($userid));
                      //fetch data from database
                      $row=$stmt->fetch();

                      $count=$stmt->rowCount();
                      //if found ID showing form data
                               if($count>0) 
                               { ?>

                                  <h1 class = "text-center">Edit Member</h1>
                                  <div class = 'containerE'>
                                     <!-- this form go to salf and ?do=Update  -->
                                      <form class= "form-horizontal"  action="member-update.php" method="POST" >
                                              <input type="hidden" name="userID" value="<?php echo $userid ; ?>" />
                                          <!-- start username filed -->
                                              <div class="form-group  form-group-lg">
                                                  <label class = "col-sm-2 control-label">Username</label>
                                                  <div class ="col-sm-10 col-md-6">
                                                      <input  type="text" name="username" class="form-control"     autocomplete="off" required="required" value=<?php echo $row['user_name'] ?>  / > 
                                                  </div>
                                              </div>
                                              <!-- end username filed -->

                                          <!-- start password filed -->
                                          <input type='hidden' name='oldpassword' value='<?php echo $row['Password']; ?>'/>
                                              <div class="form-group form-group-lg">
                                                  <label class = "col-sm-2 control-label">Password</label>
                                                  <div class ="col-sm-10 col-md-6">
                                           <input  type="password" name="newPassword" class="form-control"  autocomplete="new-password" placeholder="if you need change your Password enter the new Password" /> 
                                                  </div>
                                              </div>
                                              <!-- end password filed -->

                                          <!-- start Email filed -->
                                              <div class="form-group form-group-lg">
                                                  <label class = "col-sm-2 control-label">E-mail</label>
                                                  <div class ="col-sm-10 col-md-6">
                                                      <input  type="Email" name="Email" class="form-control" required="required" value=<?php echo $row['e_mail']; ?> / > 
                                                  </div>
                                              </div>
                                              <!-- end Email filed -->

                                          <!-- start FullName filed -->
                                              <div class="form-group form-group-lg">
                                                  <label class = "col-sm-2 control-label">FullName</label>
                                                  <div class ="col-sm-10 col-md-6">
                                                      <input  type="text" name="FullName" class="form-control" required="required" value=<?php echo $row['full_name']; ?> / > 
                                                  </div>
                                              </div>
                                              <!-- end FullName filed -->
                                               <!-- start submet filed -->
                                              <div  class="form-group form-group-lg">

                                                  <div class =" col-sm-offset-2 col-sm-10">
                                                      <input  type="submit" value='save' 
                                                      class = "btn btn-success btn-lg"  />
                                                  <a href='members.php' class='btn btn-primary btn-lg'>Cancle</a>
                                                  </div>

                                              </div>
                                              <!-- end FullName filed -->
                                     </form>
                                  </div>

                  <?php 
                            }
                            //if not found ID show this message

                            else {
                                  echo "<div class = 'container'>";
                               $msg='not found ID';
                              redirectHome($msg);
                                //header('location:index.php');
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
