<?php


$wines = array('Cab', 'Merlot', 'Syrah', 'Malbec');

//print_r($wines);//not so pretty 

$myWines = implode(', ', $wines);
echo $myWines;