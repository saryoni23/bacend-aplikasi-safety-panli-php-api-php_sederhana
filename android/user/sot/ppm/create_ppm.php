<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_ppm1'];
	$area      =$_POST['area_ppm1'];
	$hasil     =$_POST['hasil_ppm1'];
	$desk      =$_POST['desk_ppm1'];

	$ket2       =$_POST['ket_ppm2'];
	$area2      =$_POST['area_ppm2'];
	$hasil2     =$_POST['hasil_ppm2'];
	$desk2      =$_POST['desk_ppm2'];

	$ket3       =$_POST['ket_ppm3'];
	$area3      =$_POST['area_ppm3'];
	$hasil3     =$_POST['hasil_ppm3'];
	$desk3      =$_POST['desk_ppm3'];
	
	$ket4       =$_POST['ket_ppm4'];
	$area4      =$_POST['area_ppm4'];
	$hasil4     =$_POST['hasil_ppm4'];
	$desk4      =$_POST['desk_ppm4'];
	
	$ket5       =$_POST['ket_ppm5'];
	$area5      =$_POST['area_ppm5'];
	$hasil5     =$_POST['hasil_ppm5'];
	$desk5      =$_POST['desk_ppm5'];
	
	$ket6       =$_POST['ket_ppm6'];
	$area6      =$_POST['area_ppm6'];
	$hasil6     =$_POST['hasil_ppm6'];
	$desk6      =$_POST['desk_ppm6'];

	$date      =$_POST['date_ppm'];
	$time      =$_POST['time_ppm'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi penanganan dan penyimpanan material tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_ppm (id_ppm, ket_ppm1, area_ppm1, hasil_ppm1, desk_ppm1, ket_ppm2, area_ppm2, hasil_ppm2, desk_ppm2, ket_ppm3, area_ppm3, hasil_ppm3, desk_ppm3, ket_ppm4, area_ppm4, hasil_ppm4, desk_ppm4, ket_ppm5, area_ppm5, hasil_ppm5, desk_ppm5, ket_ppm6, area_ppm6, hasil_ppm6, desk_ppm6, date_ppm, time_ppm, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$ket4."', '".$area4."', '".$hasil4."', '".$desk4."','".$ket5."', '".$area5."', '".$hasil5."', '".$desk5."','".$ket6."', '".$area6."', '".$hasil6."', '".$desk6."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Penanganan dan Penyimpanan Material Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Penanganan dan Penyimpanan Material Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	