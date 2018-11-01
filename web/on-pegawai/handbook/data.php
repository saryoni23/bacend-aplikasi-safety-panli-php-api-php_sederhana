<?php include_once('../../_header.php');?>

    <div class="content-wrapper">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Data Tables Handbook</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <!-- <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus">Tambah Data</i></a> -->
                    </div>
                    <div style="margin-button: 20px">
                        <form class="form-inline" action="" metthod="post">
                            <div class="form-group">
                            </div>
                        </form>
                    </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>DOWNLOAD</th>
                                    <th><i class="glyphicon glyphicon-cog"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $batas = 5;
                                    $hal = @$_GET['hal'];
                                    if(empty($hal)){
                                        $posisi = 0;
                                        $hal = 1;
                                    }else{
                                        $posisi = ($hal - 1) * $batas; 
                                    }
                                    $no = 1; 
                                    if($_SERVER['REQUEST_METHOD'] == "POST"){ 
                                        $pencarian = trim(mysqli_real_escape_sting($con, $_POST['pencarian']));
                                        if($pencarian !=''){
                                            $sql = "SELECT * FROM tb_handbook WHERE name LIKE '%$pencarian%'";
                                            $query = $sql;
                                            $queryjml = $sql;
                                        }else{
                                            $query = "SELECT * FROM tb_handbook LIMIT $posisi, $batas";
                                            $queryjml= "SELECT * FROM tb_handbook";
                                            $no = $posisi + 1 ;
                                        }
                                    }else{
                                        $query = "SELECT * FROM tb_handbook LIMIT $posisi, $batas";
                                        $queryjml= "SELECT * FROM tb_handbook";
                                        $no = $posisi + 1;
                                    }                  
                                    $sql_hb = mysqli_query ($con, "SELECT * FROM tb_handbook") or die (mysqli_error($con));
                                        if(mysqli_num_rows($sql_hb) > 0){
                                        while($data = mysqli_fetch_array($sql_hb)){?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data['name']?></td>
                                                <td><a href="<?=$data['url']?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-download"></i></a></td>
                                                <td>
                                                <!-- <a href="edit.php?id=<?=$data['id_hb']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a> -->
                                                <a href="del.php?id=<?=$data['id_hb']?>" onclick="return confirm('Apakah anda yakin menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                    }else{
                                        echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <div>
                                <?php if($_POST['pencarian'] =! ''){ ?>
                                    <div style="float;left;">
                                    <?php 
                                    $jml = mysqli_num_rows(mysqli_query($con, $queryjml));
                                    echo "Jumlah Data : <b>$jml</b>";
                                    ?>
                                    </div>
                                 
                                    <?php
                                }else{ 
                                    echo "<div style=\"float;left;\">";
                                    $jml = mysqli_num_rows(mysqli_query($con, $queryjml));
                                    echo "Data Hasil Pencarian : <b>$jml</b>";
                                    echo "</div>";                                    
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once ('../../_footer.php'); ?>
