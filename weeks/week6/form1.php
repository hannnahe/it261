<?php

//if an input field is empty, we are going to create an error variable; this is NOT echoing the error , it's different!
$firstName=' ';
$lastName=' ';
$email=' ';
$gender=' ';
$wines=' ';
$region=' ';
$comments=' ';
$agree=' ';

$firstNameErr=' ';
$lastNameErr=' ';
$emailErr=' ';
$genderErr=' ';
$winesErr=' ';
$regionErr=' ';
$commentsErr=' ';
$agreeErr=' ';




if($_SERVER['REQUEST_METHOD'] == "POST"){

if(empty($_POST['firstName'])){
    $firstNameErr= 'Please enter your first name';
} else {
    $firstName = $_POST['firstName'];
}

if(empty($_POST['lastName'])){
    $lastNameErr= 'Please enter your last name';
} else {
    $lastName = $_POST['lastName'];
}    

if(empty($_POST['email'])){
    $emailErr= 'Please enter your full email';
} else {
    $email = $_POST['email'];
}
    
if(empty($_POST['gender'])){
    $genderErr= 'Please check one';
} else {
    $gender = $_POST['gender'];
}
    
if(empty($_POST['wines'])){
    $winesErr= 'Choose at least one wine';
} else {
    $wines = $_POST['wines'];
}    
    
if($_POST['region'] == 'NULL'){
    $regionErr= 'Choose your region';
} else {
    $region = $_POST['region'];
} 
   
if(empty($_POST['comments'])){
    $commentsErr= 'How can we be of help?';
} else {
    $comments = $_POST['comments'];
}     
    
if(empty($_POST['agree'])){
    $agreeErr= 'Sorry, but you must agree';}
    else{
    $agree = $_POST['agree'];
} 
    
    //if everything is set, lets send it!
 if(isset($_POST['firstName'],
          $_POST['lastName'],
          $_POST['email'],
          $_POST['gender'],
          $_POST['wines'],
          $_POST['region'],
          $_POST['comments'],
          $_POST['agree'])) {
     
     $to = 'ebertshannah@gmail.com';
     $subject = 'Test email for form 1, ' .date('m/d/y');
     $body = 'Hello '.$firstName.' '.$lastName.''.PHP_EOL.'
 Your email is: '.$email.''.PHP_EOL.'
 Your gender is: '.$gender.''.PHP_EOL.'
Your comments: '.$comments.''.PHP_EOL.'
 Your favorite region is: '.$region.'';
     
mail($to, $subject, $body);
header('Location:thx.php');
     
 } //end isset 
    
} // end server request 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>First Emailable Form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<fieldset>
 <label>First name</label>   
<input type="text" name="firstName" >
<span class="err"><?php echo $firstNameErr   ;?></span>
<label>Last name</label>   
<input type="text" name="lastName" > 
<span class="err"><?php echo $lastNameErr   ;?></span>
<label>Email</label>   
<input type="email" name="email" >
<span class="err"><?php echo $emailErr   ;?></span>
<label>Gender</label>   
<ul>
<li><input type="radio" name="gender" value="female">Female</li>
<li><input type="radio" name="gender" value="male">Male</li>
<li><input type="radio" name="gender" value="other">Other</li>
</ul>  
  <span class="err"><?php echo $genderErr   ;?></span>  
<label>Favorite Wines</label>   
<ul>
<li><input type="checkbox" name="wines[]" value="cab">Cabernet</li>
<li><input type="checkbox" name="wines[]" value="merlot">Merlot</li>
<li><input type="checkbox" name="wines[]" value="syrah">Syrah</li>
<li><input type="checkbox" name="wines[]" value="malbec">Malbec</li>
<li><input type="checkbox" name="wines[]" value="shiraz">Shiraz</li>
</ul> 
<span class="err"><?php echo $winesErr   ;?></span>

    <label>Regions</label> 
<select name="region">
<option value="NULL">Select a region</option> 
<option value="nw">Northwest</option> 
<option value="sw">Southwest</option> 
<option value="mw">Midwest</option> 
<option value="ne">Northeast</option> 
<option value="south">South</option> 
</select> 
    <span class="err"><?php echo $regionErr   ;?></span>

<label>Comments</label>   
<textarea name="comments"></textarea>  
<span class="err"><?php echo $commentsErr   ;?></span>

    <label>Agree</label>
<ul>
<li><input type="radio" name="agree" value="agree">Agree</li>    
</ul> 
    <span class="err"><?php echo $agreeErr   ;?></span>
    
<input type="submit" value="Send it!">
    
 <p><a href="">Reset</a></p>   
</fieldset>  
</form>
    
</body>
</html>