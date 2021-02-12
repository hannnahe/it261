<?php 
//functions starting with basic to more advanced!

//creating a function
function sayHello() {
   echo 'Hello PHP function :) !!'; 
}
//then call the function 
sayHello();
echo '<br>';


function sayHello2($name){
echo 'Hello '.$name.'';    
}

sayHello2('Hannah');
echo '<br>';
sayHello2('Maggie');
echo '<br>';
sayHello2('Drew');
echo '<br>';


function sayHello3($name, $age){
echo 'Hello '.$name.', and you are '.$age.' years old.';    
}

sayHello3('Hannah', 30);
echo '<br>';
sayHello3('Maggie', 26);
echo '<br>';
sayHello3('Drew', 32);
echo '<br>';
echo '<br>';
echo '<h2>Math !</h2>';

function cube($n){
    $cubing = $n * $n * $n;
    echo $cubing;
}

cube(20);

echo '<br>';
echo '<h2>Celcius converter</h2>';
function celciusConvert($temp){
 $far = ($temp * 9/5) + 32;  
echo $far;
}

celciusConvert(5);


echo '<h2>Area and Volume</h2>';
 
//can only return 1 argument

function areaVolume($value1, $value2, $value3){
    $area = $value1 * $value2;
    $volume = $value1 * $value2 * $value3;
    return array($area, $volume);
}

$result = areaVolume(10, 5, 6);  //now need to echo an array
echo '<b>Area :</b> '.$result[0].'';
echo '<br>';
echo '<b>Volume :</b> '.$result[1].'';
echo '<br>';


function areaVolume2($value1a, $value2a, $value3a){
    $area2 = $value1a * $value2a;
    $volume2 = $value1a * $value2a * $value3a;
    return array($area2, $volume2);
}

list($myArea, $myVolume) = areaVolume2(10, 5, 2);
echo $myArea;
echo '<br>';
echo $myVolume;






