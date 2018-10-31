<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DATA TABEL PERTOLONGAN PERTAMA.xls");
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
        <th>KOTAK P3K DISEDIAKAN DAN MEMADAI</th>
        <th>PETUGAS P3K TERSEDIA</th>
        <th>SEMUA ALAT P3K YANG DIWAJIBKAN ADA</th>

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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_pp");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_uc'].'</td>
            <td>'.$data['date_uc'].'</td>
            <td>area:'.$data['area_pp1'].'<br>hasil:'.$data['hasil_pp1'].'<br>deskripsi:'.$data['desk_pp1'].'</td>
            <td>area:'.$data['area_pp2'].'<br>hasil:'.$data['hasil_pp2'].'<br>deskripsi:'.$data['desk_pp2'].'</td>
            <td>area:'.$data['area_pp3'].'<br>hasil:'.$data['hasil_pp3'].'<br>deskripsi:'.$data['desk_pp3'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='../data.php';</script>";
?>
