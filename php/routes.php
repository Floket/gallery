<?php

$nameTab = 'NAME RETOUCHER';
$url = $_SERVER['REQUEST_URI'];
// проверка атоиизации
function checkUser($page , $altLink = '' ){
    if(isset($_SESSION['user']['login'])){
        include('php/page/' . $page . '.php');
    }else{
        header('Location:/' . $altLink);
        include ('php/page/index.php');
    }
}


// Маршрутизатор

if(isset($_SESSION['location'])){
    header('Location:'.$_SESSION['location']);
    include ('php/page/index.php');
    unset($_SESSION['location']);
}else{
    switch ($url){
        //Главаня
        case '/':
            include ('php/page/index.php');
            break;

        case '/contact':
            include('php/page/contact.php');

            break;
        //Авторизация
        case '/login':
            if(!isset($_SESSION['user']['login'])){
                include('php/page/login.php');
            }else{
                header('Location:/admin');
            }
            break;
        //Админ панель
        case '/admin':
            checkUser('admin', '');
            break;
        //Создания нового поста
        case '/admin/newpost':
            checkUser('newpost');
            break;

        //Выход с админки
        case '/exit':
            if (isset($_SESSION['user']['login'])){
                session_destroy();
                header('Location:/');
            }
            break;
        default:
            //Редоктирования поста
            if(stristr($url, '/edit_page')){
                checkUser('edit');
            }else{
                include ('php/page/index.php');
            }
    }
}
?>