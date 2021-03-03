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
<h3>randPhotos function on Github </h3>
    <ul>
    <li><a href="https://github.com/hannnahe/it261/blob/main/website/config.php">config.php link</a></li>
        <li><a href="https://github.com/hannnahe/it261/blob/main/website/contact.php">contact.php link</a></li>
    </ul>
</aside>

<?php include('includes/footer.php'); ?>       