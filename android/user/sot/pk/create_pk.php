<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_pk1'];
	$area      =$_POST['area_pk1'];
	$hasil     =$_POST['hasil_pk1'];
	$desk      =$_POST['desk_pk1'];

	$ket2       =$_POST['ket_pk2'];
	$area2      =$_POST['area_pk2'];
	$hasil2     =$_POST['hasil_pk2'];
	$desk2      =$_POST['desk_pk2'];

	$ket3       =$_POST['ket_pk3'];
	$area3      =$_POST['area_pk3'];
	$hasil3     =$_POST['hasil_pk3'];
	$desk3      =$_POST['desk_pk3'];

	$ket4       =$_POST['ket_pk4'];
	$area4      =$_POST['area_pk4'];
	$hasil4     =$_POST['hasil_pk4'];
	$desk4      =$_POST['desk_pk4'];

	$ket5       =$_POST['ket_pk5'];
	$area5      =$_POST['area_pk5'];
	$hasil5     =$_POST['hasil_pk5'];
	$desk5      =$_POST['desk_pk5'];

	$ket6       =$_POST['ket_pk6'];
	$area6      =$_POST['area_pk6'];
	$hasil6     =$_POST['hasil_pk6'];
	$desk6      =$_POST['desk_pk6'];

	$ket7       =$_POST['ket_pk7'];
	$area7      =$_POST['area_pk7'];
	$hasil7     =$_POST['hasil_pk7'];
	$desk7      =$_POST['desk_pk7'];

	$date      =$_POST['date_pk'];
	$time      =$_POST['time_pk'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi pencegahan kebakaran tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_pk (id_pk, ket_pk1, area_pk1, hasil_pk1, desk_pk1, ket_pk2, area_pk2, hasil_pk2, desk_pk2, ket_pk3, area_pk3, hasil_pk3, desk_pk3, ket_pk4, area_pk4, hasil_pk4, desk_pk4, ket_pk5, area_pk5, hasil_pk5, desk_pk5, ket_pk6, area_pk6, hasil_pk6, desk_pk6, ket_pk7, area_pk7, hasil_pk7, desk_pk7, date_pk, time_pk, id_user) VALUES (0, '".$ket."', '".$area."', '".$hasil."', '".$desk."', '".$ket2."', '".$area2."', '".$hasil2."', '".$desk2."','".$ket3."', '".$area3."', '".$hasil3."', '".$desk3."','".$ket4."', '".$area4."', '".$hasil4."', '".$desk4."','".$ket5."', '".$area5."', '".$hasil5."', '".$desk5."','".$ket6."', '".$area6."', '".$hasil6."', '".$desk6."','".$ket7."', '".$area7."', '".$hasil7."', '".$desk7."','".$date."', '".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Pencegahan Kebakaran Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Pencegahan Kebakaran Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	