<?php

	 include_once "../koneksi.php";

	 class usr{}

	 $nama      = $_POST["nama"];
	 $email     = $_POST["email"];
	 $nohp      = $_POST["nohp"];
	 $alamat    = $_POST["alamat"];
	 $username  = $_POST["username"];
	 $gender    = $_POST["gender"];
	 $password  = $_POST ["password"];
	 $password1 = md5($_POST ["password"]);
	 $confirm_password = $_POST["confirm_password"];

	 if ((empty($nama))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Nama tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($email))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Email tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($nohp))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Nomor Hp tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($alamat))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Alamat tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($username))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom username tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($gender))) {
	    $response = new usr();
	 	$response->success = 0;
	 	$response->message = "Pilih jenis kelamin anda";
	 	die(json_encode($response));
	 } else if ((empty($password))) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Kolom password tidak boleh kosong";
	 	die(json_encode($response));
	 } else if ((empty($confirm_password)) || $password != $confirm_password) {
	 	$response = new usr();
	 	$response->success = 0;
	 	$response->message = "Konfirmasi password tidak sama";
	 	die(json_encode($response));
	 } else {
		 if (!empty($username) && $password == $confirm_password){
		 	$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_user WHERE username='".$username."'"));

		 	if ($num_rows == 0){
		 		$query = mysqli_query($con, "INSERT INTO tb_user (id_user, nama, email, nohp, alamat, username, gender, password, foto, confirmed) VALUES(0, '".$nama."', '".$email."', '".$nohp."', '".$alamat."', '".$username."', '".$gender."','".$password."','http://panlisafety.890m.com/user/profile/', 'Active')");


		 		if ($query){
		 			$response = new usr();
		 			$response->success = 1;
		 			$response->message = "Register berhasil, silahkan login.";
		 			die(json_encode($response));

		 		} else {
		 			$response = new usr();
		 			$response->success = 0;
		 			$response->message = "Register gagal";
		 			die(json_encode($response));
		 		}
		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Username sudah ada";
		 		die(json_encode($response));
		 	}
		 }
	 }

	 mysqli_close($con);

?>	