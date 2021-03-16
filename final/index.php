<?php
//index.php

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
 
//notification message
if(isset($_SESSION['success'])) :?>
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
<h1 class="center">Architectural Movements and Modern Architects</h1>
<div><img class="home" src="images/home.jpg" alt="Farnsworth house by Mies van der Rohe"></div>
<div class="parent">
<div class="column center"><h6>Left content</h6>
 <p>Link and img</p>   
</div>
<div class="column center"><h6>Center content</h6>
<p>Link and img</p>    
</div>
<div class="column center"><h6>Right content</h6>
 <p>Link and img</p>       
</div>
</div>






</div> <!--endwrapper--!>
<?php include('includes/footer.php');