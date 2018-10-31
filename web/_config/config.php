<?php
date_default_timezone_set('Asia/jakarta');
session_start();

$con = new mysqli('localhost', 'root', '', 'u442702252_safe1');
if($con->connect_error){
    die('Database Not Connect. Error : ' . $con->connect_error);
}

function base_url($url=null){
    $base_url = "http://localhost/public_html/web";
    if($url != null){
        return $base_url."/".$url;
    }else{
        return $base_url;
    }
}
?>

