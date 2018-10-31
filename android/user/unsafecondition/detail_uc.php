<?php 

	$id = $_GET['id_user'];

	include_once "../../../koneksi.php";
	
	$query = "SELECT * FROM tb_unsafecondition WHERE id_user=$id";
	$result = mysqli_query($con,$query);
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($result))
	{
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	mysqli_close($con);
	
?>