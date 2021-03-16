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
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>"> 
<span class="err"><?php echo $phoneErr   ;?></span>
      

<label>How familiar are you with architectural styles?</label>   
<ul>
<li><input type="radio" name="familiar" value="not" <?php if(isset($_POST['familiar']) && $_POST['familiar'] == 'not') echo 'checked="checked"'  ;?>>Not at all! I'm a newbie!</li>
<li><input type="radio" name="familiar" value="little" <?php if(isset($_POST['familiar']) && $_POST['familiar'] == 'little') echo 'checked="checked"'  ;?>>I'm a little familiar, I know the big ideas.</li>
<li><input type="radio" name="familiar" value="fairly" <?php if(isset($_POST['familiar']) && $_POST['familiar'] == 'fairly') echo 'checked="checked"'  ;?>>I'm fairly familiar, I've read some books and visited some cool places :)</li>
<li><input type="radio" name="familiar" value="very" <?php if(isset($_POST['familiar']) && $_POST['familiar'] == 'very') echo 'checked="checked"'  ;?>>I'm a pro! I'm extremely knowledgable about architecture.</li>
</ul>  
  <span class="err"><?php echo $familiarErr   ;?></span>  

    <label>Which architect would you like to learn more about?</label> 
<select name="arch">
<option value="NULL" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'NULL') echo 'selected="unselected"'  ;?>>20th and 21st Century architects</option> 
<option value="rem" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'rem') echo 'selected="selected"'  ;?>>Rem Koolhaas</option> 
<option value="ettore" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'ettore') echo 'selected="selected"'  ;?>>Ettore Sottsass</option> 
<option value="frank" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'frank') echo 'selected="selected"'  ;?>>Frank Lloyd Wright</option> 
<option value="bernard" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'bernard') echo 'selected="selected"'  ;?>>Bernard Tschumi</option> 
<option value="ludwig" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'ludwig') echo 'selected="selected"'  ;?>>Ludwig Mies van der Rohe</option>
<option value="zaha" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'zaha') echo 'selected="selected"'  ;?>>Zaha Hadid</option>
<option value="le" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'le') echo 'selected="selected"'  ;?>>Le Corbusier</option>
<option value="all" <?php if(isset($_POST['arch']) && $_POST['arch'] == 'all') echo 'selected="selected"'  ;?>>Can't pick! I'm interested in them all!</option>
</select> 
    <span class="err"><?php echo $archErr   ;?></span>

<label>What are some of your favorite architectural movements?</label>   
<ul>
<li><input type="checkbox" name="styles[]" value="classical"  <?php if(isset($_POST['styles']) && in_array('classical', $styles)) echo 'checked="checked"';?>>Classical</li>
<li><input type="checkbox" name="styles[]" value="gothic" <?php if(isset($_POST['styles']) && in_array('gothic', $styles)) echo 'checked="checked"';?>>Gothic</li>
<li><input type="checkbox" name="styles[]" value="brutalist" <?php if(isset($_POST['styles']) && in_array('brutalist', $styles)) echo 'checked="checked"';?>>Brutalist</li>
<li><input type="checkbox" name="styles[]" value="islamic" <?php if(isset($_POST['styles']) && in_array('islamic', $styles)) echo 'checked="checked"';?>>Islamic</li>
<li><input type="checkbox" name="styles[]" value="bauhaus" <?php if(isset($_POST['styles']) && in_array('bauhaus', $styles)) echo 'checked="checked"';?>>Bauhaus</li>
<li><input type="checkbox" name="styles[]" value="victorian" <?php if(isset($_POST['styles']) && in_array('victorian', $styles)) echo 'checked="checked"';?>>Victorian</li>
<li><input type="checkbox" name="styles[]" value="modernist" <?php if(isset($_POST['styles']) && in_array('modernist', $styles)) echo 'checked="checked"';?>>Modernist</li>
</ul> 
<span class="err"><?php echo $stylesErr   ;?></span>



<label>Anything else you'd like to tell us? Cool new building or architect you've learned about? We'd love to hear from you!</label>   
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>  
<span class="err"><?php echo $commentsErr   ;?></span>

    <label>Agree with us ...or else...!!!</label>
<ul>
<li><input type="radio" name="agree" value="agree" <?php if(isset($_POST['agree']) && $_POST['agree'] == 'agree') echo 'checked="checked"'  ;?>>Ok, fine.</li>    
</ul> 
    <span class="err"><?php echo $agreeErr   ;?></span>
    
<input class="btn" type="submit" value="Off it goes!">
    
 <div><a href="" class="btn right">Reset</a></div>   
</fieldset>  
</form>