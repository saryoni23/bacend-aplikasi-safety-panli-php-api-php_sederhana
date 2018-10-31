<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Incident.xls");
?>

<!DOCTYPE html>
<html>
<body>
<table border="1" id="coba1">
	<thead>
    <tr>
	    <th class="column1">NO</th>
    	<th class="column1">TIME</th>
    	<th class="column1">DATE</th>
    	<th class="column1">PICTURE</th>
    	<th class="column1">CATEGORY</th>
    	<th class="column1">AREA</th>
    	<th class="column1">DUE DATE</th>
    	<th class="column1">STATUS</th>
    </tr>
    </thead>
	<?php
	//koneksi ke database
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'u442702252_safe1');
    
    /**
     * $dbconnect : koneksi kedatabase
     */
    $dbconnect = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    
    /**
     * Check Error yang terjadi saat koneksi
     * jika terdapat error maka die() // stop dan tampilkan error
     */
    if ($dbconnect->connect_error) {
        die('Database Not Connect. Error : ' . $dbconnect->connect_error);
    }
	//query menampilkan data
    $sql = mysqli_query($dbconnect, "SELECT * from tb_unsafecondition");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_uc'].'</td>
            <td>'.$data['date_uc'].'</td>
            <td><img src='.$data['image_uc'].' height="100px" width="100px;"></td>
            <td>'.$data['category_uc'].'</td>
            <td>'.$data['area_uc'].'</td>
            <td>'.$data['due_date'].'</td>
            <td>'.$data['status_uc'].'</td>
            <td>	 
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='data.php';</script>";
?>
