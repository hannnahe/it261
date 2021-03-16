<?php
//about.php

session_start();
include('config.php');

if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}
 if(isset($_GET['logout'])){
     session_destroy();
     unset($_SESSION['UserName']);
     header('Location:login.php'); 
 }

include('includes/header.php');
//wrapper div starts right above in header.php?>
 <main>
<?php if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);?>    
</h3>
</div>
<?php endif;

if(isset($_SESSION['UserName'])) :?>
<div class="welcome-logout">
<h3>Hi  <?php echo $_SESSION['UserName'] ; ?></h3> 
<a href="index.php?logout='1'">Log out</a>    
</div>
<?php endif; ?>
<h1 class="center">Modern Architects and their Works</h1>
<h2 class="center name">~~<?php echo $architect; ?>~~</h2> 
  <img class="switch" src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p class="desc"><?php echo $content; ?></p> 
<img class="switch" src="<?php echo $pic2; ?>" alt="<?php echo $alt2;?>" class="switch">

</main>


<aside class="daily">
    <h3>Want to explore them all?</h3>
    <ul>
<li><a style="color:<?php if($today == 'Monday') {echo 'red'; } else {echo 'navy';} ; ?>"  href="daily.php?today=Monday">Monday</a></li>
<li><a style="color:<?php if($today == 'Tuesday') {echo 'purple'; } else {echo 'navy';} ; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a style="color:<?php if($today == 'Wednesday') {echo 'green'; } else {echo 'navy';} ; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>      
<li><a style="color:<?php if($today == 'Thursday') {echo 'brown'; } else {echo 'navy';} ; ?>" href="daily.php?today=Thursday">Thursday</a></li>
<li><a style="color:<?php if($today == 'Friday') {echo 'orange'; } else {echo 'navy';} ; ?>"href="daily.php?today=Friday">Friday</a></li>
<li><a style="color:<?php if($today == 'Saturday') {echo 'maroon'; } else {echo 'navy';} ; ?>"href="daily.php?today=Saturday">Saturday</a></li>
<li><a style="color:<?php if($today == 'Sunday') {echo 'navy'; } else {echo 'navy';} ; ?>"href="daily.php?today=Sunday">Sunday</a></li>



</ul>
</aside>


</div> <!--endwrapper--!>
<?php include('includes/footer.php');