<?php 
//switch!!
//
//echo date('Y');
//echo '<br>';
//echo date('l');
////if today is thursday, show me thursday's content 
////must use isset function!! -- isset()
////global variables, capitalized, and the global variables have many attributes
////$_GET  and $_POST (esp on forms)
////is today set????
date_default_timezone_set('America/Los_Angeles');
$todayDate = date ('H: i A');

if(isset($_GET['today'])) {
$today = $_GET['today'] ;  
}
else {
$today = date('l');
}

switch($today){
case 'Thursday': 
$coffee = 'Thursdays are for latte\'s'; 
$pic = 'images/latte.jpg'; 
$alt= "Latte";
$content = 'Lattes are very delicious'; 
$background = 'pink';
break;


case 'Friday': 
$coffee = 'Friday\'s are for americanos ;)'; 
$pic = 'images/cap.jpg'; 
$alt= "americano";
$content = 'Americanos are always too hot, why is that?'; 
$background = 'yellow';
break;    

case 'Saturday': 
$coffee = 'Saturday\'s are for espresso!! '; 
$pic = 'images/espresso.jpg'; 
$alt= "Espresso";
$content = 'Espresso is my favorite <3'; 
$background = 'lightblue';
break;   


case 'Monday': 
$coffee = 'Monday\'s are for Iced Tea!! '; 
$pic = 'images/icedtea.jpg'; 
$alt= "IcedTea";
$content = 'Start off the week with something cool'; 
$background = 'beige';
break;  

case 'Tuesday': 
$coffee = 'Tuesday\'s are for Chai!! '; 
$pic = 'images/chai.jpg'; 
$alt= "Chai Tea";
$content = 'Warm up with some delicious chai tea'; 
$background = 'orange';
break;  
        
case 'Wednesday': 
$coffee = 'Wednesday\'s are for Cold Brew!! '; 
$pic = 'images/coldbrew.jpg'; 
$alt= "Cold Brew";
$content = 'Make it through the week with something strong'; 
$background = 'grey';
break;  
        
case 'Sunday': 
$coffee = 'Sundays\'s are for Matcha Lattes!! '; 
$pic = 'images/matcha.jpg'; 
$alt= "Matcha";
$content = 'Matcha is another favorite'; 
$background = 'lightgreen';
break;  
}



?>
<!doctype html>
<html lang= "en">

<head>
<title>Switch</title>
<meta charset="UTF-8">
<style>
body.pink {
background:pink;
}

body.yellow {
background:yellow;
}
body.lightblue {
background:lightblue;
}
body.beige {
background:beige;
}
body.orange {
background:orange;
}
body.grey {
background:grey;
}
body.lightgreen {
background:lightgreen;
}
    
    
</style>
</head>
<body class="<?php echo $background; ?>">
<h1><?php
if ($todayDate <=11) {
echo 'Good morn! <br>';
}
elseif ($todayDate <=15) {
echo 'It\'s afternoon!<br>';
}
else {
echo 'Good eve!<br>';
}///end else
echo $coffee; ?>
</h1>
<img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p><?php echo $content; ?></p>
<h2>Check out our daily specials below!</h2>
<ul>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>



</ul>
</body>

</html>