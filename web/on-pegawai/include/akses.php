<?php
    ob_start();
    if(!isset($_SESSION['level'])) header("location: ../../index.php");
?>