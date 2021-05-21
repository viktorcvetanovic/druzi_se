<?php
include ('crud/DataBase.php');
$post_id=$_POST["post_id"];
$user_id=$_POST["user_id"];
$commentar_value=$_POST["commentar_value"];
if(DataBase::addComment($commentar_value,$user_id,$post_id)==1){
    header('Location: /blog.php');
}