<?php

//if statements

//if(there is a condition) { do something
//    
//}

//$temp = '75';
//if($temp <= 60) {
//    echo 'Must not be too hot';
//    
//} else {
//    echo 'Guess its pretty warm';
//}





$temp = '81';
if($temp <= 60) {
    echo 'Must not be too hot';
    
} elseif( $temp <= 70) {
    echo 'Guess its getting warmer';
} elseif ($temp <= 80) {
    echo 'It\'s hot y\'all';  
} else {
    echo 'Temp unknown!';
}


echo '<br>';

//salary problems


$salary = '200000';
if ($salary == 200000){
    echo 'I\'m happy!';
}



//my salary is 200000, if I make quota of 800k I will make 10% of my salary as bonus . whats my total salary?
//if I make only 750K, then i make 5% bonus
//if I sell only 500K, I dont make any bonus
echo '<br>';
$sales = 801000;
if ($sales <= 500000) {
  //salary remains same
    $salary *= 1;
    echo $salary;
}
elseif ($sales <= 790000){
    $salary *= 1.05;
    echo $salary;
}
elseif ($sales >= 800000){
    $salary *= 1.10;
    echo $salary;
}
else {
    echo 'No Bonus';
}

echo '<br>';
















