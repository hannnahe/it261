<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Our Celcius Form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">

</head>

<body>
    <!--  this global variable $_SERVER was used in the switch when we created the THIS_PAGE constant... read THIS PAGE 
htmlspecialchars is a function that protects against hacks-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<legend> Hannah's Celcius Form</legend>
<label>Enter your Celcius value</label>
<input type="text" name="cel">
<input type="submit" value="Convert!">
<a href="">Reset</a>
</fieldset>
</form>
<?php
    //f= (c * 9/5) +32
if($_SERVER["REQUEST_METHOD"] == 'POST'){
if(isset($_POST['cel'])) { //if isset post cel is set
    $cel = $_POST['cel'];
    $far= ($cel * 9/5) +32;

if($far <= 32){
echo ' <p class="cool">'.$far.' is super cold!! Yikes!</p>' ; 
}elseif ($far <= 50){
echo ' <p class="not-cool">'.$far.' is not too cold.</p>';
} elseif ($far <= 80){
 echo ' <p class="hot">'.$far.' is getting hot!</p>';   
}
    else {
echo ' <p class="hot">'.$far.' is SO HOT!</p>';
} //close else
}//close if isset
}//close server request method
        

    
?>
</body>
</html>