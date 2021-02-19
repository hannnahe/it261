<?php
//rand() function


$dice = rand(1, 6);
echo $dice;
echo '<br>';

$dice1 = rand(1, 6);
$dice2 = rand(1, 6);
echo '<br>';

//echo $dice1;
//echo '<br>';
//echo $dice2;

if($dice1 == $dice2){
    echo 'You have a double! You win!';
}
else {
    echo 'You lose';
}

$photos = array('photo1','photo2','photo3','photo4','photo5');

$photos = ['photo1','photo2','photo3','photo4','photo5'];

//associative array vs indexed array, this is an indexed array below

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(1,4);
$selectedImage = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImage.'" alt="'.$photos[$i].'">';