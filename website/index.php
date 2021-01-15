<?php
//you cannot place php above doctypehtml if it will produce html
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Website folder homepage</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
   <header>
    <div class="inner-header">
    <a href="index.html"><img src="../images/logo.png" alt="logo"></a>
     <nav>
      <ul>  
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>  
        <li><a href="">Daily</a></li>
          <li><a href="">People</a></li>
        <li><a href="">Contact</a></li>
          <li><a href="">Gallery</a></li>
        </ul>
        </nav>   
        
    </div>
    </header> 
    <div id="wrapper">
    <h1>Here lies the content of my home page.</h1>
<div id="hero">
     
</div><!--endhero-->
 <main>
 <h2> Headline within main </h2>       
</main>
        
<aside>
    <h3>headline w/in aside</h3>
</aside>
        
        
<footer>
    <ul>
        <li> Copyright <?php echo date('Y');?> <a href="hannaheberts.com" target="_blank">Hannah Eberts</a> 
        </li>
        <li> All Rights Reserved
        </li>
        <li><a href="../index.php">Portal Page</a></li>
        <li> <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a>
        </li>
        <li> <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
        </li>
    </ul>
</footer>
    
    </div><!--endwrapper-->
</body>
</html>