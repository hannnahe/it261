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




<h3>Check out all the flowers here :)</h3>
<ul>
<li><a style="color:<?php if($today == 'Monday') {echo 'red'; } else {echo '#300511';} ; ?>"  href="daily.php?today=Monday">Monday</a></li>
<li><a style="color:<?php if($today == 'Tuesday') {echo 'purple'; } else {echo '#300511';} ; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a style="color:<?php if($today == 'Wednesday') {echo 'green'; } else {echo '#300511';} ; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>      
<li><a style="color:<?php if($today == 'Thursday') {echo 'brown'; } else {echo '#300511';} ; ?>" href="daily.php?today=Thursday">Thursday</a></li>
<li><a style="color:<?php if($today == 'Friday') {echo 'orange'; } else {echo '#300511';} ; ?>"href="daily.php?today=Friday">Friday</a></li>
<li><a style="color:<?php if($today == 'Saturday') {echo 'maroon'; } else {echo '#300511';} ; ?>"href="daily.php?today=Saturday">Saturday</a></li>
<li><a style="color:<?php if($today == 'Sunday') {echo 'navy'; } else {echo '#300511';} ; ?>"href="daily.php?today=Sunday">Sunday</a></li>



</ul>
    
 <img class="room" src="images/flowerroom.jpg" alt="flower room">  
</aside>



<?php include('includes/footer.php'); ?>       
