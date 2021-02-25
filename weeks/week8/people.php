<?php   

include('config.php');
//for website folder add include('includes/header.php');

//we need to connect to the DB!

$sql = 'SELECT * FROM week8People';//tablename

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or 
die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {
 
    //run a whileloop showing row array 
    
while($row=mysqli_fetch_assoc($result)) {
   //this array is going to display the contents of your row 
echo '<ul>';
echo '<li>For more information about   <a href="people-view.php?=id='.$row['week8PeopleId'].' ">'.$row['firstName'].'</a></li>';    
echo '<li><b>First Name:</b> '.$row['firstName'].'</li>'; 
echo '<li><b>Last Name:</b> '.$row['lastName'].'</li>'; 
echo '<li><b>Occupation:</b> '.$row['occupation'].'</li>'; 
echo '</ul>';



}//end while loop   
    
} else { //if mysqli num rows


echo 'Nobody home';

}  //close else

//release server
mysqli_free_result($result);

//close connection
mysqli_close($iConn);