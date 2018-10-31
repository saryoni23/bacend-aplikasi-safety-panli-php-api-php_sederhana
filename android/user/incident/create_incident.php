<?php
	include_once "../../../koneksi.php";
	
	class emp{}
	
	$image      = $_POST['image_inc'];
	$time       = $_POST['time_inc'];
	$date       = $_POST['date_inc'];
	$name       = $_POST['name_inc'];
	$gender     = $_POST['gender_inc'];
	$age        = $_POST['age_inc'];
	$area       = $_POST['area_inc'];
	$problem    = $_POST['problem_inc'];
	$root       = $_POST['rootcause_inc'];
	$plan       = $_POST['actionplan_inc'];
	$pic        = $_POST['pic_inc'];
	$status     = $_POST['status_inc'];
	$id_user    = $_POST['id_user'];
	
	
	if (empty($problem)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Description don't empety!"; 
		die(json_encode($response));
	} else if (empty($plan)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Action Plan don't empety!"; 
		die(json_encode($response));
	} else if (empty($image)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Image don't empety!"; 
		die(json_encode($response));
	} else if (empty($gender)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Gender don't empety!"; 
		die(json_encode($response));
	} else {
		$random = random_word(20);
		
		$path = "image/".$random.".png";
		
		// sesuiakan ip address laptop/pc atau URL server
		$actualpath = "http://panlisafety.890m.com/android/user/incident/$path";
		
		$query = mysqli_query($con, "INSERT INTO tb_incident (image_inc, time_inc, date_inc , name_inc, gender_inc, age_inc, area_inc, problem_inc, rootcause_inc, actionplan_inc, pic_inc, status_inc, id_user) VALUES ('$actualpath', '$time', '$date','$name','$gender' ,'$age','$area', '$problem', '$root', '$plan', '$pic', '$status', '$id_user')");
		
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