<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['people.php'] = 'People';
$nav ['contact.php'] = 'Contact';
$nav ['gallery.php'] = 'Gallery';

switch(THIS_PAGE) {
case 'index.php'  : 
$title = 'Home page of Website Project';
$body= 'home';
    break;

    case 'about.php'  : 
$title = 'About page of Website Project';
$body= 'about';
    break;

    case 'daily.php'  : 
$title = 'Daily page of Website Project';
$body= 'daily';
    break;

    case 'people.php'  : 
$title = 'People page of Website Project';
$body= 'people';
    break;

    case 'contact.php'  : 
$title = 'Contact Page of Website Project';
$body= 'contact';
    break;

    case 'gallery.php'  : 
$title = 'Gallery page of Website Project';
$body= 'gallery';
    break;
}