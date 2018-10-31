<?php 

	include_once "../../../koneksi.php";

	$id = $_POST['id_inc']; 

	$getdata = mysqli_query($con,"SELECT * FROM tb_incident WHERE id_inc ='$id'");
	$rows = mysqli_num_rows($getdata);

	$delete = "DELETE FROM tb_incident WHERE id_inc ='$id'";
	$exedelete = mysqli_query($con, $delete);

	$respose = array();

	if($rows > 0) {
		
		if($exedelete) {

			$respose['code'] =1;
			$respose['message'] = "Delete report berhasil";

		} else {

		$respose['code'] =0;
		$respose['message'] = "Delete report gagal";

		}
	} else {

		$respose['code'] =0;
		$respose['message'] = "Delete report gagal, data tidak ditemukan";
	
	}

	echo json_encode($respose);

 ?>