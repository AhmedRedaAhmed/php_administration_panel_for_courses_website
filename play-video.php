<?php
session_start();
require_once'connect.php';

$page_titele='play-video';
require_once'header.php';

   require_once'navbar.php'; 
   

?>
</head>
<body class="fixed-left">
   
   <?php 
   
    $stmt = $con -> prepare( " SELECT * FROM videos WHERE `video_id`='{$_GET['id']}' " );
   
      // Excute the Statment
                 $stmt -> execute();

                 //save data in variable
                  $rows = $stmt ->fetch();
   ?>


<div style="text-align:center"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="makeBig()">Big</button>
  <button onclick="makeSmall()">Small</button>
  <button onclick="makeNormal()">Normal</button>
  <br><br>
  <video id="video1" width="420">
     <source src=<?php echo "'" .$rows['video_pass'] . "'";?> type="video/mp4">
     
     Your browser does not support HTML5 video.
   </video>

   </div> 

<script> 
var myVideo = document.getElementById("video1"); 

function playPause() { 
    if (myVideo.paused) 
        myVideo.play(); 
    else 
        myVideo.pause(); 
} 

function makeBig() { 
    myVideo.width = 560; 
} 

function makeSmall() { 
    myVideo.width = 320; 
} 

function makeNormal() { 
    myVideo.width = 420; 
} 
</script> 


<?php 
   require_once "footer.php";
   ?>
