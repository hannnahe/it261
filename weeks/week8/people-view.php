<?php //people-view.php

include('config.php');

if(isset($_GET['id'])){
  $id = (int)$_GET['id']; 
} else {
    header('Location:people.php');
}

$sql = 'SELECT * FROM week8People WHERE week8PeopleId = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or 
die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {

while($row=mysqli_fetch_assoc($result)) {
$firstName = stripslashes($row['firstName']);      
$lastName = stripslashes($row['lastName']);
$email = stripslashes($row['email']);
$occupation = stripslashes($row['occupation']);
$birthDate = stripslashes($row['birthDate']);
$description = stripslashes($row['description']);
$feedback = '';
}  

} else {
$feedback = 'Nobody is home. They are out for drinks!' ;   
}
//lots of php ! all of this information before header, you cannot echo anything. You can echo after header.php
//include('includes/header.php');
?>

<h1>Wahoo! We made it :)</h1>
<h2>You are on the page of <?php echo $firstName;?>!</h2>
<?php 
if($feedback == ''){
  echo '<ul>';
    echo '<li><b>First Name:</b> '.$firstName.'</li>';
    echo '<li><b>Last Name:</b> '.$lastName.'</li>';
    echo '<li><b>Occpuation:</b> '.$occupation.'</li>';
    echo '<li><b>Email:</b> '.$email.'</li>';
    echo '<li><b>Birthdate:</b> '.$birthdate.'</li>';
    echo '</ul>'; 
    echo '<p>'.$description.'</p>';
} else {
    echo $feedback;
}

//release server
mysqli_free_result($result);

//close connection
mysqli_close($iConn);
?>
<!--dont forget you are in html land after the closing php tag!-->