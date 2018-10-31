<?php  

	include_once "../../../koneksi.php";
	
	class usr{}
	$id = $_POST['id_inc'];
	// $time = $_POST['time_inc'];
	// $date = $_POST["date_inc"];
	$status = $_POST["status_inc"];

	
	if ((empty($status))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Pilih status report anda";
	 	die(json_encode($response));
	 } else {
		
		$query = mysqli_query($con, " UPDATE tb_incident SET status_inc = '$status' WHERE id_inc = '$id'");
	
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