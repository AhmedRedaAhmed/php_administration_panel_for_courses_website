
<?php 
session_start();
if(isset($_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_user_id'])&&
   $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']>1&&
         $_SESSION['fhasdgklhwertierq6853ytbgdv8c162503rwdfygsdcfahdlgdg123fh14fd31g_group_id']<5)
   {
      
$page_titele='Massige';

require_once'header.php';
      ?>
</head>
<body class="fixed-left">
   <?php
require_once'navbar.php';

?>
    <div class="table-responsive">
                        <table class="table table-hover m-b-0">
                           <thead><tr><th>Name</th><th>Position</th><th>Office</th><th>Age</th><th>Start date</th><th>Salary</th></tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Tiger Nixon</td>
                                 <td>System Architect</td>
                                 <td>Edinburgh</td>
                                 <td>61</td>
                                 <td>2011/04/25</td>
                                 <td>$320,800</td>
                              </tr>
                              <tr>
                                 <td>Garrett Winters</td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>63</td>
                                 <td>2011/07/25</td>
                                 <td>$170,750</td>
                              </tr>
                              <tr>
                                 <td>Ashton Cox</td>
                                 <td>Junior Technical Author</td>
                                 <td>San Francisco</td>
                                 <td>66</td>
                                 <td>2009/01/12</td>
                                 <td>$86,000</td>
                              </tr>
                              <tr>
                                 <td>Cedric Kelly</td>
                                 <td>Senior Javascript Developer</td>
                                 <td>Edinburgh</td>
                                 <td>22</td>
                                 <td>2012/03/29</td>
                                 <td>$433,060</td>
                              </tr>
                              <tr>
                                 <td>Airi Satou</td>
                                 <td>Accountant</td>
                                 <td>Tokyo</td>
                                 <td>33</td>
                                 <td>2008/11/28</td>
                                 <td>$162,700</td>
                              </tr>
                              <tr>
                                 <td>Brielle Williamson</td>
                                 <td>Integration Specialist</td>
                                 <td>New York</td>
                                 <td>61</td>
                                 <td>2012/12/02</td>
                                 <td>$372,000</td>
                              </tr>
                              <tr>
                                 <td>Herrod Chandler</td>
                                 <td>Sales Assistant</td>
                                 <td>San Francisco</td>     
                                 <td>59</td>
                                 <td>2012/08/06</td>
                                 <td>$137,500</td>
                              </tr>
                          </tbody>
                        </table>
                     </div>
<?php

}
else 
{   // Redirect To IndexBackEnd Page If anyone tried to enter without POST Requst Method Or Directly
           header('location: index.php');
            exit();
            }
require_once'footer.php';

?>