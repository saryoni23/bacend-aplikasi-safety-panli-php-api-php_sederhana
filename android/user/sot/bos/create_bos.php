<?php

	include_once "../../../../koneksi.php";

	class usr{}

	$ket       =$_POST['ket_bos1'];
	$area      =$_POST['area_bos1'];
	$hasil     =$_POST['hasil_bos1'];
	$desk      =$_POST['desk_bos1'];

	$ket2       =$_POST['ket_bos2'];
	$area2      =$_POST['area_bos2'];
	$hasil2     =$_POST['hasil_bos2'];
	$desk2      =$_POST['desk_bos2'];

	$ket3       =$_POST['ket_bos3'];
	$area3      =$_POST['area_bos3'];
	$hasil3     =$_POST['hasil_bos3'];
	$desk3      =$_POST['desk_bos3'];
	
	$ket4       =$_POST['ket_bos4'];
	$area4      =$_POST['area_bos4'];
	$hasil4     =$_POST['hasil_bos4'];
	$desk4      =$_POST['desk_bos4'];
	
	$ket5       =$_POST['ket_bos5'];
	$area5      =$_POST['area_bos5'];
	$hasil5     =$_POST['hasil_bos5'];
	$desk5      =$_POST['desk_bos5'];
	
	$ket6       =$_POST['ket_bos6'];
	$area6      =$_POST['area_bos6'];
	$hasil6     =$_POST['hasil_bos6'];
	$desk6      =$_POST['desk_bos6'];

	$ket7       =$_POST['ket_bos7'];
	$area7      =$_POST['area_bos7'];
	$hasil7     =$_POST['hasil_bos7'];
	$desk7      =$_POST['desk_bos7'];

	$ket8       =$_POST['ket_bos8'];
	$area8      =$_POST['area_bos8'];
	$hasil8     =$_POST['hasil_bos8'];
	$desk8      =$_POST['desk_bos8'];
	
	$ket9       =$_POST['ket_bos9'];
	$area9      =$_POST['area_bos9'];
	$hasil9     =$_POST['hasil_bos9'];
	$desk9      =$_POST['desk_bos9'];
	
	$ket10       =$_POST['ket_bos10'];
	$area10      =$_POST['area_bos10'];
	$hasil10     =$_POST['hasil_bos10'];
	$desk10      =$_POST['desk_bos10'];
	
	$ket11       =$_POST['ket_bos11'];
	$area11      =$_POST['area_bos11'];
	$hasil11     =$_POST['hasil_bos11'];
	$desk11      =$_POST['desk_bos11'];

	$ket12       =$_POST['ket_bos12'];
	$area12      =$_POST['area_bos12'];
	$hasil12     =$_POST['hasil_bos12'];
	$desk12      =$_POST['desk_bos12'];

	$ket13       =$_POST['ket_bos13'];
	$area13      =$_POST['area_bos13'];
	$hasil13     =$_POST['hasil_bos13'];
	$desk13      =$_POST['desk_bos13'];
	
	$ket14       =$_POST['ket_bos14'];
	$area14      =$_POST['area_bos14'];
	$hasil14     =$_POST['hasil_bos14'];
	$desk14      =$_POST['desk_bos14'];
	
	$ket15       =$_POST['ket_bos15'];
	$area15      =$_POST['area_bos15'];
	$hasil15     =$_POST['hasil_bos15'];
	$desk15      =$_POST['desk_bos15'];
	
	$ket16       =$_POST['ket_bos16'];
	$area16      =$_POST['area_bos16'];
	$hasil16     =$_POST['hasil_bos16'];
	$desk16      =$_POST['desk_bos16'];

	$ket17       =$_POST['ket_bos17'];
	$area17      =$_POST['area_bos17'];
	$hasil17     =$_POST['hasil_bos17'];
	$desk17      =$_POST['desk_bos17'];

	$ket18       =$_POST['ket_bos18'];
	$area18      =$_POST['area_bos18'];
	$hasil18     =$_POST['hasil_bos18'];
	$desk18      =$_POST['desk_bos18'];
	
	$ket19       =$_POST['ket_bos19'];
	$area19      =$_POST['area_bos19'];
	$hasil19     =$_POST['hasil_bos19'];
	$desk19      =$_POST['desk_bos19'];
	
	$ket20       =$_POST['ket_bos20'];
	$area20      =$_POST['area_bos20'];
	$hasil20     =$_POST['hasil_bos20'];
	$desk20      =$_POST['desk_bos20'];

	$date      =$_POST['date_bos'];
	$time      =$_POST['time_bos'];
	$id_user   =$_POST['id_user'];

	if (empty($ket)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk2)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk3)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk4)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk5)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk6)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk7)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk8)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket9)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area9)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil9)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk9)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket10)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area10)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil10)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk10)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket11)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area11)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil11)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk11)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket12)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area12)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil12)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk12)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket13)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area13)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil13)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk13)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket14)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area14)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil14)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk14)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket15)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area15)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil15)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk15)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket16)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area16)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil16)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk16)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket17)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area17)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil17)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk17)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket18)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area18)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil18)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk18)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket19)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area19)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil19)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk19)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($ket20)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Keterangan behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($area20)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Area behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($hasil20)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Hasil behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else if (empty($desk20)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Deskripsi behavior observation system tidak boleh kosong"; 
		die(json_encode($response));
	} else {

		$query = mysqli_query($con, "INSERT INTO tb_bos (id_bos, ket_bos1, area_bos1, hasil_bos1, desk_bos1, ket_bos2, area_bos2, hasil_bos2, desk_bos2, ket_bos3, area_bos3, hasil_bos3, desk_bos3, ket_bos4, area_bos4, hasil_bos4, desk_bos4, ket_bos5, area_bos5, hasil_bos5, desk_bos5, ket_bos6, area_bos6, hasil_bos6, desk_bos6, ket_bos7, area_bos7, hasil_bos7, desk_bos7, ket_bos8, area_bos8, hasil_bos8, desk_bos8, ket_bos9, area_bos9, hasil_bos9, desk_bos9, ket_bos10, area_bos10, hasil_bos10, desk_bos10, ket_bos11, area_bos11, hasil_bos11, desk_bos11, ket_bos12, area_bos12, hasil_bos12, desk_bos12, ket_bos13, area_bos13, hasil_bos13, desk_bos13, ket_bos14, area_bos14, hasil_bos14, desk_bos14, ket_bos15, area_bos15, hasil_bos15, desk_bos15, ket_bos16, area_bos16, hasil_bos16, desk_bos16, ket_bos17, area_bos17, hasil_bos17, desk_bos17, ket_bos18, area_bos18, hasil_bos18, desk_bos18, ket_bos19, area_bos19, hasil_bos19, desk_bos19, ket_bos20, area_bos20, hasil_bos20, desk_bos20, date_bos, time_bos, id_user) VALUES (0, '".$ket."','".$area."','".$hasil."','".$desk."','".$ket2."','".$area2."','".$hasil2."','".$desk2."','".$ket3."','".$area3."','".$hasil3."','".$desk3."','".$ket4."','".$area4."','".$hasil4."','".$desk4."','".$ket5."','".$area5."','".$hasil5."','".$desk5."','".$ket6."','".$area6."','".$hasil6."','".$desk6."','".$ket7."','".$area7."','".$hasil7."','".$desk7."','".$ket8."','".$area8."','".$hasil8."','".$desk8."','".$ket9."','".$area9."','".$hasil9."','".$desk9."','".$ket10."','".$area10."','".$hasil10."','".$desk10."','".$ket11."','".$area11."','".$hasil11."','".$desk11."','".$ket12."','".$area12."','".$hasil12."','".$desk12."','".$ket13."','".$area13."','".$hasil13."','".$desk13."','".$ket14."','".$area14."','".$hasil14."','".$desk14."','".$ket15."','".$area15."','".$hasil15."','".$desk15."','".$ket16."','".$area16."','".$hasil16."','".$desk16."','".$ket17."','".$area17."','".$hasil17."','".$desk17."','".$ket18."','".$area18."','".$hasil18."','".$desk18."','".$ket19."','".$area19."','".$hasil19."','".$desk19."','".$ket20."','".$area20."','".$hasil20."','".$desk20."','".$date."','".$time."','".$id_user."')");

		 	if ($query){
		 		$response = new usr();
		 		$response->success = 1;
		 		$response->message = "Kirim Report Behavior Observation System Berhasil";
		 		die(json_encode($response));

		 	} else {
		 		$response = new usr();
		 		$response->success = 0;
		 		$response->message = "Kirim Report Behavior Observation System Gagal";
		 		die(json_encode($response));
		 	}
		 
	 }

	 mysqli_close($con);

?>	