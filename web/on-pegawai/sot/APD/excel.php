<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Apd.xls");
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
    	<th>APD YANG DIGUNAKAN SESUAI AREA YANG DI TENTUKAN</th>
        <th>PAKAIAN TIDAK  ADA YANG LONGAR</th>
        <th>ALAT PELINDUNG DIRI DALAM KONDISI YANG BAGUS</th>
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_apd");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_apd1'].'</td>
            <td>'.$data['date_apd1'].'</td>
            <td>
                area:'.$data['area_apd1'].'<br>
                hasil:'.$data['hasil_apd1'].'<br>
                deskripsi:'.$data['desk_apd1'].'
            </td>
            <td>
                area:'.$data['area_apd2'].'<br>
                hasil:'.$data['hasil_apd2'].'<br>
                deskripsi:'.$data['desk_apd2'].'
            </td>
            <td>
                area:'.$data['area_apd3'].'<br>
                hasil:'.$data['hasil_apd3'].'<br>
                deskripsi:'.$data['desk_apd3'].'
            </td>	 
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='../data.php';</script>";
?>
