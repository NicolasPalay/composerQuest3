<?php
require 'vendor/autoload.php';
use CowSay\Cow;


// store the output in a variable
$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');


// or just echo the object for direct output
echo $bessie;