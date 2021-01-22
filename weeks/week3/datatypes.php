<?php
//datatypes

$temp1 = '60'; //... 60 is a string?
$temp2 = '40';
$total = $temp1 + $temp2;
echo $total;
echo '<br>';

$name = 'Hannah';
echo $name;
echo '<br>';

$temp = '60';   //is a string
if($temp === 60 ) {  //here 60 is an integer; ==comparison is regardless of the datatype, ===is identical 
    echo 'it is identical';
} else { echo 'it is not identical';
    
}
//best practice is to not use integers as a string 