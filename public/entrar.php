<?php
$title='Hacker Gaucho';
require '../header.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    require '../signinGet.php';
}else{
    require '../signinPost.php';
}
?>
