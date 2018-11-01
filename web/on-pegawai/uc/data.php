<?php include_once('../../_header.php');?>

    <div class="content-wrapper">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Data Tables Unsafe Condition</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data Excel</i></a>
                        <a href="pdf.php" target="_BLANK" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data PDF</i></a>
                    </div>
                    <div style="margin-button: 20px">
                        <form class="form-inline" action="" metthod="post">
 
                            <div class="form-group">
                               
                        </form>
                    </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                    <th>NO</th>
                                    <th>TIME</th>
                                    <th>DATE</th>
                                    <th>PICTURE</th>
                                    <th>CATEGORY</th>
                                    <th>LEVEL</th>
                                    <th>AREA</th>
                                    <th>PROBLEM</th>
                                    <th>DUE DATE</th>
                                    <th>STATUS</th>
                                    <th><i class="glyphicon glyphicon-cog"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $batas =5;
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
                                            $sql = "SELECT * FROM tb_unsafecondition WHERE area_uc LIKE '%$pencarian%'";
                                            $query = $sql;
                                            $queryjml = $sql;
                                        }else{
                                            $query = "SELECT * FROM tb_unsafecondition LIMIT $posisi, $batas";
                                            $queryjml= "SELECT * FROM tb_unsafecondition";
                                        }
                                    }else{
                                        $query = "SELECT * FROM tb_unsafecondition LIMIT $posisi, $batas";
                                        $queryjml= "SELECT * FROM tb_unsafecondition";
                                        $no = $posisi + 1;
                                    }                     
                                    $sql_incident = mysqli_query ($con, "SELECT * FROM tb_unsafecondition") or die (mysqli_error($con));
                                        if(mysqli_num_rows($sql_incident) > 0){
                                        while($data = mysqli_fetch_array($sql_incident)){?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data['time_uc']?></td>
                                                <td><?=$data['date_uc']?></td>
                                                <td><img src=<?=$data['image_uc']?> height="100px" width="100px;"></td>
                                                <td><?=$data['category_uc']?></td>
                                                <td><?=$data['level_danger']?></td>
                                                <td><?=$data['area_uc']?></td>
                                                <td><?=$data['problem_uc']?></td>
                                                <td><?=$data['due_date']?></td>
                                                <td><?=$data['status_uc']?></td>
                                                <td class="text-center">
                                                
                                                <a href="del.php?id=<?=$data['id_uc']?>" onclick="return confirm('Apakah anda yakin menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
                                <?php if($_POST['pencarian'] =!!! ''){ ?>
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
