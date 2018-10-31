<?php  

	include_once "../../../../koneksi.php";
	
	class usr{}
	$id = $_POST['id_hp'];
	$area = $_POST['area_hp'];
	$hasil = $_POST["hasil_hp"];
	$ket = $_POST["keterangan_hp"];
// 	$id1 = $_POST['id_ppm'];
// 	$area1 = $_POST['area_ppm'];
// 	$hasil1 = $_POST["hasil_ppm"];
// 	$ket1 = $_POST["ket_ppm"];

	
	if ((empty($hasil))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Pilih status report anda";
	 	die(json_encode($response));
	 } else {
		
		$query = mysqli_query($con, " UPDATE tb_hp SET area_hp = '$area', hasil_hp = '$hasil', keterangan_hp = '$ket' WHERE id_hp = '$id'");
	
		if ($query){
			$response = new usr();
			$response->success = 1;
			$response->message = "Update report berhasil";
			die(json_encode($response));
		} else{ 
			$response = new usr();
			$response->success = 0;
			$response->message = "Update report gagal";
			die(json_encode($response)); 
		}
	
	}	

	mysqli_close($con);
	
?>