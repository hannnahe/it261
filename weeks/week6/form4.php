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
$phone=' ';

$firstNameErr=' ';
$lastNameErr=' ';
$emailErr=' ';
$genderErr=' ';
$winesErr=' ';
$regionErr=' ';
$commentsErr=' ';
$agreeErr=' ';
$phoneErr=' ';



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
    
if(empty($_POST['phone'])) {  // if empty, type in your number
$phoneErr = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phoneErr = 'Invalid format!';
} else{
$phone = $_POST['phone'];
}
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
    
function myWines() {
    $myReturn = '';  //if my wines array is NOt empty, implode it

if(!empty($_POST['wines'])) {
    $myReturn = implode(', ', $_POST['wines']);
} return $myReturn;
} //closefunction  
    
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
        $subject = 'Test email for form 4, ' .date('m/d/y');
        $body = 'Name: '.$firstName.' '.$lastName.''.PHP_EOL.'
        Email : '.$email.''.PHP_EOL.'
        Phone #: '.$phone.''.PHP_EOL.'
        Gender: '.$gender.''.PHP_EOL.'
        Comments: '.$comments.''.PHP_EOL.'
        Favorite region is: '.$region.''.PHP_EOL.'
        Favorite wines: '.myWines().'';
    $headers = array(
    'From' => 'no-reply@hannaheberts.com',
    'Reply-to' => ' '.$email.' ',
    );
     

if($_POST['firstName'] !== '' && 
  $_POST['lastName'] !== '' &&
  $_POST['email'] !== '' &&
  $_POST['wines'] !== '' &&
  $_POST['comments'] !== '' &&
  $_POST['agree'] !== '' && 
$_POST['phone'] !== '' && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) &&
  $_POST['region'] !== 'NULL'){
    
mail($to, $subject, $body, $headers);
header('Location:thx.php');
 } 
     
 } //end isset 
    
} // end server request 
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sticky Form with myWines Function and a phone #</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<h1>Adding a phone#</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<fieldset>
 <label>First name</label>   
<input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']);?>">
<span class="err"><?php echo $firstNameErr   ;?></span>
<label>Last name</label>   
<input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>"> 
<span class="err"><?php echo $lastNameErr   ;?></span>
<label>Phone Number</label>   
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx"value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>"> 
<span class="err"><?php echo $phoneErr   ;?></span>
      
<label>Email</label>   
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
<span class="err"><?php echo $emailErr   ;?></span>
<label>Gender</label>   
<ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'  ;?>>Female</li>
<li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'  ;?>>Male</li>
<li><input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"'  ;?>>Other</li>
</ul>  
  <span class="err"><?php echo $genderErr   ;?></span>  
<label>Favorite Wines</label>   
<ul>
<li><input type="checkbox" name="wines[]" value="cab"  <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked="checked"';?>>Cabernet</li>
<li><input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"';?>>Merlot</li>
<li><input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"';?>>Syrah</li>
<li><input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"';?>>Malbec</li>
<li><input type="checkbox" name="wines[]" value="shiraz" <?php if(isset($_POST['wines']) && in_array('shiraz', $wines)) echo 'checked="checked"';?>>Shiraz</li>
</ul> 
<span class="err"><?php echo $winesErr   ;?></span>

    <label>Regions</label> 
<select name="region">
<option value="NULL" <?php if(isset($_POST['region']) && $_POST['region'] == 'NULL') echo 'selected="unselected"'  ;?>>Select a region</option> 
<option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected="selected"'  ;?>>Northwest</option> 
<option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected="selected"'  ;?>>Southwest</option> 
<option value="mw" <?php if(isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected="selected"'  ;?>>Midwest</option> 
<option value="ne" <?php if(isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected="selected"'  ;?>>Northeast</option> 
<option value="south" <?php if(isset($_POST['region']) && $_POST['region'] == 'south') echo 'selected="selected"'  ;?>>South</option> 
</select> 
    <span class="err"><?php echo $regionErr   ;?></span>

<label>Comments</label>   
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>  
<span class="err"><?php echo $commentsErr   ;?></span>

    <label>Agree with us ...or else...</label>
<ul>
<li><input type="radio" name="agree" value="agree" <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"'  ;?>>Agree</li>    
</ul> 
    <span class="err"><?php echo $agreeErr   ;?></span>
    
<input type="submit" value="Send it!">
    
 <p><a href="">Reset</a></p>   
</fieldset>  
</form>
    
</body>
</html>