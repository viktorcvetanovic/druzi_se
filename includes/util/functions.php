<?php
function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}