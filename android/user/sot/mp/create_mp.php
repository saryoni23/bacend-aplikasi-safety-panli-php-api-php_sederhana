<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_mp1'];
	$area      =$_POST['area_mp1'];
	$hasil     =$_POST['hasil_mp1'];
	$desk      =$_POST['desk_mp1'];

	$ket2       =$_POST['ket_mp2'];
	$area2      =$_POST['area_mp2'];
	$hasil2     =$_POST['hasil_mp2'];
	$desk2      =$_POST['desk_mp2'];

	$ket3       =$_POST['ket_mp3'];
	$area3      =$_POST['area_mp3'];
	$hasil3     =$_POST['hasil_mp3'];
	$desk3      =$_POST['desk_mp3'];
	
	$ket4       =$_POST['ket_mp4'];
	$area4      =$_POST['area_mp4'];
	$hasil4     =$_POST['hasil_mp4'];
	$desk4      =$_POST['desk_mp4'];
	
	$ket5       =$_POST['ket_mp5'];
	$area5      =$_POST['area_mp5'];
	$hasil5     =$_POST['hasil_mp5'];
	$desk5      =$_POST['desk_mp5'];
	
	$ket6       =$_POST['ket_mp6'];
	$area6      =$_POST['area_mp6'];
	$hasil6     =$_POST['hasil_mp6'];
	$desk6      =$_POST['desk_mp6'];

	$date      =$_POST['date_mp'];
	$time      =$_POST['time_mp'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi mesin dan peralatan tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_mp (id_mp, ket_mp1, area_mp1, hasil_mp1, desk_mp1, ket_mp2, area_mp2, hasil_mp2, desk_mp2, ket_mp3, area_mp3, hasil_mp3, desk_mp3, ket_mp4, area_mp4, hasil_mp4, desk_mp4, ket_mp5, area_mp5, hasil_mp5, desk_mp5, ket_mp6, area_mp6, hasil_mp6, desk_mp6, date_mp, time_mp, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$ket4."', '".$area4."', '".$hasil4."', '".$desk4."','".$ket5."', '".$area5."', '".$hasil5."', '".$desk5."','".$ket6."', '".$area6."', '".$hasil6."', '".$desk6."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Mesin dan Peralatan Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Mesin dan Peralatan Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	