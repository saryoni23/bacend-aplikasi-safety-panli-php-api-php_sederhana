<h4>DATA TABEL PENCEGAHAN KEBAKARAN</h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="pk/excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
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
                                        <th>PINTU KEBAKARAN DAPAT DIBUKA DENGAN MUDAH DAN TANDA EXIT MENYALA</th>
                                        <th>PINTU KEBAKARAN DAN ALAT PEMADAM KEBAKARAN TIDAK TERHALANG</th>
                                        <th>ALAT PEMADAM KEBAKARAN DALAM LOKASI YANG BENAR DAN DALAM KONDISI YANG BAGUS</th>
                                        <th>SYSTEM SPRINKLER (HEADS AND VALVES) / HOSE REEL DALAM KONDISI BAGUS</th>
                                        <th>PANEL ALARM KEBAKARAN DALAM KONDISI BAGUS</th>
                                        <th>AREA “DILARANG MEROKOK” DIPATUHI</th>
                                        <th>AREA SEKITAR GUDANG E.G. PARIT, AREA BATERAY-CHARGING BERSIH DAN RAPI</th>
                                        <th>MATERIAL MUDAH TERBAKAR DISIMPAN DAN DITANGANI DENGAN BENAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_pk") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_pk1']?></td>
                                                    <td><?=$data['date_pk1']?></td>
                                                    <td><a>area:</a><?=$data['area_pk1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pk1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_pk1']?></td>
                                                    <td><a>area:</a><?=$data['area_pk2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pk2']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pk2']?></td>
                                                    <td><a>area:</a><?=$data['area_pk3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pk3']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pk3']?></td>
                                                    <td><a>area:</a><?=$data['area_pk4']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pk4']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pk4']?></td>
                                                    <td><a>area:</a><?=$data['area_pk5']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pk5']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pk5']?></td>
                                                    <td><a>area:</a><?=$data['area_pk6']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pk6']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pk6']?></td>
                                                    <td><a>area:</a><?=$data['area_pk7']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pk7']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pk7']?></td>
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