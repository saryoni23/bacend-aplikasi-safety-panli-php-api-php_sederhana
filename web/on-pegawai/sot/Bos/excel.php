<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=DATA BEHAVIOR OBSERVATION SYSTEM.xls");
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
    	<th>PALLET ID ATAU LOKASI ID BISA DIBACA DAN TIDAK RUSAK</th>
        <th>KARDUS TIDAK BOLEH SOBEK ATAU PENYOK</th>
        <th>PALLET KONDISINYA BAGUS , TIDAK RUSAK ATAU TERINFEKSI SERANGGA</th>
        <th>PRODUK DI SUSUNAN AREA RACK BEBAS DARI DEBU TEBAL</th>
        <th>TIDAK ADA SHIPPER YANG TERBUKA DITEMUKAN DI DI AREA CASE PICK ATAU AREA DALAM PICK</th>
        <th>PALET YANG ADA PRODUKNYA  DIBUNGKUS PLASTIC WRAPING ATAU DITEKUK DENGAN BAND PALLET. JIKA DIBUNGKUS PLASTIK, DIBUNGKUS SAMPAI BAGIAN BAWAH PALLET</th>
        <th> TIDAK ADA PALET KOSONG YANG TERSIMPAN DI RAK</th>
        <th>LANTAI BEBAS DARI SAMPAH , SERPIHAN KAYU , PLASTIC , KERTAS DAN SEBAGAINYA</th>
        <th>PELINDUNG RACKING TIDAK RUSAK</th>
        <th>PRODUK DI AREA  STAGING OUTBOUND BEBAS DARI DEBU</th>
        <th>PALET FINISH GOOD BERADA DIDALM GARIS KUNING DALAM STAGING AREA</th>
        <th>CAT DI DINDING GARIS KUNING JELAS DAN TIDAK PUDAR</th>
        <th>LOADING DOCK PINTUNYA TERTUTUP SAAT TIDAK DIGUNAKAN</th>
        <th>PLASTIK PENUTUP PINTU LOADING DENGAN KONDISI BERSIH</th>
        <th>SEMUA LAMPU BERFUNGSI DENGAN BAIK</th>
        <th>TRUK YANG DIGUNAKAN TIDAK BASAH , BOCOR  ATAU BAU YANG MENYENGAT</th>
        <th>LANTAI TIDAK RUSAK ATAU RETAK</th>
        <th>TIDAK ADA KEBOCORAN DARI ATAP</th>
        <th>RANDOM CYCLE COUNT HASIL HARUS 100% MINIMAL CYCLE COUNT 5 SAMPLE</th>
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_bos");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
        <td>'.$no.'</td>
        <td>'.$data['time_bos'].'</td>
        <td>'.$data['date_bos'].'</td>
        <td>area:'.$data['area_bos1'].'<br>hasil:'.$data['hasil_bos1'].'<br>deskripsi:'.$data['desk_bos1'].'</td>
        <td>area:'.$data['area_bos2'].'<br>hasil:'.$data['hasil_bos2'].'<br>deskripsi:'.$data['desk_bos2'].'</td>
        <td>area:'.$data['area_bos3'].'<br>hasil:'.$data['hasil_bos3'].'<br>deskripsi:'.$data['desk_bos3'].'</td>
        <td>area:'.$data['area_bos4'].'<br>hasil:'.$data['hasil_bos4'].'<br>deskripsi:'.$data['desk_bos4'].'</td>
        <td>area:'.$data['area_bos5'].'<br>hasil:'.$data['hasil_bos5'].'<br>deskripsi:'.$data['desk_bos5'].'</td>
        <td>area:'.$data['area_bos6'].'<br>hasil:'.$data['hasil_bos6'].'<br>deskripsi:'.$data['desk_bos6'].'</td>
        <td>area:'.$data['area_bos7'].'<br>hasil:'.$data['hasil_bos7'].'<br>deskripsi:'.$data['desk_bos7'].'</td>
        <td>area:'.$data['area_bos8'].'<br>hasil:'.$data['hasil_bos8'].'<br>deskripsi:'.$data['desk_bos8'].'</td>
        <td>area:'.$data['area_bos9'].'<br>hasil:'.$data['hasil_bos9'].'<br>deskripsi:'.$data['desk_bos9'].'</td>
        <td>area:'.$data['area_bos10'].'<br>hasil:'.$data['hasil_bos10'].'<br>deskripsi:'.$data['desk_bos10'].'</td>
        <td>area:'.$data['area_bos11'].'<br>hasil:'.$data['hasil_bos11'].'<br>deskripsi:'.$data['desk_bos11'].'</td>
        <td>area:'.$data['area_bos12'].'<br>hasil:'.$data['hasil_bos12'].'<br>deskripsi:'.$data['desk_bos12'].'</td>
        <td>area:'.$data['area_bos13'].'<br>hasil:'.$data['hasil_bos13'].'<br>deskripsi:'.$data['desk_bos13'].'</td>
        <td>area:'.$data['area_bos14'].'<br>hasil:'.$data['hasil_bos14'].'<br>deskripsi:'.$data['desk_bos14'].'</td>
        <td>area:'.$data['area_bos15'].'<br>hasil:'.$data['hasil_bos15'].'<br>deskripsi:'.$data['desk_bos15'].'</td>
        <td>area:'.$data['area_bos16'].'<br>hasil:'.$data['hasil_bos16'].'<br>deskripsi:'.$data['desk_bos16'].'</td>
        <td>area:'.$data['area_bos17'].'<br>hasil:'.$data['hasil_bos17'].'<br>deskripsi:'.$data['desk_bos17'].'</td>
        <td>area:'.$data['area_bos18'].'<br>hasil:'.$data['hasil_bos18'].'<br>deskripsi:'.$data['desk_bos18'].'</td>
        <td>area:'.$data['area_bos19'].'<br>hasil:'.$data['hasil_bos19'].'<br>deskripsi:'.$data['desk_bos19'].'</td>
        <td>area:'.$data['area_bos20'].'<br>hasil:'.$data['hasil_bos20'].'<br>deskripsi:'.$data['desk_bos20'].'</td>
		</tr>
		';
		$no++;
	}
	?>
</table>		
<?php
echo "<script>window.location='../data.php';</script>";
?>
