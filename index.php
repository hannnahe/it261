<?php
//you cannot place php above doctypehtml if it will produce html
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Hannah's IT261 Page</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
   <header>
    <div class="inner-header">
    <a href="index.html"><img class="logo" src="images/logo.png" alt="logo"></a>
     <nav>
      <ul>  
        <li><a href="index.php">Home</a></li>
        <li><a href="">Switch ~ 3</a></li>  
        <li><a href="">Troubleshoot ~ 4</a></li>
        <li><a href="">Calculator</a></li>
        <li><a href="">Email</a></li>
        <li><a href="">Gallery</a></li>
        <li><a href="">Database</a></li>
        </ul>
        </nav>   
        
    </div>
    </header> 
    <div id="wrapper">
        <h1>Welcome to Hannah's Portal for IT261 ~ Web App Programming Winter 2021</h1>

        

 <main>
     <h4> A bit about me: </h4>
     <p>I’m a student in the Web Design track at Seattle Central College. I’m fairly new to web development and design and am enjoying learning these new languages. When I’m not learning how to code, I like to explore my neighborhood by walking and running, make focaccia, and read- anything I can get my hands on! I’ve also been a weaver for about 10 years now and like to spend time making tapestries and creating on my loom. Lastly, I love to travel and my hope for us all in 2021 is that we can start visiting the world again :)
     </p>
     <h4>Mamp and error page here:</h4>
     <p>
         <img class="mamp" src="images/mamp.png" alt="MAMP">
         <img class="mamp" src="images/error.png" alt="Error">
     </p>
</main>
        
<aside>
     <div id="hero">
    <img src="images/hannah.jpg" alt="Pic of Hannah">
</div><!--endhero-->
    <div class="exercises">
    <h3>Weekly Class Exercises:</h3>
    <ul>
        <li><h5>Week 2</h5></li>
        <ul>
            <li><a href="weeks/week2/var.php">var.php</a></li>

        </ul>
        <li><h5>Week 3</h5></li>
        <ul>
            <li><a href="">exercise here</a></li>
             <li><a href="">exercise here</a></li>
        </ul>
        <li><h5>Week 4</h5></li>
         <ul>
            <li><a href="">exercise here</a></li>
             <li><a href="">exercise here</a></li>
        </ul>
        <li><h5>Week 5</h5></li>
         <ul>
            <li><a href="">exercise here</a></li>
             <li><a href="">exercise here</a></li>
        </ul>
        <li><h5>Week 6</h5></li>
         <ul>
            <li><a href="">exercise here</a></li>
             <li><a href="">exercise here</a></li>
        </ul>
        <li><h5>Week 7</h5></li>
         <ul>
            <li><a href="">exercise here</a></li>
             <li><a href="">exercise here</a></li>
        </ul>
        <li><h5>Week 8</h5></li>
         <ul>
            <li><a href="">exercise here</a></li>
             <li><a href="">exercise here</a></li>
        </ul>
        <li><h5>Week 9</h5></li>
         <ul>
            <li><a href="">exercise here</a></li>
             <li><a href="">exercise here</a></li>
        </ul> 
    </ul>
    </div>
</aside>
        
        
<footer>
    <ul>
        <li> Copyright <?php echo date('Y');?> <a href="https://www.hannaheberts.com/contactme.php" target="_blank">Hannah Eberts</a> 
        </li>
        <li> All Rights Reserved
        </li>
        <li><a href="index.php">Portal Page</a></li>
        <li> <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a>
        </li>
        <li> <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>
        </li>
    </ul>
</footer>
    
    </div><!--endwrapper-->
</body>
</html>