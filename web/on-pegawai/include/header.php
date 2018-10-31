
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Safety</title>
	<link rel="icon" type="../assets/image/png" href="../assets/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/datepicker3.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i">
    <link rel="stylesheet" type="text/css" href="../assets/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>
<body>
<?php
session_start();
if ( !isset($_SESSION['user_login']) || 
    ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != 'member' ) ) {
}
?>
<?php
include_once 'include/akses.php';
?>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Safety</span>Admin</a>

		</div><!-- /.container-fluid -->
	</nav>
	
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">

				
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?=$_SESSION['nama'];?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
	
		<ul class="nav menu">
			
			<li><a href="index.php"     ><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="sot.php"       ><em class="fa fa-calendar">&nbsp;</em> Sot</a></li>
			
			<li><a href="incident.php"  ><em class="fa fa-bar-chart">&nbsp;</em> Incident</a></li>
            <li><a href="unsafe_condition.php"><em class="fa fa-toggle-off">&nbsp;</em> Unsafe Condition</a></li>
            <li><a href="handbook.php"  ><em class="fa fa-book">&nbsp;</em> Hand Book</a></li> 
			       
			<li><a href="../logout.php" ><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->