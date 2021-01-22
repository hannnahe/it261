<?php 
//more on variables and arithmetic operators

//$a = 20;
//$b = 30;
//$c = $a + $b;
//echo $c;
//echo '<br>';
//
//$a = 20;
//$b = 30;
//$c = $a - $b;
//echo $c;
//echo '<br>';
//
//$a = 20;
//$b = 30;
//$c = $a * $b;
//echo $c;
//echo '<br>';

//below is an assignment operator- shorthand arithmetic
//floor function - rounds down
$money = 100;
$money /= 7;
$moneyFriendly = floor(number_format($money,2));

//rounding up - ceil(); function only needs one argument
$moneyFriendly = ceil($money);
echo '<br>';
echo $money;

echo '<br>';
echo $moneyFriendly;

echo '<br>';


//logic and php - arithmetic calculations !
//circumference of a circle C = 2πR 

$radius = 10;
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;

echo '<br>';

//22 degrees celcius = how much F?  (0°C × 9/5) + 32 = 32°F

$celcius = 8;
$far = ($celcius * 9/5) + 32 ;
echo '<br>';

$farFriendly = floor($far);
echo $far; 
echo '<br>';
echo $farFriendly;



echo '<br>';

//travelling and currency - canadian to usd

//$canada = 100;
//$exchange = .79;
//$usd = $canada * $exchange;
//echo $usd;

//assignment operator below- shorthand version of above
$canada = 100;
$canada *= .79;
echo $canada;

echo '<br>';







