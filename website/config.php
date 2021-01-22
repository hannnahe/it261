<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['people.php'] = 'People';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {
case 'index.php'  : 
$title = 'Home page of Website Project';
$body= 'home';
    break;

    case 'about.php'  : 
$title = 'About page of Website Project';
$body= 'about';
    break;

    case 'daily.php'  : 
$title = 'Daily page of Website Project';
$body= 'daily';
    break;

    case 'people.php'  : 
$title = 'People page of Website Project';
$body= 'people';
    break;

    case 'contact.php'  : 
$title = 'Contact Page of Website Project';
$body= 'contact';
    break;

    case 'gallery.php'  : 
$title = 'Gallery page of Website Project';
$body= 'gallery';
    break;
}


if(isset($_GET['today'])) {
$today = $_GET['today'] ;  
}
else {
$today = date('l');
}

switch($today){
case 'Monday': 
$flower = 'On Monday I admire Dahlia\'s'; 
$pic = 'images/dahlia.jpg'; 
$alt= "Dahlia";
$content = 'dahlia content here'; 
$background = 'pink';
break;


case 'Tuesday': 
$flower = 'On Tuesday we look at Lilacs '; 
$pic = 'images/lilac.jpg'; 
$alt= "Lilac";
$content = 'Lilacs are the most lovely purple color!'; 
$background = 'yellow';
break;    

case 'Wednesday': 
$flower = 'Tulips are the flower for Wednesday '; 
$pic = 'images/tulip.jpg'; 
$alt= "Tulip";
$content = 'Tulip\'s are a favorite of mine'; 
$background = 'lightblue';
break;   


case 'Thursday': 
$flower = 'Thursdays\'s are the day of Sunflowers'; 
$pic = 'images/sunflower.jpg'; 
$alt= "Sun flower";
$content = 'The best flower of late summer'; 
$background = 'beige';
break;  

case 'Friday': 
$flower = 'Friday is the day of calliandra! '; 
$pic = 'images/calliandra.jpg'; 
$alt= "Calliandra";
$content = 'The coolest puff ball flower'; 
$background = 'orange';
break;  
        
case 'Saturday': 
$flower = 'Start the weekend with a super cool hibiscus flower '; 
$pic = 'images/hibiscus.jpg'; 
$alt= "Hibiscus";
$content = 'You can dry and make tea out of them too!'; 
$background = 'grey';
break;  
        
case 'Sunday': 
$flower = 'Let\s finish the week with Aster '; 
$pic = 'images/aster.jpg'; 
$alt= "Aster";
$content = 'Aster don\'t smell that good in my opinion :)'; 
$background = 'lightgreen';
break;  
}