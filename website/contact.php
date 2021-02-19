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
<?php echo randPhotos($housePhotos);?> 
</aside>


</div>
<?php include('includes/footer.php'); ?>       
