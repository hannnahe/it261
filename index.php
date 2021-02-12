<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['people.php'] = 'People';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Testing index page with a Function for NAV</title>
<style>
    .active { color:green;}
</style>
</head>

<body>
    <h1>Nav as function test!</h1>
<nav>
<ul>
<?php echo makeLinks($nav); ?> 

</ul>   

</nav>    

</body>
</html>

