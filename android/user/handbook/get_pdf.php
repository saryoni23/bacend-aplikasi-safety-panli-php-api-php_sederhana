<?php 

	include_once "../../../koneksi.php";
	
	$query = "SELECT * FROM tb_handbook ORDER BY name ASC";
	$result = mysqli_query($con, $query);
	$rows = mysqli_num_rows($result);
	
	$json = array();
	
	if ($rows > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
		$json[] = $row;
	    }
	} else {
	    $json[] = "Data Tidak Ditemukan";
	}
	
	echo json_encode($json);
	
	mysqli_close($con);
	
?>