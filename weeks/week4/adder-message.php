<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Hannah's Adder Assignment</title>
<style>
*{
padding:0;
margin:10px;
box-sizing:border-box;
    text-align: center;} 
 
fieldset{
padding:15px;
 border:2px blue solid;}

h1{
color: forestgreen;
 margin:10px auto;}
    
form{
width: 600px;
margin:20px auto;}

.total {
color:red;
font-size: 2em}
 
.error{
        color:mediumpurple;  
    }
input{
text-align: left;
}
    
</style>
</head>

<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<fieldset>
<label>Enter the first number:</label>
<input type="text" name="num1">
<br>
<label>Enter the second number:</label>
<input type="text" name="num2">
<br>
<input type="submit" value="Add Em!!">  
</fieldset>
</form>


<?php
//adder-wrong.php

if(isset($_POST['num1'],
          $_POST['num2']
        )) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2']; 

$int1 = intval($num1) ; 
$int2 = intval($num2);
$totalSum = $int1 + $int2;
$myTotal = intval($totalSum);


if(empty($int1 && $int2)) {
    echo '<p class="error"> Houston, we have a problem. Please fill in both numbers!</p>';
    echo '<p><a href="">Reset page</a></p>';
    } else {
echo '<h5>You added ' .$int1. ' and ' .$int2. '</h5>';
echo 'and the answer is <br>
<p class="total">' .$myTotal. '!</p>';
echo '<p><a href="">Reset page</a></p>';
}//close else
}//close isset



?>
</body>
</html>