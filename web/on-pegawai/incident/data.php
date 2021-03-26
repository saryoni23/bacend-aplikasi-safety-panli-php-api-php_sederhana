<?php include_once('../../_header.php');?>

    <div class="content-wrapper">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Data Tables Incident</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    INCIDENT
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data Excel</i></a>
                        <a href="pdf.php" target="_BLANK" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data PDF</i></a>
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
                                    <th>TIME</th>
                                    <th>DATE</th>
                                    <th>PICTURE</th>
                                    <th>VICTIM</th>
                                    <th>AREA</th>
                                    <th>PROBLEM</th>
                                    <th>ROOT CAUSE</th>
                                    <th>ACTION PLAN</th>
                                    <th>PIC</th>
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
                                            $sql = "SELECT * FROM tb_incident WHERE area_inc LIKE '%$pencarian%'";
                                            $query = $sql;
                                            $queryjml = $sql;
                                        }else{
                                            $query = "SELECT * FROM tb_incident LIMIT $posisi, $batas";
                                            $queryjml= "SELECT * FROM tb_incident";
                                        }
                                    }else{
                                        $query = "SELECT * FROM tb_incident LIMIT $posisi, $batas";
                                        $queryjml= "SELECT * FROM tb_incident";
                                        $no = $posisi + 1;
                                    }                     
                                    $sql_incident = mysqli_query ($con, "SELECT * FROM tb_incident") or die (mysqli_error($con));
                                        if(mysqli_num_rows($sql_incident) > 0){
                                        while($data = mysqli_fetch_array($sql_incident)){?>
                                            <tr>
                                                <td><?=$no++?></td>
                                                <td><?=$data['time_inc']?></td>
                                                <td><?=$data['date_inc']?></td>
                                                <td><img src=<?=$data['image_inc']?> height="100px" width="100px;"></td>
                                                <td><?=$data['name_inc']?>| <?=$data['gender_inc']?> | <?=$data['age_inc']?></td>
                                                <td><?=$data['area_inc']?></td>
                                                <td><?=$data['problem_inc']?></td>
                                                <td><?=$data['rootcause_inc']?></td>
                                                <td><?=$data['actionplan_inc']?></td>
                                                <td><?=$data['pic_inc']?></td>
                                                <td><?=$data['status_inc']?></td>
                                                <td class="text-center">
                                                <!--<a href="edit.php?id=<?=$data['id_inc']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>-->
                                                <a href="del.php?id=<?=$data['id_inc']?>" onclick="return confirm('Apakah anda yakin menghapus data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
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
