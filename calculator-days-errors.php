<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculator with errors</title>
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
    margin-top:35px;
    padding:35px;
    background:#d7ddf7;
}
label{
    display:block;
    margin-bottom:10px;
}

input[type=text],
input[type=submit]{
    margin-bottom:20px; 
}

input[type=submit]{
    display:block; 
    margin-top:10px;
}

form ul {
    margin-left: 20px;
    list-style-type: none;
    margin-bottom:15px;
}

.box{
max-width: 600px;
margin:20px auto;
background: #f7f2e9;
padding:10px;
border: 1px solid black;
}

.button{
background-color: white; 
border:1px grey solid;
border-radius:8px;
padding: 15px;
text-align: center;
text-decoration: none;
display: inline-block;
box-shadow:0px 1px 7px -1px grey;
font-family:sans-serif;
}

a{
text-decoration:none;
color:black;
font-size:.75em;
}

h2{ color:darkgreen;
text-align: center;}

h1{text-align: center;
margin-top:30px;
}
    
</style>
</head>

<body>
<h1>Fuel Calculator</h1>
<form action="" method="post">
<fieldset>
<label>Your Name</label>
<input type="text" name="name">
<label>How many miles will you be driving?</label>
<input type="text" name="tripMiles">
<label>How many hours per day would you like to drive?</label>
<input type="text" name="hours">
<label>Price per Gallon for your Fuel:</label>
<ul>
<li><input type="radio" name="price" value="3.00">$3.00</li>
<li><input type="radio" name="price" value="3.50">$3.50</li>
<li><input type="radio" name="price" value="4.00">$4.00</li>
</ul>
<label>Choose the Fuel Efficiency of your car:</label>
<select name="efficiency">
<option value="NULL">Select One!</option>
<option value="20">Terrible - less than 20MPG</option>
<option value="25">Okay - 25 MPG</option>
<option value="35">Good - 35MPG</option>
<option value="45">Great - 45MPG</option>
</select>
<input class="button" type="submit" value="Calculate!">
<p class="button"><a href="">Reset Form</a></p> 
</fieldset>
</form>


    
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        echo '<div class="box">';
        echo 'Please fill out your name!';
        echo '</div>';
    }
if(empty($_POST['tripMiles']) ||!is_numeric($_POST['tripMiles'])){
        echo '<div class="box">';
        echo 'Enter your total trip miles in number format!';
        echo '</div>';
    }
if(empty($_POST['hours']) ||!is_numeric($_POST['hours'])){
        echo '<div class="box">';
        echo 'Enter your total hours in number format!';
        echo '</div>';
    }
if(empty($_POST['price'])){
        echo '<div class="box">';
        echo 'Please choose the closest price per gallon of your fuel.';
        echo '</div>';
    }
 if($_POST['efficiency'] == 'NULL'){
     echo '<div class="box">';
     echo 'Please choose the closest fuel efficiency that applies to your vehicle.';
     echo '</div>';
 }  
    
    
    
  
    
    if(isset($_POST['tripMiles'],                       
              $_POST['price'],
              $_POST['name'],
              $_POST['hours'],
              $_POST['efficiency'])  &&
       is_numeric($_POST['tripMiles']) &&
       is_numeric($_POST['hours'])
      )   {                                          
$tripMiles = $_POST['tripMiles'];
$price = $_POST['price'];
$efficiency = $_POST['efficiency'];
$hours = $_POST['hours'];
$name = $_POST['name'];
$totalGallons = $tripMiles / $efficiency;
$totalPrice = $totalGallons * $price; 
$totalPriceDollars = number_format($totalPrice,2);

$mph = 60;
$milesPerDay = $hours * $mph;
$totalDays = $tripMiles / $milesPerDay;
$totalHours = $tripMiles / $mph;       
$totalHoursFriendly = number_format($totalHours,2); 
$totalDaysFriendly = number_format($totalDays,2);
 
        

echo '<div class="box">';
echo '<h2>Calculator Results:</h2>';
 echo '<p> Thanks for using our form, '.$name.'!</p>';       
echo '<p>You will be driving '.$tripMiles.' miles.</p>';
echo '<p>Your vehicle has an efficiency of '.$efficiency.' Miles per Gallon.</p>';
echo '<p>Your total cost for gas is $'.$totalPriceDollars.' USD.</p>';
echo '<p>You will drive '.$totalDaysFriendly.' days for '.$totalHoursFriendly.' total hours! </p>';     
echo '</div>';
}  
}//close server request method



?>
</body>
</html>