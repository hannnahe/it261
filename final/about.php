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
<h1 class="center">About the Databases used for this project:</h1>
<h3 class="center aboutpg">Architecture Table</h3>
<img class="switch aboutpg" src="images/db1.jpg" alt="ArchTable">

</main>


<aside>
    <h3 class="center aboutpg">Users Table</h3>
    <img class="bottom" src="images/db2.jpg" alt="UserTable">
</aside>


</div> <!--endwrapper--!>
<?php include('includes/footer.php');