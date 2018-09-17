<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$str=$_SERVER["REQUEST_URI"];
$arr=explode('?',$str);
$arr=explode('/',$arr[0]);
$arr=array_filter($arr);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $method='post';
}else{
    $method='get';
}
if(isset($arr[1])){
    $controller=$arr[1];
    $rotas=[
        'feed',
        'post'
    ];
    $filename='../controller/'.$controller.'/'.$method.'.php';
    if(in_array($controller,$rotas) && file_exists($filename)){
        require $filename;
    }else{
        header('HTTP/1.0 404 Not Found');
        $title='Página não encontrada';
        require '../view/header.php';
        require '../view/404.php';
        exit();
    }
}else{
    $title='Hacker Gaucho';
    require '../view/header.php';
    require '../view/home/read.php';
}
