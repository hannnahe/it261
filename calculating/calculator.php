<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Calculator</title>
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
margin-bottom:10px; 
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
box-shadow: 3px grey;
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
<label>How many miles will you be driving?</label>
<input type="text" name="miles">
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
    
if(empty($_POST['miles'] &&
         $_POST['price'] &&
         $_POST['efficiency'])){
    echo '<div class="box">';
    echo '<h2>Error!</h2>';
    echo 'Please fill a valid distance, price per gallon, and the efficiency of your car!';
    echo '</div>';
} 
    
    
    if(isset($_POST['miles'],                       
                $_POST['price'],
              $_POST['efficiency'])  &&
       is_numeric($_POST['miles'])
      )   
          {                                          
$miles = $_POST['miles'];
$price = $_POST['price'];
$efficiency = $_POST['efficiency'];
$totalGallons = $miles / $efficiency;
$totalPrice = $totalGallons * $price; 
$totalPriceDollars = number_format($totalPrice,2);
        

echo '<div class="box">';
echo '<h2>Calculator Results:</h2>';
echo '<p>You will be driving '.$miles.' miles.</p>';
echo '<p>Your vehicle has an efficiency of '.$efficiency.' Miles per Gallon.</p>';
echo '<p>Your total cost for gas is $'.$totalPriceDollars.' USD.</p>';
echo '</div>';
}// end elseif
    
}//close server request method



?>
</body>
</html>
    