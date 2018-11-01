
<!DOCTYPE html>
<html>
<head>
    <div class="col-md-12">
        <h1 class="page-head-line">Data Tables Incident</h1>
    </div>
    </head>
<body>
<table border="1" id="coba1">
	<thead>
    <tr>
	    <th class="column1">NO</th>
    	<th class="column1">TIME</th>
    	<th class="column1">DATE</th>
    	<th class="column1">GAMBAR</th>
    	<th class="column1">VICTIM</th>
    	<th class="column1">AREA</th>
    	<th class="column1">PROBLEM</th>
    	<th class="column1">ROOT CAUSE</th>
    	<th class="column1">ACTION PLAN</th>
    	<th class="column1">PIC</th>
    	<th class="column1">STATUS</th>
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
    $sql = mysqli_query($dbconnect, "SELECT * from tb_incident");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_inc'].'</td>
            <td>'.$data['date_inc'].'</td>
            <td><img src='.$data['image_inc'].' height="100px" width="100px;"></td>
            <td>Name:'.$data['name_inc'].'<br>SEX:'.$data['gender_inc'].'<br>AGE:'.$data['age_inc'].'</td>
            <td>'.$data['area_inc'].'</td>
            <td>'.$data['problem_inc'].'</td>
            <td>'.$data['rootcause_inc'].'</td>
            <td>'.$data['actionplan_inc'].'</td>
            <td>'.$data['pic_inc'].'</td>
            <td>'.$data['status_inc'].'</td>            
        </tr>
		';
		$no++;
	}
	?>
</table>
<script>
window.print();		
</script>		
<?php
// echo "<script>window.location='data.php';</script>";
?>
