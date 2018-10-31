<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DATA MESIN & PERALATAN.xls");
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
        <th>MESIN DAN PERALATAN KETIKA DITINGGALKAN KONDISI MATI</th>
        <th>MESIN DAN PERALATAN DALAM KEADAAN BERSIH DAN DALAM KONDISI YANG BAGUS</th>
        <th>PELINDUNG PADA MESIN DALAM LOKASI YANG TEPAT DAN DALAM KONDISI YANG BAGUS</th>
        <th>TANDA PERINGATAN DIPAJANG KETIKA MESIN DAN PERALATAN SEDANG DALAM PERBAIKAN</th>
        <th>TOMBOL STOP DARURAT DALAM KONDISI BAGUS</th>
        <th>LOCKOUT / TAG OUT DIGUNAKAN UNTUK REPAIR/SERVIS</th>    
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_mp");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_mp'].'</td>
            <td>'.$data['date_mp'].'</td>
            <td>area:'.$data['area_mp1'].'<br>hasil:'.$data['hasil_mp1'].'<br>deskripsi:'.$data['desk_mp1'].'</td>
            <td>area:'.$data['area_mp2'].'<br>hasil:'.$data['hasil_mp2'].'<br>deskripsi:'.$data['desk_mp2'].'</td>
            <td>area:'.$data['area_mp3'].'<br>hasil:'.$data['hasil_mp3'].'<br>deskripsi:'.$data['desk_mp3'].'</td>
            <td>area:'.$data['area_mp4'].'<br>hasil:'.$data['hasil_mp4'].'<br>deskripsi:'.$data['desk_mp4'].'</td>
            <td>area:'.$data['area_mp5'].'<br>hasil:'.$data['hasil_mp5'].'<br>deskripsi:'.$data['desk_mp5'].'</td>
            <td>area:'.$data['area_mp6'].'<br>hasil:'.$data['hasil_mp6'].'<br>deskripsi:'.$data['desk_mp6'].'</td>
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
