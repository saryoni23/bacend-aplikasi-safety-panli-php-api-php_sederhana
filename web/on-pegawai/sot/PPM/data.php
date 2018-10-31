<h4>DATA TABEL PENANGANAN & PENYIMPANAN MATERIAL </h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="PPM/excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
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
                                        <th>MATERIAL DISUSUN DENGAN RAPI DAN CARA AMAN</th>
                                        <th>OPERATOR MENGANGKAT MATERIAL DENGAN CARA YANG AMAN DAN BENAR</th>
                                        <th>FORKLIFT / STACKER / PALLET JACK DALAM KONDISI YANG BAGUS? (REM, RODA, KLAKSON, PEMELIHARAAN, SWL)</th>
                                        <th>FORKLIFT / STACKER / PALLET TRUCK DIKEMUDIKAN OLEH ORANG TERLATIH DAN DENGAN CARA YANG AMAN</th>
                                        <th>RACKING TIDAK RUSAK</th>
                                        <th>PALLET DALAM KONDISI YANG BAGUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_ppm") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_hp1']?></td>
                                                    <td><?=$data['date_hp1']?></td>
                                                    <td><a>area:</a><?=$data['area_ppm1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_ppm1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_ppm1']?></td>
                                                    <td><a>area:</a><?=$data['area_ppm2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_ppm2']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_ppm2']?></td>
                                                    <td><a>area:</a><?=$data['area_ppm3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_ppm3']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_ppm3']?></td>
                                                    <td><a>area:</a><?=$data['area_ppm4']?><br>
                                                        <a> hasil: </a><?=$data['hasil_ppm4']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_ppm4']?></td>
                                                    <td><a>area:</a><?=$data['area_ppm5']?><br>
                                                        <a> hasil: </a><?=$data['hasil_ppm5']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_ppm5']?></td>
                                                    <td><a>area:</a><?=$data['area_ppm6']?><br>
                                                        <a> hasil: </a><?=$data['hasil_ppm6']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_ppm6']?></td>
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