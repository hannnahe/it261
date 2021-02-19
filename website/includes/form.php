<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
 <label>First name</label>   
<input type="text" name="firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']);?>">
<span class="err"><?php echo $firstNameErr   ;?></span>
<label>Last name</label>   
<input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']);?>"> 
<span class="err"><?php echo $lastNameErr   ;?></span>
<label>Email</label>   
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
<span class="err"><?php echo $emailErr   ;?></span>
<label>Phone Number</label>   
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx"value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>"> 
<span class="err"><?php echo $phoneErr   ;?></span>
      

<label>Favorite Season</label>   
<ul>
<li><input type="radio" name="season" value="spring" <?php if(isset($_POST['season']) && $_POST['season'] == 'spring') echo 'checked="checked"'  ;?>>Spring</li>
<li><input type="radio" name="season" value="summer" <?php if(isset($_POST['season']) && $_POST['season'] == 'summer') echo 'checked="checked"'  ;?>>Summer</li>
<li><input type="radio" name="season" value="fall" <?php if(isset($_POST['season']) && $_POST['season'] == 'fall') echo 'checked="checked"'  ;?>>Fall</li>
<li><input type="radio" name="season" value="winter" <?php if(isset($_POST['season']) && $_POST['season'] == 'winter') echo 'checked="checked"'  ;?>>Winter</li>
</ul>  
  <span class="err"><?php echo $seasonErr   ;?></span>  
    <label>Where would you most like to live?</label> 
<select name="house">
<option value="NULL" <?php if(isset($_POST['house']) && $_POST['house'] == 'NULL') echo 'selected="unselected"'  ;?>>Many great options to choose from</option> 
<option value="beach" <?php if(isset($_POST['house']) && $_POST['house'] == 'beach') echo 'selected="selected"'  ;?>>On a tropical beach</option> 
<option value="desert" <?php if(isset($_POST['house']) && $_POST['house'] == 'desert') echo 'selected="selected"'  ;?>>In a desert</option> 
<option value="mountain" <?php if(isset($_POST['house']) && $_POST['house'] == 'mountain') echo 'selected="selected"'  ;?>>On top of a mountain</option> 
<option value="forest" <?php if(isset($_POST['house']) && $_POST['house'] == 'forest') echo 'selected="selected"'  ;?>>Deep in the forest</option> 
<option value="paris" <?php if(isset($_POST['house']) && $_POST['house'] == 'paris') echo 'selected="selected"'  ;?>>Loft in Paris</option> 
</select> 
    <span class="err"><?php echo $houseErr   ;?></span>

<label>Pick some favorite colors:</label>   
<ul>
<li><input type="checkbox" name="colors[]" value="red"  <?php if(isset($_POST['colors']) && in_array('red', $colors)) echo 'checked="checked"';?>>Red</li>
<li><input type="checkbox" name="colors[]" value="blue" <?php if(isset($_POST['colors']) && in_array('blue', $colors)) echo 'checked="checked"';?>>Blue</li>
<li><input type="checkbox" name="colors[]" value="green" <?php if(isset($_POST['colors']) && in_array('green', $colors)) echo 'checked="checked"';?>>Green</li>
<li><input type="checkbox" name="colors[]" value="yellow" <?php if(isset($_POST['colors']) && in_array('yellow', $colors)) echo 'checked="checked"';?>>Yellow</li>
<li><input type="checkbox" name="colors[]" value="orange" <?php if(isset($_POST['colors']) && in_array('orange', $colors)) echo 'checked="checked"';?>>Orange</li>
<li><input type="checkbox" name="colors[]" value="purple" <?php if(isset($_POST['colors']) && in_array('purple', $colors)) echo 'checked="checked"';?>>Purple</li>
<li><input type="checkbox" name="colors[]" value="pink" <?php if(isset($_POST['colors']) && in_array('pink', $colors)) echo 'checked="checked"';?>>Pink</li>
</ul> 
<span class="err"><?php echo $colorsErr   ;?></span>



<label>Comments</label>   
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>  
<span class="err"><?php echo $commentsErr   ;?></span>

    <label>Agree with us ...or else...!!!</label>
<ul>
<li><input type="radio" name="agree" value="agree" <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"'  ;?>>Ok, fine.</li>    
</ul> 
    <span class="err"><?php echo $agreeErr   ;?></span>
    
<input type="submit" value="Send it!">
    
 <p><a href="">Reset</a></p>   
</fieldset>  
</form>