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
<h1 class="center">Thanks!</h1>
<h4>We'll be sending you the content you requested shortly. 
    In the meantime, check out this video:</h4>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/9VTm7KQpzvk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</main>


<aside>
<h5 class="center">Did you know that Seattle has a famous piece of modern architecture? The Central Seattle library was designed by Rem Koolhaus, and opened in 2004. If you haven't seen it in person, than what are you waiting for? </h5>
<img src="images/feedback.jpg" alt="SeattlePublicLibrary">
</aside>


</div> <!--endwrapper--!>
<?php include('includes/footer.php');