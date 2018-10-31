<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DATA PENANGANAN & PENYIMPANAN MATERIAL.xls");
?>

<!DOCTYPE html>
<html>
<body>
<table border="1" id="coba1">
	<thead>
    <tr>
        <th>NO</th>
        <th>TIME</th>
        <th>DATE</th>
        <th>MATERIAL DISUSUN DENGAN RAPI DAN CARA AMAN</th>
        <th>OPERATOR MENGANGKAT MATERIAL DENGAN CARA YANG AMAN DAN BENAR</th>
        <th>FORKLIFT / STACKER / PALLET JACK DALAM KONDISI YANG BAGUS? (REM, RODA, KLAKSON, PEMELIHARAAN, SWL)</th>
        <th>FORKLIFT / STACKER / PALLET TRUCK DIKEMUDIKAN OLEH ORANG TERLATIH DAN DENGAN CARA YANG AMAN</th>
        <th>RACKING TIDAK RUSAK</th>
        <th>PALLET DALAM KONDISI YANG BAGUS</th>
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
            <td>'.$data['time_ppm'].'</td>
            <td>'.$data['date_ppm'].'</td>
            <td>area:'.$data['area_ppm1'].'<br>hasil:'.$data['hasil_ppm1'].'<br>deskripsi:'.$data['desk_ppm1'].'</td>
            <td>area:'.$data['area_ppm2'].'<br>hasil:'.$data['hasil_ppm2'].'<br>deskripsi:'.$data['desk_ppm2'].'</td>
            <td>area:'.$data['area_ppm3'].'<br>hasil:'.$data['hasil_ppm3'].'<br>deskripsi:'.$data['desk_ppm3'].'</td>
            <td>area:'.$data['area_ppm4'].'<br>hasil:'.$data['hasil_ppm4'].'<br>deskripsi:'.$data['desk_ppm4'].'</td>
            <td>area:'.$data['area_ppm5'].'<br>hasil:'.$data['hasil_ppm5'].'<br>deskripsi:'.$data['desk_ppm5'].'</td>
            <td>area:'.$data['area_ppm6'].'<br>hasil:'.$data['hasil_ppm6'].'<br>deskripsi:'.$data['desk_ppm6'].'</td>	 
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='../data.php';</script>";
?>
