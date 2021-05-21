<?php
include_once ('crud/DataBase.php');
include_once ('util/functions.php');
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$user= User::withRow([null,$username,$password,$email]);
if(strlen($username)<4 && strlen($password)<5){
    redirect("http://localhost/signup.php");
    return;
}

if(DataBase::addUser($user)==1){
    header('Location: /login.php');
}else{
    header('Location: /signup.php');
}


