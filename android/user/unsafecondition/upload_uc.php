<?php
	include_once "../../../koneksi.php";
	
	class emp{}
	
	$image = $_POST['image_uc'];
	$time = $_POST['time_uc'];
	$date = $_POST['date_uc'];
	$category = $_POST['category_uc'];
	$level = $_POST['level_danger'];
	$area = $_POST['area_uc'];
	$problem = $_POST['problem_uc'];
	$due_date = $_POST['due_date'];
	$status = $_POST['status_uc'];
	$id_user = $_POST['id_user'];
	
	if (empty($problem)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Description don't empety!"; 
		die(json_encode($response));
	} else if (empty($due_date)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Due date don't empety!"; 
		die(json_encode($response));
	} else {
		$random = random_word(20);
		
		$path = "image/".$random.".png";
		
		// sesuiakan ip address laptop/pc atau URL server
		$actualpath = "http://panlisafety.890m.com/android/user/unsafecondition/$path";
		
		$query = mysqli_query($con, "INSERT INTO tb_unsafecondition (image_uc, time_uc, date_uc , category_uc, level_danger, area_uc, problem_uc, due_date, status_uc, id_user) VALUES ('$actualpath', '$time', '$date','$category','$level' ,'$area','$problem', '$due_date', '$status','$id_user')");
		
		if ($query){
			file_put_contents($path,base64_decode($image));
			
			$response = new emp();
			$response->success = 1;
			$response->message = "Successfully Uploaded";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error Upload image";
			die(json_encode($response)); 
		}
	}	
	
	// fungsi random string pada gambar untuk menghindari nama file yang sama
	function random_word($id = 20){
		$pool = '1234567890abcdefghijkmnpqrstuvwxyz';
		
		$word = '';
		for ($i = 0; $i < $id; $i++){
			$word .= substr($pool, mt_rand(0, strlen($pool) -1), 1);
		}
		return $word; 
	}
	mysqli_close($con);
	
?>	