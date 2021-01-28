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
$flower = 'On Monday\'s we love Dahlias'; 
$pic = 'images/dahlia.jpg'; 
$alt= "Dahlia";
$content = 'Dahlias are one of my ultimate favorite flowers. They can be as big as dinner plates! Dahlias are perennials so they come back every year.'; 
$background = 'pink';
break;


case 'Tuesday': 
$flower = 'On Tuesday we look at Lilacs '; 
$pic = 'images/lilac.jpg'; 
$alt= "Lilac";
$content = 'Lilacs are the most lovely purple color! They also smell wildly good. Lilac bushes can be quite large and bloom in late spring or early summer.'; 
$background = 'lilac';
break;    

case 'Wednesday': 
$flower = 'Tulips are the flower for Wednesday '; 
$pic = 'images/tulip.jpg'; 
$alt= "Tulip";
$content = 'Tulip\'s are a classique. They only live for a short time in the spring, so get them while you can! If you\'ve never been to the tulip fields in Mount Vernon in the spring, you should go!'; 
$background = 'green';
break;   


case 'Thursday': 
$flower = 'Thursday\'s are the day of Sunflowers'; 
$pic = 'images/sunflower.jpg'; 
$alt= "Sun flower";
$content = 'The best flower of late summer. They are super hardy and last through the fall months as well. They can also be over 6 feet tall. Sunflower fields are my favorite thing. '; 
$background = 'beige';
break;  

case 'Friday': 
$flower = 'Friday is the day of calliandra! '; 
$pic = 'images/calliandra.jpg'; 
$alt= "Calliandra";
$content = 'The coolest puff ball flower. I think these only grow in tropical climates because I have never seen them in the PNW. Caution- this plant is poisonous! "The flowers, seeds and nectar are very poisonous. All parts of the plant can cause irritation and pain in the mouth when chewed. The sap and bulb are especially toxic to children."' ; 
$background = 'orange';
break;  
        
case 'Saturday': 
$flower = 'Start the weekend with a super cool hibiscus flower on Saturday'; 
$pic = 'images/hibiscus.jpg'; 
$alt= "Hibiscus";
$content = 'These are really cool tropical flowers. You can dry them and make Jamaica or hot tea out of them too!'; 
$background = 'mango';
break;  
        
case 'Sunday': 
$flower = 'For Sunday, let\'s finish the week off with Aster '; 
$pic = 'images/aster.jpg'; 
$alt= "Aster";
$content = 'Aster doesn\'t smell that good in my opinion but they\'re all over the place in the Pacific Northwest. These plants look just like purple daisies. They usually blossom at the end of summer or early fall.'; 
$background = 'blue';
break;  
}