<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_apd1'];
	$area      =$_POST['area_apd1'];
	$hasil     =$_POST['hasil_apd1'];
	$desk      =$_POST['desk_apd1'];

	$ket2       =$_POST['ket_apd2'];
	$area2      =$_POST['area_apd2'];
	$hasil2     =$_POST['hasil_apd2'];
	$desk2      =$_POST['desk_apd2'];

	$ket3       =$_POST['ket_apd3'];
	$area3      =$_POST['area_apd3'];
	$hasil3     =$_POST['hasil_apd3'];
	$desk3      =$_POST['desk_apd3'];

	$date      =$_POST['date_apd'];
	$time      =$_POST['time_apd'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi alat pelindung diri tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_apd (id_apd, ket_apd1, area_apd1, hasil_apd1, desk_apd1, ket_apd2, area_apd2, hasil_apd2, desk_apd2, ket_apd3, area_apd3, hasil_apd3, desk_apd3, date_apd, time_apd, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Alat Pelindung Diri Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Alat Pelindung Diri Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	