<?php 
//extra credit miles to km using for loop

// 1Km is equivalent to 0.6214 miles.
echo 'Miles to KM:';
echo '<br>';
for($miles = 5;
   $miles <= 2000;
   $miles += 5){
    $km = $miles * 0.62; 
    echo ''.$miles.'&nbsp;&nbsp;&nbsp;'.$km.'<br>';
}


