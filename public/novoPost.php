<?php
$title='Criar novo post';
require '../header.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    require '../novoPostGet.php';
}else{
    require '../novoPostPost.php';
}
?>
