<?php 
//for loop 

//celcius formula 
//farenheit = (celcius * 9/5) + 32

//$celcius = 14;
//$far = ($celcius * 9/5) + 32;
//echo $far;
//
//



//forloop has 3 arguments
//for this forloop you cannot use the celcius variable outside of the loop 
for($celcius = 0;
   $celcius <= 100; 
   $celcius += 5){
$far = ($celcius * 9/5) + 32; 
    echo ''.$celcius.' &nbsp; &nbsp; '.$far.' <br>';
}

echo ''.$celcius.'';


//extra credit : miles and kilometers
//add miles and km to forloop   1Km is equivalent to 0.6214 miles. find it on milestokm.php

