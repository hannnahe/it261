<?php
//form pt 1
//dont care about the html , body tag, etc... we DO care about the form elements <input> and <label> and <form>
//crucial!! name attribute and VALUE
//undefined errors are undefined variables

if(isset($_POST['name'],
        $_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];
    echo $name;
    echo $email;
    
} else {
   echo '
   <form action="" method= "post"> 
   <label>NAME</label>    
   <input type="text" name="name"><br>
   
   <label>EMAIL</label>    
   <input type="email" name="email">
   <input type="submit" value="let\'s go!"><br>
   <p><a href="">Reset</a></p>
   </form>
   '; 
    
}