<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

date_default_timezone_set('America/Los_Angeles');

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['people.php'] = 'People';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

function makeLinks($nav){
 $myReturn = '';
foreach($nav as $key => $value){
 if(THIS_PAGE == $key) {
  $myReturn .= '<li><a class="active" href="'.$key.'">'.$value.'</a></li>';  
 }  else {
  $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';     
 }//end else       
}//close foreachloop
   return $myReturn;   
}//close function



//////random function for contact.php

$housePhotos[0] = 'beach';
$housePhotos[1] = 'mountain';
$housePhotos[2] = 'house';
$housePhotos[3] = 'paris';
$housePhotos[4] = 'forest';
function randPhotos($housePhotos){
$i = rand(0,4);
$selectedImage = 'images/'.$housePhotos[$i].'.jpg';
$myPhoto = '<img src="'.$selectedImage.'" alt="'.$housePhotos[$i].'">'; 
return $myPhoto;
}

//end random function



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

    case 'feedback.php'  : 
$title = 'Thanks!';
$body= 'feedback';
    break;
        
    default:
        $body = 'inner';
        $title = 'Hannah\'s website';
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


//form config below:

$firstName=' ';
$lastName=' ';
$email=' ';
$season=' ';
$colors=' ';
$house=' ';
$comments=' ';
$agree=' ';
$phone=' ';

$firstNameErr=' ';
$lastNameErr=' ';
$emailErr=' ';
$seasonErr=' ';
$colorsErr=' ';
$houseErr=' ';
$commentsErr=' ';
$agreeErr=' ';
$phoneErr=' ';



if($_SERVER['REQUEST_METHOD'] == "POST"){

if(empty($_POST['firstName'])){
    $firstNameErr= 'First name please!';
} else {
    $firstName = $_POST['firstName'];
}

if(empty($_POST['lastName'])){
    $lastNameErr= 'Last name please!';
} else {
    $lastName = $_POST['lastName'];
}    

if(empty($_POST['email'])){
    $emailErr= 'Email please!';
} else {
    $email = $_POST['email'];
}
    
if(empty($_POST['phone'])) {  // if empty, type in your number
$phoneErr = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phoneErr = 'Invalid format! Please type xxx-xxx-xxxx format.';
} else{
$phone = $_POST['phone'];
}
}
    
    
if(empty($_POST['season'])){
    $seasonErr= 'Please check one, and I know they\'re all great in their own way so this shouldn\'t be too hard!';
} else {
    $season = $_POST['season'];
}
    
if(empty($_POST['colors'])){
    $colorsErr= 'Pick a favorite color, or a few!';
} else {
    $colors = $_POST['colors'];
}    
    
if($_POST['house'] == 'NULL'){
    $houseErr= 'Choose where you\'d most like to live';
} else {
    $house = $_POST['house'];
} 
   
if(empty($_POST['comments'])){
    $commentsErr= 'Anything else you\'d like me to know?';
} else {
    $comments = $_POST['comments'];
}     
    
if(empty($_POST['agree'])){
    $agreeErr= 'Sorry, but you must agree to continue';}
    else{
    $agree = $_POST['agree'];
}
    
function myColors() {
    $myReturn = ''; 

if(!empty($_POST['colors'])) {
    $myReturn = implode(', ', $_POST['colors']);
} return $myReturn;
} //closefunction  
    
    
 if(isset($_POST['firstName'],
          $_POST['lastName'],
          $_POST['email'],
          $_POST['phone'],
          $_POST['season'],
          $_POST['colors'],
          $_POST['house'],
          $_POST['comments'],
          $_POST['agree'])) {

        $to = 'oszemeo@mystudentswa.com';
        $subject = 'Email from Hannah\'s form, ' .date('h:i A');
        $body = 'Name: '.$firstName.' '.$lastName.''.PHP_EOL.'
        Email : '.$email.''.PHP_EOL.'
        Phone #: '.$phone.''.PHP_EOL.'
        Favorite Season: '.$season.''.PHP_EOL.'
        Comments: '.$comments.''.PHP_EOL.'
        Where you\'d most like to live: '.$house.''.PHP_EOL.'
        Favorite colors: '.myColors().'';
    $headers = array(
    'From' => 'no-reply@hannaheberts.com',
    'Reply-to' => ' '.$email.' ',
    );
     

if($_POST['firstName'] !== '' && 
  $_POST['lastName'] !== '' &&
  $_POST['email'] !== '' &&
  $_POST['colors'] !== '' &&
  $_POST['comments'] !== '' &&
  $_POST['season'] !== '' &&
  $_POST['agree'] !== '' && 
$_POST['phone'] !== '' && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) &&
  $_POST['house'] !== 'NULL'){
    
mail($to, $subject, $body, $headers);
header('Location:feedback.php');
 } 
     
 } //end isset 
    
} // end server request , end config file?
//end form config
