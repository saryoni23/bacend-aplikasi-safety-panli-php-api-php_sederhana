<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DATA BAHAN KIMIA.xls");
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
    	<th>ALAT PELINDUNG DIRI DIGUNAKAN KETIKA MENANGANI BAHAN KIMIA</th>
        <th>LEMBAR DATA KESELAMATAN TERSEDIA ATAS PERMINTAAN</th>
        <th>WADAH BAHAN KIMIA DIBERI LABEL DAN TERIDENTIFIKASI</th>
        <th>ALAT TUMPAHAN /MATERIAL ABSORBENT TERSEDIA</th>
        <th>NOMOR DARURAT TERSEDIA</th>
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_bk");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
        <td>'.$no.'</td>
        <td>'.$data['time_bk1'].'</td>
        <td>'.$data['date_bk1'].'</td>
        <td>
            area:'.$data['area_bk1'].'<br>
            hasil:'.$data['hasil_bk1'].'<br>
            deskripsi:'.$data['desk_bk1'].'
        </td>
        <td>
            area:'.$data['area_bk2'].'<br>
            hasil:'.$data['hasil_bk2'].'<br>
            deskripsi:'.$data['desk_bk2'].'
        </td>
        <td>
            area:'.$data['area_bk3'].'<br>
            hasil:'.$data['hasil_bk3'].'<br>
            deskripsi:'.$data['desk_bk3'].'
        </td>
        <td>
            area:'.$data['area_bk4'].'<br>
            hasil:'.$data['hasil_bk4'].'<br>
            deskripsi:'.$data['desk_bk4'].'
        </td>
        <td>
            area:'.$data['area_bk5'].'<br>
            hasil:'.$data['hasil_bk5'].'<br>
            deskripsi:'.$data['desk_bk5'].'
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
