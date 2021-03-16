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
<h1>Contact me :)</h1>
<?php include('includes/form.php'); ?>
</main>


<aside>
    <h2 class="center"> Some inspiration as you fill out the form!</h2>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/hVhlvvwYrQA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</aside>


</div> <!--endwrapper--!>
<?php include('includes/footer.php');