<?php
//https://packagist.org/packages/erusev/parsedown
require 'vendor/autoload.php';
$Parsedown = new Parsedown();
echo $Parsedown->text('Hello _Parsedown_!');
