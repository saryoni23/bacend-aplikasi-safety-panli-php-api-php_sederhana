<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_hp1'];
	$area      =$_POST['area_hp1'];
	$hasil     =$_POST['hasil_hp1'];
	$desk      =$_POST['desk_hp1'];

	$ket2       =$_POST['ket_hp2'];
	$area2      =$_POST['area_hp2'];
	$hasil2     =$_POST['hasil_hp2'];
	$desk2      =$_POST['desk_hp2'];

	$ket3       =$_POST['ket_hp3'];
	$area3      =$_POST['area_hp3'];
	$hasil3     =$_POST['hasil_hp3'];
	$desk3      =$_POST['desk_hp3'];

	$ket4       =$_POST['ket_hp4'];
	$area4      =$_POST['area_hp4'];
	$hasil4     =$_POST['hasil_hp4'];
	$desk4      =$_POST['desk_hp4'];

	$ket5       =$_POST['ket_hp5'];
	$area5      =$_POST['area_hp5'];
	$hasil5     =$_POST['hasil_hp5'];
	$desk5      =$_POST['desk_hp5'];

	$ket6       =$_POST['ket_hp6'];
	$area6      =$_POST['area_hp6'];
	$hasil6     =$_POST['hasil_hp6'];
	$desk6      =$_POST['desk_hp6'];

	$ket7       =$_POST['ket_hp7'];
	$area7      =$_POST['area_hp7'];
	$hasil7     =$_POST['hasil_hp7'];
	$desk7      =$_POST['desk_hp7'];

	$ket8       =$_POST['ket_hp8'];
	$area8      =$_POST['area_hp8'];
	$hasil8     =$_POST['hasil_hp8'];
	$desk8      =$_POST['desk_hp8'];

	$date      =$_POST['date_hp1'];
	$time      =$_POST['time_hp1'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi housekeeping tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_hp (id_hp1, ket_hp1, area_hp1, hasil_hp1, desk_hp1, ket_hp2, area_hp2, hasil_hp2, desk_hp2, ket_hp3, area_hp3, hasil_hp3, desk_hp3, ket_hp4, area_hp4, hasil_hp4, desk_hp4, ket_hp5, area_hp5, hasil_hp5, desk_hp5, ket_hp6, area_hp6, hasil_hp6, desk_hp6, ket_hp7, area_hp7, hasil_hp7, desk_hp7, ket_hp8, area_hp8, hasil_hp8, desk_hp8, date_hp1, time_hp1, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$ket4."', '".$area4."', '".$hasil4."', '".$desk4."','".$ket5."', '".$area5."', '".$hasil5."', '".$desk5."','".$ket6."', '".$area6."', '".$hasil6."', '".$desk6."','".$ket7."', '".$area7."', '".$hasil7."', '".$desk7."','".$ket8."', '".$area8."', '".$hasil8."', '".$desk8."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report HouseKeeping Umum Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report HouseKeeping Umum Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	