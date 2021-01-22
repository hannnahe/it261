<?php include('config.php');
include('includes/header.php');

//config file has to be first to run first!
?>   



<div id="wrapper" class="<?php echo $background; ?>">
<h1>Welcome to your daily dose of Flowers</h1>



<main>
<h2><?php echo $flower; ?></h2> 
  <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p><?php echo $content; ?></p>  
    
</main>

<aside>




<h3>See the full list below</h3>
<ul>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>      
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
<li><a href="switch.php?today=Sunday">Sunday</a></li>



</ul>
</aside>



<?php include('includes/footer.php'); ?>       
