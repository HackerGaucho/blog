<?php
$title='Hacker Gaucho';
require '../view/header.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    require '../view/signin/read.php';
}else{
    require '../view/signin/create.php';
}
?>
