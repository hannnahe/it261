<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form with Option Stickiness</title>
<style>
     *{margin:0;
    padding:0;
    box-sizing:border-box;
    }
    
    form{
     max-width:600px;
     margin: 20px auto; 
    }
    
    fieldset{
        padding:10px;
    }
    label{
        display:block;
        margin-bottom:5px;
    }
    input[type=text],
    input[type=email]{
        width:100%;
        margin-bottom:10px; 
    }
    form ul {
        margin-left: 20px;
        list-style-type: none;
        margin-bottom:15px;
    }
    .box{
        width:400px;
        margin:20px auto;
        background: lightblue;
        padding:10px;
    }
    
    select{
        margin-bottom: 10px;
        display: block; 
    }
    
</style>
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">      
<fieldset>
<label>Name</label>
<input type="text" name="name" value="<?php if(isset($_POST['name']))echo htmlspecialchars($_POST['name']) ;?>">
<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email']))echo htmlspecialchars($_POST['email']) ;?>"> 
<label>How much money do you have?</label>
<input type="text" name="amount" value="<?php if(isset($_POST['amount']))echo htmlspecialchars($_POST['amount']) ;?>">  
<label>Choose your current currency</label>
<ul>
<li><input type="radio" name="currency" value="0.013" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked = "checked"' ;?>>Rubles</li>
<li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked = "checked"' ;?>>Canadian Dollars</li>
<li><input type="radio" name="currency" value="1.28" <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked = "checked"'  ;?>>Pounds</li>
<li><input type="radio" name="currency" value="1.18" <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked = "checked"'  ;?>>Euros</li>
<li><input type="radio" name="currency" value="0.0094" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked = "checked"'     ;?>>Yen</li>
</ul>
  <label>Where do you bank?</label>
    <select name="bank">
    <option value="NULL"   <?php if(isset($_POST['bank']) && $_POST['bank'] == 'NULL') echo 'selected = "unselected"' ;?>>Select One!</option>
    <option value="boa" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'boa') echo 'selected = "selected"' ;?>>Bank of America</option>
    <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected = "selected"' ;?>>Chase</option>
    <option value="becu" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'becu') echo 'selected = "selected"' ;?>>BECU</option>
    <option value="mattress" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'mattress ') echo 'selected = "selected"' ;?>>Under the bed</option>
    
    </select>
<input type="submit" value="Convert to USD!">
 <p><a href="">Reset</a></p>   
</fieldset>
</form>

    
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
if(empty($_POST['name'])){                         //if empty , then echo
    echo '<p>Please fill out your name!</p>';
}    

if(empty($_POST['email'])){                         
echo '<p>Please fill out your email!</p>'; 
}
    
if(empty($_POST['amount']) || !is_numeric($_POST['amount'])){                         
echo '<p>Show me the money or enter a number!</p>'; 
} 
  
if(empty($_POST['currency'])){                         
echo '<p>You must choose a currency</p>';           
}

if($_POST['bank'] == 'NULL'){
    echo '<p>Choose a banking institution</p>';
}    

if(isset($_POST['name'],                       //is name, email, variables set? we have to set these variables
                $_POST['email'],
                $_POST['amount'],
                $_POST['currency'],
                $_POST['bank'])  &&
       is_numeric($_POST['amount'])
      )   //close isset
          {                                       //this is where we set the variables            
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$bank = $_POST['bank'];
$total = $amount * $currency;
$totalFormat = number_format($total, 2);
    
    
//if the total is greater than or equal to ... you may be happy, else you are not
   
    
if($total >= 2000){
    echo '<div class="box">';
    echo 'I\'m a happy camper, because I have $'.$totalFormat.' USD and I am going to buy new shoes.';
    echo '</div>';
}   else {
    echo '<div class="box">';
   echo 'I\'m not too pleased because I only have $'.$totalFormat.' USD.'; 
    echo '</div>';
} 
    





}// end elseif
    
}//close server request method



?>
</body>
</html>