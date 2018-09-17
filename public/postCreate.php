<?php
$title='Criar novo post';
require '../header.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    require '../view/post/create.php';
}else{
    require '../controller/post/create.php';
}
?>
