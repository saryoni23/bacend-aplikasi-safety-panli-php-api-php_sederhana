<?php  

	include_once "../../../koneksi.php";
	
	class usr{}
	$id = $_POST['id_uc'];
// 	$time = $_POST['time_uc'];
// 	$date = $_POST["date_uc"];
// 	$due_date = $_POST["due_date"];
	$status = $_POST["status_uc"];

	
	if ((empty($status))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Pilih status report anda";
	 	die(json_encode($response));
	 } else {
		
		$query = mysqli_query($con, " UPDATE tb_unsafecondition SET status_uc = '$status' WHERE id_uc = '$id'");
	
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