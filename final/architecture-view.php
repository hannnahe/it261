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
if(isset($_GET['id'])){
  $id = (int)$_GET['id']; 
} else {
    header('Location:architecture.php');
}

$sql = 'SELECT * FROM architecture WHERE styleId = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or 
die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {

while($row=mysqli_fetch_assoc($result)) {
$style = stripslashes($row['style']);      
$period = stripslashes($row['period']);
$location = stripslashes($row['location']);
$architects = stripslashes($row['architects']);
$description = stripslashes($row['description']);
$works = stripslashes($row['works']);
$feedback = '';
} 

} else {
$feedback = 'Nada aqui.';   
}
include('includes/header.php');
?>



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
<h1>The <?php echo $style;?> Style!</h1>
<?php 
if($feedback == ''){
  echo '<ul>';
    echo '<li>This style was introduced and gained traction during the '.$period.'.</li>';
    echo '<li> '.$style.' was first and foremost built in '.$location.'.</li>';
    echo '<li>'.$architects.'</li>';
    echo '</ul>'; 
    echo '<p>'.$description.'</p>';
    echo 'Last but not least, some famous works for you to look into: '.$works.'';
    echo'<div><a class="btn" href="architecture.php">Go back!</a></div>';
} else {
    echo $feedback;
}
?>
</main>


<aside>
    <h3>images to be here</h3>
</aside>


</div> <!--endwrapper--!>
<?php include('includes/footer.php');