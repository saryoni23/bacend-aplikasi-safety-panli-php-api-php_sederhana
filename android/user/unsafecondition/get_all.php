<?php 

	include_once "../../../koneksi.php";

	$page = $_GET['page'];
	$start = 0; 
	$limit = 4; 

	$total = mysqli_num_rows(mysqli_query($con, "SELECT id_uc FROM tb_unsafecondition"));
	
	$page_limit = $total/$limit; 
	
	if($page<=$page_limit){
		
		$start = ($page - 1) * $limit; 

		$sql = "SELECT * FROM tb_unsafecondition INNER JOIN tb_user ON tb_unsafecondition.id_user = tb_user.id_user limit $start, $limit";

		$result = mysqli_query($con, $sql); 
		
		$res = array(); 

		while($row = mysqli_fetch_assoc($result))
    	{
    		$res[] = $row;
    	}

		echo json_encode($res);

	} else {
            echo "over";
    }

    mysqli_close($con);

?>