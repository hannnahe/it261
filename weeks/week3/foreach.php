    <?php
    //foreach loop

    $show = array(
    'Name' => 'Handmaid\'s Tale',
    'Actor' => 'Elizabeth Moss',
    'Genre' => 'Drama',
    'Author' => 'Margaret Atwood'
    );

    //name is the key, and handmaids tale is the value

    foreach($show as $key => $value) {
       echo '<b>'.$key.':</b> '.$value.' <br>' ; 
    }



    //another way to write array below     key  => value

$nav = [ 'index.php' => 'Home',
      
       ];




//another way to write an array below
    $nav['index.php'] = 'Home';
    $nav['about.php'] = 'About';
    $nav['daily.php'] = 'Daily';
    $nav['gallery.php'] = 'Gallery';
    $nav['contact.php'] = 'Contact';
    ?>

    <!doctype html>
    <html lang="en">
    <head>
        <title> For Each Loop</title>
        <meta charset="UTF-8">
        </head>
        <body>
    <ul>

    <?php
    foreach($nav as $key => $value) {
        echo '<li><a href=" '.$key.'   ">  '.$value.'   </a></li>';
    }

    ?>
    </ul>
    </body>
    </html>