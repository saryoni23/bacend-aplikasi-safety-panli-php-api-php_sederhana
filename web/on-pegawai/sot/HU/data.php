<h4>DATA TABEL HOUSEKEEPING UMUM</h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="HU/excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
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
                                        <th>AREA KERJA BERSIH DAN RAPIH</th>
                                        <th>TAK ADA MINYAK, GEMOK, TUMPAHAN dll. DILANTAI</th>
                                        <th>RESTROOM/TOILET DAN AREA SEKITAR DALAM KONDISI YANG BERSIH DAN SEHAT</th>
                                        <th>SAMPAH/SCRAP MATERIAL DIBUANG DAN TIDAK MENUMPUK</th>
                                        <th>SELANG UDARA/KABEL LISTRIK DIGULUNG DAN DIGANTUNG</th>
                                        <th>PERALATAN/PERKAKAS TIDAK BERGELETAKAN</th>
                                        <th>AREA SEKITAR GUDANG E.G. PARIT, AREA BATERAY-CHARGING BERSIH DAN RAPI</th>
                                        <th>SEMUA FORKLIFTS DAN STACKERS DIPARKIRKAN DIAREA YANG DITENTUKAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_hp") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_hp1']?></td>
                                                    <td><?=$data['date_hp1']?></td>
                                                    <td><a>area:</a><?=$data['area_hp1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_hp1']?></td>
                                                    <td><a>area:</a><?=$data['area_hp2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp2']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_hp2']?></td>
                                                    <td><a>area:</a><?=$data['area_hp3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp3']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_hp3']?></td>
                                                    <td><a>area:</a><?=$data['area_hp4']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp4']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_hp4']?></td>
                                                    <td><a>area:</a><?=$data['area_hp5']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp5']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_hp5']?></td>
                                                    <td><a>area:</a><?=$data['area_hp6']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp6']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_hp6']?></td>
                                                    <td><a>area:</a><?=$data['area_hp7']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp7']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_hp7']?></td>
                                                    <td><a>area:</a><?=$data['area_hp8']?><br>
                                                        <a> hasil: </a><?=$data['hasil_hp8']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_hp8']?></td>
                                                </tr>
                                            <?php
                                            }
                                        }else{
                                            echo "<tr><td colspan=\"4\" align=\"center\">Data Tidak Ditemukan</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>