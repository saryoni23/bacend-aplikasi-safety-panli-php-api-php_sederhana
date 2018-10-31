<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DATA PENCEGAHAN KEBAKARAN.xls");
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
        <th>PINTU KEBAKARAN DAPAT DIBUKA DENGAN MUDAH DAN TANDA EXIT MENYALA</th>
        <th>PINTU KEBAKARAN DAN ALAT PEMADAM KEBAKARAN TIDAK TERHALANG</th>
        <th>ALAT PEMADAM KEBAKARAN DALAM LOKASI YANG BENAR DAN DALAM KONDISI YANG BAGUS</th>
        <th>SYSTEM SPRINKLER (HEADS AND VALVES) / HOSE REEL DALAM KONDISI BAGUS</th>
        <th>PANEL ALARM KEBAKARAN DALAM KONDISI BAGUS</th>
        <th>AREA “DILARANG MEROKOK” DIPATUHI</th>
        <th>AREA SEKITAR GUDANG E.G. PARIT, AREA BATERAY-CHARGING BERSIH DAN RAPI</th>
        <th>MATERIAL MUDAH TERBAKAR DISIMPAN DAN DITANGANI DENGAN BENAR</th>
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_hp");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_uc'].'</td>
            <td>'.$data['date_uc'].'</td>
            <td>area:'.$data['area_pk1'].'<br>hasil:'.$data['hasil_pk1'].'<br>deskripsi:'.$data['desk_pk1'].'</td>
            <td>area:'.$data['area_pk2'].'<br>hasil:'.$data['hasil_pk2'].'<br>deskripsi:'.$data['desk_pk2'].'</td>
            <td>area:'.$data['area_pk3'].'<br>hasil:'.$data['hasil_pk3'].'<br>deskripsi:'.$data['desk_pk3'].'</td>
            <td>area:'.$data['area_pk4'].'<br>hasil:'.$data['hasil_pk4'].'<br>deskripsi:'.$data['desk_pk4'].'</td>
            <td>area:'.$data['area_pk5'].'<br>hasil:'.$data['hasil_pk5'].'<br>deskripsi:'.$data['desk_pk5'].'</td>
            <td>area:'.$data['area_pk6'].'<br>hasil:'.$data['hasil_pk6'].'<br>deskripsi:'.$data['desk_pk6'].'</td>
            <td>area:'.$data['area_pk7'].'<br>hasil:'.$data['hasil_pk7'].'<br>deskripsi:'.$data['desk_pk7'].'</td>
            <td>area:'.$data['area_pk8'].'<br>hasil:'.$data['hasil_pk8'].'<br>deskripsi:'.$data['desk_pk8'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='../data.php';</script>";
?>
