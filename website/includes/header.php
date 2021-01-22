
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- title will change on all of the pages; make title dynamic-->
<title><?php echo $title;     ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>


<body class="<?php  echo $body; ?>">
<header>
<div class="inner-header">
<a href="../index.php"><img id="logo" src="../images/logo.png" alt="logo"></a>
<nav>
<!--
<ul>  
<li><a href="">Home</a></li>
<li><a href="">About</a></li>  
<li><a href="">Daily</a></li>
  <li><a href="">People</a></li>
<li><a href="">Contact</a></li>
  <li><a href="">Gallery</a></li>
</ul>
-->
<ul>
 <?php 

   //if we are on this page, that would be our active page; if were not on this page, it is not active
  foreach($nav as $key => $value ) {
      if(THIS_PAGE == $key) {
      echo '<li><a class="active" href="'.$key.'">'.$value.'</a></li>';
  }
      else { echo '<li><a href="'.$key.'">'.$value.'</a></li>';
          
      }//end else

  }//end foreach 

   ?>
 </ul> 


</nav>   

</div>
</header>