<?php
require_once "web/_config/config.php";

if (isset($_SESSION['nama'])){
    echo "<script>windows.location='".base_url()."';</script>";
} else{
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login User Safety</title>
    <link href="<?=base_url('_assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('_assets/css/simple-sidebar.css')?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('_assets/panli.png')?>">
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <center>
                <div align="center" style="margin-top: 210px">              
                <?php
                /* handle error */
                if (isset($_GET['error'])) : ?>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
                    </div>
                    <img src=../_assets/img/logo_panli.png height="100%" width="100%;">
                <?php endif;?>
                    <form action="web/auth/chek_login.php" method="post" class="navbar-form" >
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" name="user" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="input-group">
                            <input type="submit" name=  "login"  class="btn btn-primary" value="LOGIN" />      
                        </div>
                    </form>
                </div>
            </center>
        </div>
    </div>
<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
<script src="<?=base_url('_assets/js/bootstrap.js')?>"></script>
</body>

</html>
<?php
}
?>
