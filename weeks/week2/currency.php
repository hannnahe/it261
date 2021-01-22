<?php
// our currency example below


//1 ruble = 0.013 dollars 
//1 pound sterling = 1.28 dollars 
//1 canada = 0.79 dollars 
//1 euro = 1.18 dollars 
//1 yen = 0.0094 dollars 


 $ruble = 10007;
$ruble *= 0.013;
$rubleFriendly = number_format($ruble, 2);

$sterling = 500;
$sterling *=1.28;
$sterlingFriendly = number_format($sterling, 2);

$canada = 5000;
$canada *=0.79;
$canadaFriendly = number_format($canada, 2);


$euro = 1200;
$euro *=1.18;
$euroFriendly = number_format($euro, 2);

$yen = 2500;
$yen *= 0.0094;
$yenFriendly = number_format($yen, 2);

$total = $ruble + $sterling + $canada + $euro + $yen;
$totalFriendly = number_format($total, 2);

//you CANNOT echo anything above the doctype!!!
?>

<!doctype html>  
<html lan='en'>
<head>
<meta charset="UTF-8">
<style>
    table{
        width:300px;
        margin:0 auto;
        border:2px solid green;
        border-collapse:collapse;
    } 
    
    td{
        border:2px dashed green;
        padding: 6px;   
    }
    
    th {
        padding: 5px;
        background: lightpink;
    }   
</style>
    
</head>
<body>
 <table>
<tr>
<th>Money</th> 
<th>Dollars</th>
</tr>
 <tr>
     <td>Rubles</td>
     <td><?php 
         echo '$'.$rubleFriendly.''; 
         ?></td>
</tr>
      <tr>
     <td>Sterling</td>
     <td><?php   echo '$'.$sterlingFriendly.'';   ?></td>
</tr>
     <tr>
     <td>Canada</td>
     <td><?php   echo '$'.$canadaFriendly.'';   ?></td>
</tr>
      <tr>
     <td>Euro</td>
     <td><?php   echo '$'.$euroFriendly.'';   ?></td>
</tr>
     <tr>
     <td>Yen</td>
     <td><?php   echo '$'.$yenFriendly.'';   ?></td>
</tr>
     
     <tr>
     <th>Total</th>
     <th><?php   echo '$'.$totalFriendly.'';   ?></th>
</tr>
 
</table>   
    
    
    
</body>
</html>