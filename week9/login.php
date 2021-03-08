<?php
//login page will point to server.php page, small form only containing username and password, submit
//if everything is correct, you are sent to index.php page!

include('server.php');
//include('includes/header.php');

?>

<h1>Login!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<label>Username</label> 
    <input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo htmlspecialchars($_POST['UserName']) ;?>">
    <label>Password:</label>
    <input type="password" name="Password">
    <?php include('includes/errors.php');?>
    
    <button type="submit" class="btn" name="login_user">Login</button>
    
    <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'">Reset</button>

</fieldset>
</form>

<p class="center">Haven't registered? <a href="register.php">Register here!</a></p>