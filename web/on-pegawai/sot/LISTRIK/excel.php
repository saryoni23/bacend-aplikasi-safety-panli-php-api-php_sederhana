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
        <th>NO</th>
        <th>TIME</th>
        <th>DATE</th>
        <th>PANEL LISTRIK DAN DISTRIBUTION BOARDS DITUTUP DENGAN BENAR DAN TAK TERHALANG</th>
        <th>PERALATAN LISTRIK YANG LAYAK (PLUG, KABEL DLL.) DIGUNAKAN</th>
        <th>PENCAHAYAAN DI AREA KERJA MEMADAI</th>
        <th>TANDA BAHAYA TEGANGAN TINGGI DIPAJANG</th>
        <th>PERKAKAS TANGAN BERTENAGA DIPERIKSA DAN DILABEL</th>
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_listrik");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_uc'].'</td>
            <td>'.$data['date_uc'].'</td>
            <td>area:'.$data['area_listrik1'].'<br>hasil:'.$data['hasil_listrik1'].'<br>deskripsi:'.$data['desk_listrik1'].'</td>
            <td>area:'.$data['area_listrik2'].'<br>hasil:'.$data['hasil_listrik2'].'<br>deskripsi:'.$data['desk_listrik2'].'</td>
            <td>area:'.$data['area_listrik3'].'<br>hasil:'.$data['hasil_listrik3'].'<br>deskripsi:'.$data['desk_listrik3'].'</td>
            <td>area:'.$data['area_listrik4'].'<br>hasil:'.$data['hasil_listrik4'].'<br>deskripsi:'.$data['desk_listrik4'].'</td>
            <td>area:'.$data['area_listrik5'].'<br>hasil:'.$data['hasil_listrik5'].'<br>deskripsi:'.$data['desk_listrik5'].'</td>
            
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
