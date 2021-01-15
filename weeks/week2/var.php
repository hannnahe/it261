<?php

//this will be a page of variables! php doesnt exist without variables; assigning a string to a variable which is a container
$name = 'Hannah';
echo 'Its really cold today!';
echo '<br>';
echo $name;
$name = 'Frank';
$name = 'Sharon';
echo '<br>';
echo $name;
echo '<br>';
$firstname = 'Hannah';
$lastname = 'Eberts';
echo $firstname. ' ' .$lastname;
//single v double quotes- single quotes for this class bc it'll keep it easier to discern w html on the same page
echo '<br>';
echo ' '.$firstname.' ';
echo '<br>';
echo "$firstname";
echo '<br>';

$name = 'Kim';
$name .= ' Burt';
echo $name;
echo '<br>';

$x = 20;
$y = 25;
$z = $x + $y;
echo $z;
echo '<br>';

$x = 20;
$x += 23;
echo $x;
echo '<br>';

$a = 100;
$a /= 7;
$aFriendly = number_format($a,2);
echo $a;

echo '<br>';
echo $aFriendly; 

echo '<br>';
echo date('Y');
//when you add square brackets it becomes an array and You CANNOT echo an array
echo '<br>';
$name = 'Hannah';
$name = 'Dae';
$name = 'Olga';
$name = 'Akin';
$name = 'Ruth';
////echo $name;


//below are indexed arrays
echo '<br>';

$dairy[] = 'milk';
$dairy[] = 'cheese';
$dairy[] = 'icecream';
$dairy[] = 'yogurt';
echo '<br>';
echo $dairy[0];
echo '<br>';
print_r($dairy);
echo '<br>';
var_dump($dairy);

//$nav[] = 'Home';
//$nav[] = 'About';
//$nav[] = 'Products';
//$nav[] = 'Contact';
//$nav[] = 'Sale';
//echo '<br>';
//echo $nav[2];

echo '<br>';


$nav = array(
'index.php' => 'Home',
'about.php' => 'About',
'product.php' => 'Products',
'contact.php' => 'Contact',
'sale.php' => 'Sale'
);
//wordpress uses above format, below format is the same thing
print_r($nav);

$nav = [
'index.php' => 'Home',
'about.php' => 'About',
'product.php' => 'Products',
'contact.php' => 'Contact',
'sale.php' => 'Sale'
    ];
//u can use an array inside a form for choices



$show = 'The Crown';
$showActor = 'Olivia Coleman';
$showGenre = 'Historical Fiction';



echo '<br>';
echo "$show is a show featuring $showActor in a drama series defined as $showGenre";

echo '<br>';
echo ''.$show.' is a show featuring '.$showActor.' in a drama series defined as '.$showGenre.'';





















