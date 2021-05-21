<?php
include_once ('config/config.php');
include_once('crud/DataBase.php');
include_once('util/functions.php');
$username = $_POST["username"];
$password = $_POST["password"];
$match = false;
$user = new User();
$result=DataBase::readAllUser();
foreach ($result as $u) {
    if ($u->getUsername()==$username && $u->getPassword()==$password){
        $match=true;
        $user=$u;
    }
}

if($match){
    session_start();
    $id=$user->getId();
    $_SESSION["id"]=$id;
    header('Location: /blog.php');
}else{
    header('Location: /login.php');
}
