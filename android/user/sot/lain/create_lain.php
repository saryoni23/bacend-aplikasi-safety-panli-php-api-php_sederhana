<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_lain1'];
	$area      =$_POST['area_lain1'];
	$hasil     =$_POST['hasil_lain1'];
	$desk      =$_POST['desk_lain1'];

	$ket2       =$_POST['ket_lain2'];
	$area2      =$_POST['area_lain2'];
	$hasil2     =$_POST['hasil_lain2'];
	$desk2      =$_POST['desk_lain2'];

	$ket3       =$_POST['ket_lain3'];
	$area3      =$_POST['area_lain3'];
	$hasil3     =$_POST['hasil_lain3'];
	$desk3      =$_POST['desk_lain3'];

	$date      =$_POST['date_lain'];
	$time      =$_POST['time_lain'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi lain-lain tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_lain (id_lain, ket_lain1, area_lain1, hasil_lain1, desk_lain1, ket_lain2, area_lain2, hasil_lain2, desk_lain2, ket_lain3, area_lain3, hasil_lain3, desk_lain3, date_lain, time_lain, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Lain-Lain Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Lain-Lain Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	