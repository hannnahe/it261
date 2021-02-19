<?php 
ob_start();
include('config.php');
include('includes/header.php');
?>   



<div id="wrapper">
<h1>Hannah's IT261 Homepage</h1>

<main>
 <div id="hero">
<?php $photos = ['img1','img2','img3','img4','img5'];


$photos[0] = 'img1';
$photos[1] = 'img2';
$photos[2] = 'img3';
$photos[3] = 'img4';
$photos[4] = 'img5';

$i = rand(0,4);
$selectedImage = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImage.'" alt="'.$photos[$i].'">';
?>
     
</div><!--endhero-->    
</main>

<aside>
<h3>Aside:) </h3>
</aside>

<?php include('includes/footer.php'); ?>       
