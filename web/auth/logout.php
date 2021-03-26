<?php
require_once "../_config/config.php";

session_start();
session_destroy();
header("location: ".base_url('../')."");

