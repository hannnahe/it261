<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Basic Currency Form with Radio and Dropdown</title>
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
<form action="" method="post">
<fieldset>
<label>Name</label>
<input type="text" name="name">
<label>Email</label>
<input type="email" name="email"> 
<label>How much money do you have?</label>
<input type="text" name="amount">  
<label>Choose your current currency</label>
<ul>
<li><input type="radio" name="currency" value="0.013">Rubles</li>
<li><input type="radio" name="currency" value="0.76">Canadian Dollars</li>
<li><input type="radio" name="currency" value="1.28">Pounds</li>
<li><input type="radio" name="currency" value="1.18">Euros</li>
<li><input type="radio" name="currency" value="0.0094">Yen</li>
</ul>
  <label>Where do you bank?</label>
    <select name="bank">
    <option value="NULL">Select One!</option>
    <option value="boa">Bank of America</option>
    <option value="chase">Chase</option>
    <option value="becu">BECU</option>
    <option value="hole">Hole in the backyard</option>
    
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

    echo '<div class="box">';
    echo '<h2>Hello '.$name.'</h2>';
    echo '<p>You have $'.$totalFormat.' USD and we will depositing it in your '.$bank.'</p>';
    echo '<p>We will be sending you an email at '.$email.'</p>';
    echo '</div>';
}// end elseif
    
}//close server request method



?>
</body>
</html>