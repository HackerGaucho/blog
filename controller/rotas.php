<?php
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
    switch ($controller) {
        case 'signin':
            require '../controller/'.$controller.'/'.$method.'.php';
            break;
        default:
            require '../view/404.php';
            exit();
            break;
    }
}else{
    $title='Hacker Gaucho';
    require '../view/header.php';
    require '../view/home/read.php';
}
