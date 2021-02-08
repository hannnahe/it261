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
$myTotal = $num1 + $num2;
    
echo '<h5>You added ' .$num1. ' and ' .$num2. '</h5>';
echo 'and the answer is <br>
<p class="total">' .$myTotal . '!</p>';
echo '<p><a href="">Reset page</a></p>';
}//close isset


 //Olga, sorry if some of these line numbers are off. As I continued to edit the document, things changed lines! I tried my best to fix them all , but may have mixed a few up by a line or two:)   
// moved html doctype to top of document
//line 39 added fieldset opening tag and closed it on line 47
//line 55- added $_POST['num2'] 
//line 59 - $myTotal = $num1 + $Num2; removed -  
//line 61 $num2
//line 61 added closing h2 tag.. changed these to h5
//line 61 reformatted " to ' and changed h2 to h5 tags
//line 63 fixed style tag and changed \" to \' .... ended up removing inline style tag 
//line 64 added closing p tag
//added styles in style tag within head tag to format the form correctly
//added method=post to form opening tag
// removed < from in front of enter
// Num1 on line 57 to num1
//moved php start tag to after form close tag s
// added " to after "add em !"  
//line 90 added closing php tag before closing body tag
//line 92- removed ";{>" after html tag 
//changed my comment tags to php comment tags!



?>
</body>
</html>





