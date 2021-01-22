<?php 
//heredoc syntax!

$book = 'On Beauty';
$author = 'Zadie Smith';
$genre = 'novel';
$character = 'Belsey\'s' ;
$location = 'Wellington';
$about = 'family and race';


$content = <<<EOT
<p>I recently finished reading <i>$book</i> by $author and it was one of my favorite books I've read in a while. It is a $genre set in $location about a family named the $character.</p> 
<p>It centers on themes of $about and I would <b>highly</b> recommend reading it!</p>

EOT;

echo $content;