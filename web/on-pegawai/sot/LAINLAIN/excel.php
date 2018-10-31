<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Lain-Lain.xls");
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
        <th>TERDAPAT PEKERJA YANG MELAKUKAN TINDAKAN TAK AMAN</th>
        <th>TERDAPAT KONDISI TIDAK AMAN</th>
        <th>TERDAPAT KERUSAKAN BESAR DALAM BANGUNAN</th>
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_lain");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_lain'].'</td>
            <td>'.$data['date_lain'].'</td>
            <td>area:'.$data['area_lain1'].'<br>hasil:'.$data['hasil_lain1'].'<br>deskripsi:'.$data['desk_lain1'].'</td>
            <td>area:'.$data['area_lain2'].'<br>hasil:'.$data['hasil_lain2'].'<br>deskripsi:'.$data['desk_lain2'].'</td>
            <td>area:'.$data['area_lain3'].'<br>hasil:'.$data['hasil_lain3'].'<br>deskripsi:'.$data['desk_lain3'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='../data.php';</script>";
?>
