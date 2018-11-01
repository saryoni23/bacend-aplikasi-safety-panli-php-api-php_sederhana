<?php
require_once "../../_config/config.php";

if (!isset($_SESSION['nama'])){
    header("location: ".base_url()."");
} else{
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" type="" href="../../_assets/img/logo_panli.png">
    <title>Admin Safety</title>
    <link href="<?=base_url('_assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/font-awesome.css')?>" rel="stylesheet" />
</head>
<body>
        <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Safety</span>Admin</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?=base_url('on-Pegawai')?>">Dashboard</a></li>
                            <li><a href="<?=base_url('on-Pegawai/sot')?>">SOT</a></li>
                            <li><a href="<?=base_url('on-Pegawai/incident')?>">Incident</a></li>
                            <li><a href="<?=base_url('on-Pegawai/uc')?>">Unsafe Condition</a></li>
                            <li><a href="<?=base_url('on-Pegawai/handbook')?>">Hand Book</a></li>
                            <li><a href="<?=base_url('auth/logout.php')?>">Logout</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
   
   

<?php
}
?>
