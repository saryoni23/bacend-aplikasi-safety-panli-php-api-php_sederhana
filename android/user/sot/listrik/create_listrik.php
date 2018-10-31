<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_listrik1'];
	$area      =$_POST['area_listrik1'];
	$hasil     =$_POST['hasil_listrik1'];
	$desk      =$_POST['desk_listrik1'];

	$ket2       =$_POST['ket_listrik2'];
	$area2      =$_POST['area_listrik2'];
	$hasil2     =$_POST['hasil_listrik2'];
	$desk2      =$_POST['desk_listrik2'];

	$ket3       =$_POST['ket_listrik3'];
	$area3      =$_POST['area_listrik3'];
	$hasil3     =$_POST['hasil_listrik3'];
	$desk3      =$_POST['desk_listrik3'];
	
	$ket4       =$_POST['ket_listrik4'];
	$area4      =$_POST['area_listrik4'];
	$hasil4     =$_POST['hasil_listrik4'];
	$desk4      =$_POST['desk_listrik4'];
	
	$ket5       =$_POST['ket_listrik5'];
	$area5      =$_POST['area_listrik5'];
	$hasil5     =$_POST['hasil_listrik5'];
	$desk5      =$_POST['desk_listrik5'];

	$date      =$_POST['date_listrik'];
	$time      =$_POST['time_listrik'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi listrik tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_listrik (id_listrik, ket_listrik1, area_listrik1, hasil_listrik1, desk_listrik1, ket_listrik2, area_listrik2, hasil_listrik2, desk_listrik2, ket_listrik3, area_listrik3, hasil_listrik3, desk_listrik3, ket_listrik4, area_listrik4, hasil_listrik4, desk_listrik4, ket_listrik5, area_listrik5, hasil_listrik5, desk_listrik5, date_listrik, time_listrik, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$ket4."', '".$area4."', '".$hasil4."', '".$desk4."','".$ket5."', '".$area5."', '".$hasil5."', '".$desk5."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Listrik Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Listrik Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	