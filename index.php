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
<a href="index.php"><img class="logo" src="images/logo.png" alt="logo"></a>
 <nav>
  <ul>  
    <li><a href="index.php">Home</a></li>
    <li><a href="website/daily.php">Switch ~ 3</a></li>  
    <li><a href="adder.php">Troubleshoot ~ 4</a></li>
    <li><a href="calculating/calculating.php">Calculator</a></li>
    <li><a href="website/contact.php">Email</a></li>
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
<li><h5>Week 2</h5>

    <ul>
<li><a href="weeks/week2/var.php">var.php</a></li>
<li><a href="weeks/week2/var2.php">var2.php</a></li>
<li><a href="weeks/week2/currency.php">currency.php</a></li>
<li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
<li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>

    </ul></li>

<li><h5>Week 3</h5>
<ul>
<li><a href="weeks/week3/datatypes.php">datatypes.php</a></li>
<li><a href="weeks/week3/date.php">date.php</a></li>
<li><a href="weeks/week3/foreach.php">foreach.php</a></li>
<li><a href="weeks/week3/if.php">if.php</a></li>
<li><a href="weeks/week3/switch.php">switch.php</a></li>
<li><a href="weeks/week3/milestokm.php">E.C. - Miles to KM</a></li>

</ul></li>

<li><h5>Week 4</h5>
<ul>
<li><a href="weeks/week4/form1.php">form1.php</a></li>
<li><a href="weeks/week4/form2.php">form2.php</a></li>
 <li><a href="weeks/week4/adder-message.php">adder-message.php</a></li>
<!--<li><a href="weeks/week4/adder-int.php">adder-int.php</a></li>-->
<li><a href="weeks/week4/celcius-form.php">celcius-form.php</a></li>
<li><a href="weeks/week4/login-basic.php">login-basic.php</a></li>   
</ul>
<li><h5>Week 5</h5>
<ul>
<li><a href="weeks/week5/currency.php">currency.php</a></li>
 <li><a href="weeks/week5/currency1a.php">currency1a.php</a></li>
     <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
     <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
     <li><a href="weeks/week5/currency4.php">currency4.php</a></li>
    <li><a href="weeks/week5/login2.php">login2.php</a></li>
</ul></li>
<li><h5>Week 6</h5>
<ul>
<li><a href="weeks/week6/form1.php">form1.php</a></li>
<li><a href="weeks/week6/form2.php">form2.php</a></li>
    <li><a href="weeks/week6/form3.php">form3.php</a></li>
    <li><a href="weeks/week6/form4.php">form4.php</a></li>
    <li><a href="weeks/week6/functions.php">functions.php</a></li>
    <li><a href="weeks/week6/implode.php">implode.php</a></li>
    <li><a href="weeks/week6/index.php">index.php</a></li>
    <li><a href="weeks/week6/thx.php">thx.php</a></li>
</ul></li>
<li><h5>Week 7</h5>
<ul>
<li><a href="weeks/week7/random.php">random.php</a></li>
<li><a href="weeks/week7/substr.php">substr.php</a></li>
</ul></li>
<li><h5>Week 8</h5>
<ul>
<li><a href="weeks/week8/people.php">people.php</a></li>
<li><a href="">exercise here</a></li>
</ul></li>
<li><h5>Week 9</h5>
<ul>
<li><a href="">exercise here</a></li>
<li><a href="">exercise here</a></li>
</ul> </li>
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
    <li> <a href="https://validator.w3.org/check?uri=referer">Valid HTML</a>
    </li>
    <li> <a href="https://jigsaw.w3.org/css-validator/check?uri=referer">Valid CSS</a>
    </li>
</ul>
</footer>

</div><!--endwrapper-->
</body>
</html>