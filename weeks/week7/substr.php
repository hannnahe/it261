<?php 

//substring functions and string replace

$statement = 'The presidential election is around the corner';
echo $statement; 
echo '<br>';
//when you have 2 numbers, you start counting from 0. It's zero based
echo substr($statement, 0); // shows everything as is
echo '<br>';
echo substr($statement, 0, 5);
echo '<br>';
echo substr($statement, 4, 12);
echo '<br>';
echo substr($statement, -8);
echo '<br>';
echo substr($statement, -11, 5);
echo '<br>';
echo substr($statement, 14);
echo '<br>';

$statement2 = 'This election will be the most important election in my lifetime..';
echo $statement2;
echo '<br>';
echo str_replace('my', 'our', $statement2);   ///call out your two replacements, and the variable after
echo '<br>';
echo '<br>';

//this is an associate array below

$people['Donald_Trump'] = 'trump_Former President from NY.';
$people['Joe_Biden'] = 'biden_President from PA.';
$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
$people['Kamala_Harris'] = 'harri_Vice President from CA.';
$people['Cory_Booker'] = 'booke_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people['Julian_Castro'] = 'castr_Former Housing/Urban from TX.';

?>
<!doctype html>
<html>
<head>
<title>My table of images</title>    
<meta charset="UTF-8">    
</head>
    
<body>
 <h1>Extra credit- add 4th column with a different image</h1>
<table>
<?php  
foreach($people as $name => $image) : ?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo $name ;?>"></td>    
<td><?php echo str_replace('_', ' ', $name) ;?></td>    
<td><?php echo substr($image, 6);?></td>    
</tr>
<?php endforeach; ?>
    
</table>

</body>

</html>