<?php include('config.php');
include('includes/header.php');

$cities['Buenos_Aires'] = 'bueno_A huge cultural city in Argentina, and one of the biggest cities in South America.';
$cities['Marrakesh'] = 'marra_A former imperial city in Morocco; it\'s full of mosques, palaces, gardens, and a medina full of souks.';
$cities['Rio_De_Janiero'] = 'riode_A seaside city in Brazil, full of beautiful beaches and mountains. Also known for it\'s Carneval celebrations.';
$cities['Istanbul'] = 'istan_A city in Turkey who\'s old city dates back to the Byzantine empire.';
$cities['New_York'] = 'newyo_Biggest city in the United States, comprised of five boroughs.';
$cities['Mexico_City'] = 'mexic_The capital of Mexico, and the biggest city in North America. This is the site of the ancient Aztec cities.';
$cities['Paris'] = 'franc_This is a food and wine capital in Europe. A beautiful city with great food and art!';
$cities['Amsterdam'] = 'amste_This city is the Netherland\'s capital. It\'s known for its canals and numerous bike paths.';
?>   



<div id="wrapper" class="gallery">
<h1>Cool Cities Worldwide</h1>
<div>
    
<table>
<?php  
foreach($cities as $name => $image): ?>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo $name ;?>"></td>    
<td><?php echo str_replace('_', ' ', $name) ;?></td>    
<td><?php echo substr($image, 6);?></td>    
</tr>
<?php endforeach; ?>
    
</table>    
    
</div>


    
    
<aside> 
    <!--maybe add something here?-->
</aside>



<?php include('includes/footer.php'); ?>       
