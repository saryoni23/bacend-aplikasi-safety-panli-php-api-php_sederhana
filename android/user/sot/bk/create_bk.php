<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_bk1'];
	$area      =$_POST['area_bk1'];
	$hasil     =$_POST['hasil_bk1'];
	$desk      =$_POST['desk_bk1'];

	$ket2       =$_POST['ket_bk2'];
	$area2      =$_POST['area_bk2'];
	$hasil2     =$_POST['hasil_bk2'];
	$desk2      =$_POST['desk_bk2'];

	$ket3       =$_POST['ket_bk3'];
	$area3      =$_POST['area_bk3'];
	$hasil3     =$_POST['hasil_bk3'];
	$desk3      =$_POST['desk_bk3'];
	
	$ket4       =$_POST['ket_bk4'];
	$area4      =$_POST['area_bk4'];
	$hasil4     =$_POST['hasil_bk4'];
	$desk4      =$_POST['desk_bk4'];
	
	$ket5       =$_POST['ket_bk5'];
	$area5      =$_POST['area_bk5'];
	$hasil5     =$_POST['hasil_bk5'];
	$desk5      =$_POST['desk_bk5'];

	$date      =$_POST['date_bk'];
	$time      =$_POST['time_bk'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi bahan kimia tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_bk (id_bk, ket_bk1, area_bk1, hasil_bk1, desk_bk1, ket_bk2, area_bk2, hasil_bk2, desk_bk2, ket_bk3, area_bk3, hasil_bk3, desk_bk3, ket_bk4, area_bk4, hasil_bk4, desk_bk4, ket_bk5, area_bk5, hasil_bk5, desk_bk5, date_bk, time_bk, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$ket4."', '".$area4."', '".$hasil4."', '".$desk4."','".$ket5."', '".$area5."', '".$hasil5."', '".$desk5."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Bahan Kimia Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Bahan Kimia Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	