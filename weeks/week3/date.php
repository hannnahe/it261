<?php
//date

echo date ('Y');

echo '<br>';
echo date ('H:i A'); //military time
echo '<br>';
echo date ('h:i A');  //12hr time
echo '<br>';

//to set time zone to our time zone!!

date_default_timezone_set('America/Los_Angeles');
echo date ('H: i A');
echo '<br>';


//conditional statments based on time of day -- use 24hr clock
$todayDate = date ('H: i A');

if ($todayDate <=11) {
   echo 'Good morn!';
}
elseif ($todayDate <=15) {
   echo 'It\'s afternoon!';
}
else {
    echo 'Good eve!';
}
echo '<br>';