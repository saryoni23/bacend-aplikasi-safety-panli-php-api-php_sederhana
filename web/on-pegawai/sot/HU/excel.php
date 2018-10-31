<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DATA HOUSEKEEPING UMUM.xls");
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
        <th>AREA KERJA BERSIH DAN RAPIH</th>
        <th>TAK ADA MINYAK, GEMOK, TUMPAHAN dll. DILANTAI</th>
        <th>RESTROOM/TOILET DAN AREA SEKITAR DALAM KONDISI YANG BERSIH DAN SEHAT</th>
        <th>SAMPAH/SCRAP MATERIAL DIBUANG DAN TIDAK MENUMPUK</th>
        <th>SELANG UDARA/KABEL LISTRIK DIGULUNG DAN DIGANTUNG</th>
        <th>PERALATAN/PERKAKAS TIDAK BERGELETAKAN</th>
        <th>AREA SEKITAR GUDANG E.G. PARIT, AREA BATERAY-CHARGING BERSIH DAN RAPI</th>
        <th>SEMUA FORKLIFTS DAN STACKERS DIPARKIRKAN DIAREA YANG DITENTUKAN</th>
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
            <td>'.$data['time_hp1'].'</td>
            <td>'.$data['date_hp1'].'</td>
            <td>area:'.$data['area_hp1'].'<br>hasil:'.$data['hasil_hp1'].'<br>deskripsi:'.$data['desk_hp1'].'</td>
            <td>area:'.$data['area_hp2'].'<br>hasil:'.$data['hasil_hp2'].'<br>deskripsi:'.$data['desk_hp2'].'</td>
            <td>area:'.$data['area_hp3'].'<br>hasil:'.$data['hasil_hp3'].'<br>deskripsi:'.$data['desk_hp3'].'</td>
            <td>area:'.$data['area_hp4'].'<br>hasil:'.$data['hasil_hp4'].'<br>deskripsi:'.$data['desk_hp4'].'</td>
            <td>area:'.$data['area_hp5'].'<br>hasil:'.$data['hasil_hp5'].'<br>deskripsi:'.$data['desk_hp5'].'</td>
            <td>area:'.$data['area_hp6'].'<br>hasil:'.$data['hasil_hp6'].'<br>deskripsi:'.$data['desk_hp6'].'</td>
            <td>area:'.$data['area_hp7'].'<br>hasil:'.$data['hasil_hp7'].'<br>deskripsi:'.$data['desk_hp7'].'</td>
            <td>area:'.$data['area_hp8'].'<br>hasil:'.$data['hasil_hp8'].'<br>deskripsi:'.$data['desk_hp8'].'</td>            
            <td>	 
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='../data.php';</script>";
?>
