
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<!-- title will change on all of the pages; make title dynamic-->
<title><?php echo $title;     ?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>


<body class="<?php  echo $body; ?>">
<header>
<div class="inner-header">
<a href="../index.php"><img id="logo" src="../images/logo.png" alt="logo"></a>
<nav>
<ul>
<?php echo makeLinks($nav); ?>
 </ul> 


</nav>   

</div>
</header>