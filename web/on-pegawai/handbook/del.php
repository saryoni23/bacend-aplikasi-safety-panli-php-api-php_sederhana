<?php
require "../../_config/config.php";

	$delete = "DELETE FROM tb_handbook WHERE id_hb ='$_GET[id]'";
	$exedelete = mysqli_query($con, $delete);
echo "<script>window.location='data.php';</script>";
?>