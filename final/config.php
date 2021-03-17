<?php
//config page will communicate with credentials page
ob_start(); //prevents header errors before reading the whole page
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
define('DEBUG', 'TRUE'); //we want to see our errors

include('credentials.php');

date_default_timezone_set('America/Los_Angeles');

//nav function below 
$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About the DB';
$nav ['daily.php'] = 'Daily Dose of Modernism';
$nav ['architecture.php'] = 'Architectural Movements';
$nav ['contact.php'] = 'Contact';



function makeLinks($nav){
$myReturn = '';
foreach($nav as $key => $value){
if(THIS_PAGE == $key) {
$myReturn .= '<li><a class="active" href="'.$key.'">'.$value.'</a></li>';  
}  else {
$myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';     
}      
}
return $myReturn; 
} //close function

switch(THIS_PAGE) {
case 'index.php'  : 
$title = 'Home Page of Final';
$body= 'home';
    break;

    case 'about.php'  : 
$title = 'About Final Project';
$body= 'about';
    break;

    case 'daily.php'  : 
$title = 'Daily dose of Modernism';
$body= 'daily';
    break;

    case 'architecture.php'  : 
$title = 'Architectural styles';
$body= 'styles';
    break;

    case 'contact.php'  : 
$title = 'Contact me!';
$body= 'contact';
    break;


    case 'feedback.php'  : 
$title = 'Thanks!';
$body= 'feedback';
    break;
        
    default:
        $body = 'inner';
        $title = 'Hannah\'s Final';
}

//form config starts
$firstName=' ';
$lastName=' ';
$email=' ';
$familiar=' ';
$styles=' ';
$arch=' ';
$comments=' ';
$agree=' ';
$phone=' ';

$firstNameErr=' ';
$lastNameErr=' ';
$emailErr=' ';
$familiarErr=' ';
$stylesErr=' ';
$archErr=' ';
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
    
    
if(empty($_POST['familiar'])){
    $familiarErr= 'Choose one option please!';
} else {
    $familiar = $_POST['familiar'];
}
    
if(empty($_POST['styles'])){
    $stylesErr= 'Pick some architectural styles you like!';
} else {
    $styles = $_POST['styles'];
}    
    
if($_POST['arch'] == 'NULL'){
    $archErr= 'Choose an architect to learn more about.';
} else {
    $arch = $_POST['arch'];
} 
   
if(empty($_POST['comments'])){
    $commentsErr= 'Tell me more!';
} else {
    $comments = $_POST['comments'];
}     
    
if(empty($_POST['agree'])){
    $agreeErr= 'Sorry, but you must agree to continue';}
    else{
    $agree = $_POST['agree'];
}
    
function myStyles() {
    $myReturn = ''; 

if(!empty($_POST['styles'])) {
    $myReturn = implode(', ', $_POST['styles']);
} return $myReturn;
} //closefunction  
    
    
 if(isset($_POST['firstName'],
          $_POST['lastName'],
          $_POST['email'],
          $_POST['phone'],
          $_POST['familiar'],
          $_POST['styles'],
          $_POST['arch'],
          $_POST['comments'],
          $_POST['agree'])) {

        $to = 'szemeo@mystudentswa.com';
        $subject = 'Email from Hannah\'s architecture website, ' .date('h:i A');
        $body = 'Name: '.$firstName.' '.$lastName.''.PHP_EOL.'
        Email : '.$email.''.PHP_EOL.'
        Phone #: '.$phone.''.PHP_EOL.'
        Current level of familiarity with architecture: '.$familiar.''.PHP_EOL.'
        Comments: '.$comments.''.PHP_EOL.'
        Who you\'d like to learn more about: '.$arch.''.PHP_EOL.'
        Favorite architectural movements: '.myStyles().'';
    $headers = array(
    'From' => 'no-reply@hannaheberts.com',
    'Reply-to' => ' '.$email.' ',
    );
     

if($_POST['firstName'] !== '' && 
  $_POST['lastName'] !== '' &&
  $_POST['email'] !== '' &&
  $_POST['styles'] !== '' &&
  $_POST['comments'] !== '' &&
  $_POST['familiar'] !== '' &&
  $_POST['agree'] !== '' && 
$_POST['phone'] !== '' && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) &&
  $_POST['arch'] !== 'NULL'){
    
mail($to, $subject, $body, $headers);
header('Location:feedback.php');
 } 
     
 } 
    
} 
//end form config

//dailyswtich config

if(isset($_GET['today'])) {
$today = $_GET['today'] ;  
}
else {
$today = date('l');
}

switch($today){
case 'Monday': 
$architect = 'Rem Koolhaas'; 
$pic = 'images/rotterdam.jpg'; 
$alt = "De Rotterdam";
$content = 'Remment Lucas Koolhaas is a Dutch architect, architectural theorist, urbanist and Professor in Practice of Architecture and Urban Design at the Graduate School of Design at Harvard University. His work is representative of Deconstructivism, and is seen as one of the most signifigant architectural thinkers of his generation. Some projects that he is famed for: our very own Central Library in Seattle, De Rotterdam, Maison a Bordeaux, and the Fondazione Prada.'; 
$pic2 = 'images/prada.jpg';
$alt2 = "Fondazione Prada";
break;


case 'Tuesday': 
$architect = 'Le Corbusier'; 
$pic = 'images/villasavoye.jpg'; 
$alt = "Villa Savoye";
$content = 'Charles-Edouard Jeanneret, known as Le Corbusier, was a Swiss-french architect, designer, painter, urban planner, and pioneer of Modern Architecture. He designed buildings in Europe, Japan, India and North and South America. He has 17 projects in seven different countries that are UNESCO World Heritage sites. Some projects that he is known for: Ville Savoie, Cite radieuse de Marseille, Citrohan House, and La Roche-Jeanneret House.'; 
$pic2 = 'images/laroche.jpg'; 
$alt2 = "La Roche-Jeanneret House";
break;    

case 'Wednesday': 
$architect = 'Frank Lloyd Wright'; 
$pic = 'images/fallingwater.jpg'; 
$alt = "FallingWater";
$content = 'Frank Lloyd Wright was an American architect, designer, writer, and educator. He designed more than 1,000 structures over a creative period of 70 years. Wright believed in designing in harmony with humanity and the environment, a philosophy he called organic architecture. His project Fallingwater (1935) has been called the "best all-time work American architecture." Other notable works: The Guggenheim Museum, Taliesin West, Robie House, and Hollyhock House.  '; 
$pic2 = 'images/guggenheim.jpg'; 
$alt2 = "The Guggenheim";
break; 
        
case 'Thursday': 
$architect = 'Ettore Sottsass'; 
$pic = 'images/casamaui.jpg'; 
$alt = "Casa Maui";
$content = 'Ettore Sottsass was an Italian architect and designer during the 20th century. His body of work included furniture, jewellery, glass, lighting, home objects and office machine design, as well as many buildings and interiors. Ettore Sottsass founded the Memphis Group in Milan on 11 December 1980. The Memphis Group was a postmodern, collaborative, architecture and design group founded by Sottsass in Milan Italy. The group focused heavily on furniture design with an emphasis on unconventional types. The designers became well known for their bright and bold pieces with clashing colors.  '; 
$pic2 = 'images/casawolf.jpg'; 
$alt2 = "Casa Wolf";
break;  

case 'Friday': 
$architect = 'Zaha Hadid'; 
$pic = 'images/broad.jpg'; 
$alt = "Broad Art Museum";
$content = 'Dame Zaha Mohammad Hadid DBE RA was a British Iraqi architect, artist and designer, recognised as a major figure in architecture of the late 20th and early 21st centuries. She was described by The Guardian as the "Queen of the curve", who "liberated architectural geometry, giving it a whole new expressive identity".  Her major works include the London Aquatics Centre for the 2012 Olympics, the Broad Art Museum, Rome\'s MAXXI Museum, and the Guangzhou Opera House.'; 
$pic2 = 'images/curve.jpg'; 
$alt2 = "Zaha Hadid Famous Work";
break;  

case 'Saturday': 
$architect = 'Bernard Tschumi'; 
$pic = 'images/villette.jpg'; 
$alt = "Parc de la Villette";
$content = 'Bernard Tschumi is an architect, writer, and educator, commonly associated with deconstructivism. Son of the well-known Swiss architect Jean Tschumi and a French mother, Tschumi is a dual French-Swiss national who works and lives in New York City and Paris. Some works to mention: Parc de la Villette, Paris Zoo, Binhai Science Museum, and Vacheron Constantin-2.'; 
$pic2 = 'images/binhai.jpg'; 
$alt2 = "Binhai Science Museum";
break;  
        
case 'Sunday': 
$architect = 'Mies Van de Rohe'; 
$pic = 'images/glass.jpg'; 
$alt = "Glass House";
$content = 'Ludwig Mies van der Rohe was a German-American architect. He is regarded as one of the pioneers of modernist architecture. Mies was the last director of the Bauhaus, a ground-breaking school of modern art, design and architecture. Mies sought to establish his own particular architectural style that could represent modern times just as Classical and Gothic did for their own eras. He created his own twentieth-century architectural style, stated with extreme clarity and simplicity. His mature buildings made use of modern materials such as industrial steel and plate glass to define interior spaces. Mies strove toward an architecture with a minimal framework of structural order balanced against the implied freedom of unobstructed free-flowing open space. He called his buildings "skin and bones" architecture. Works: Farnsworth House, Crown Hall, the Seagram Building, and the Barcelona Pavilion. '; 
$pic2 = 'images/farnsworth.jpg'; 
$alt2 = "Farnsworth House";
break;  
}












//keep all the way on bottom 
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}