<?php
ob_start();
include('config.php');
include('includes/header.php');
?>   


<div id="wrapper">
<h1>Hannah's Emailable Form</h1>


 <main>  
<h2>Looking forward to hearing from you about all of your favorites :)</h2> 
<?php include('includes/form.php'); ?>
</main> 
<aside>
<?php 

$housePhotos[0] = 'beach';
$housePhotos[1] = 'mountain';
$housePhotos[2] = 'house';
$housePhotos[3] = 'paris';
$housePhotos[4] = 'forest';

$i = rand(0,4);
$selectedImage = 'images/'.$housePhotos[$i].'.jpg';
echo '<img class="house" src="'.$selectedImage.'" alt="'.$housePhotos[$i].'">';
    //or call out a randPhoto function here
?> 
</aside>


</div>
<?php include('includes/footer.php'); ?>       
