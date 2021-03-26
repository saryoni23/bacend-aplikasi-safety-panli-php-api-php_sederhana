
<!DOCTYPE html>
<html>
<head>
    <div class="col-md-12">
        <h1 style="text-align:center" class="page-head-line">Data Tables Unsafe Condition</h1>
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
    	<th class="column1">CATEGORY</th>
    	<th class="column1">LEVEL DANGER</th>
    	<th class="column1">AREA</th>
    	<th class="column1">PROBLEM</th>
    	<th class="column1">DUE DATE</th>
    	<th class="column1">STATUS</th>
    </tr>
    </thead>

	<?php
    // require_once "config.php";
	// //koneksi ke database
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBNAME', 'db_safetypanli');
    
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
        
    ?>
<?php
	//query menampilkan data
    $sql = mysqli_query($dbconnect, "SELECT * from tb_unsafecondition");
    $no = 1;
    foreach ($sql as $data){
	echo '
		<tr>
			<td>'.$no.'</td>
            <td>'.$data['time_uc'].'</td>
            <td>'.$data['date_uc'].'</td>
            <td><img src='.$data['image_uc'].' height="100px" width="100px;"></td>
            <td>'.$data['category_uc'].'</td>
            <td>'.$data['level_danger'].'</td>
            <td>'.$data['area_uc'].'</td>
            <td>'.$data['problem_uc'].'</td>
            <td>'.$data['due_date'].'</td>
            <td>'.$data['status_uc'].'</td>            
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
