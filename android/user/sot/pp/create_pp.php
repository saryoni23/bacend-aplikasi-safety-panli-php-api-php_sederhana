<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_pp1'];
	$area      =$_POST['area_pp1'];
	$hasil     =$_POST['hasil_pp1'];
	$desk      =$_POST['desk_pp1'];

	$ket2       =$_POST['ket_pp2'];
	$area2      =$_POST['area_pp2'];
	$hasil2     =$_POST['hasil_pp2'];
	$desk2      =$_POST['desk_pp2'];

	$ket3       =$_POST['ket_pp3'];
	$area3      =$_POST['area_pp3'];
	$hasil3     =$_POST['hasil_pp3'];
	$desk3      =$_POST['desk_pp3'];

	$date      =$_POST['date_pp'];
	$time      =$_POST['time_pp'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pertolongan pertama tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_pp (id_pp, ket_pp1, area_pp1, hasil_pp1, desk_pp1, ket_pp2, area_pp2, hasil_pp2, desk_pp2, ket_pp3, area_pp3, hasil_pp3, desk_pp3, date_pp, time_pp, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Pertolongan Pertama Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Pertolongan Pertama Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	