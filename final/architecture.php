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
<h1 class="center">Architectural Movements</h1>
<img src="images/curve.jpg" alt="Curved building modern" class="switch">
<p>
The history of architecture is ultimately the history of human interaction. It is not simply about complex drawings, planning regulations or phallic-shaped skyscrapers. Rather, architecture is about provoking visceral emotions. It connects us to each other, to society and to the world around us. Of course, engineering and science play a huge part in this too, but the true power of architecture lies in the connections we feel to the places we physically occupy.

Aside from our basic human requirement for shelter (one of Maslow’s infamous “Five Needs”), our physical surroundings play a huge part in influencing our mental and physical health. Since its earliest beginnings in the Prehistoric period, no piece of architecture has been designed in abstraction. Each structure is connected to the politics, art, poetry, and social sciences of the time — and, most fascinatingly, to human nature. Architecture creates emotional resonance through its stylistic hallmarks, and its use of forms, structures, light conditions and materials have all evolved over time.

For the most part, architecture can be classified within an assortment of “movements,” each of which has emerged like a pendulum swing from one period to another. Hundreds have been identified — with formidable names like Bristol Byzantine or Egyptian Revival — but for the purpose of basic understanding there are widely considered to be eight key phases worth knowing about since ancient times.

If you’ve ever found yourself caught in conversation about the difference between Bauhaus and Brutalism, and been without a single word to offer on the matter yourself, consider this your one-stop homework lesson in all matters brick, concrete, glass, stone and steel.     
</p>
</main>


<aside>
<?php 
$sql = 'SELECT * FROM architecture';
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or 
die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) { 
    
while($row=mysqli_fetch_assoc($result)) {
   //this array is going to display the contents of your row 

echo '<ul>';    
echo '<li><h4>Info about <a href="architecture-view.php?id='.$row['styleId'].' ">'.$row['style'].'</a> styles</h4><li>';    
 
echo '<li>This style gained prominence during the '.$row['period'].'.<li>';
echo '<li>Many characteristic works are located in '.$row['location'].'.<li>';
echo '</ul>';
}//end while loop   
    
} else { 
echo 'Hannah, we have a problem!';
}  //close else
;?>
</aside>


</div> 
<?php
mysqli_free_result($result);
mysqli_close($iConn);
 include('includes/footer.php');