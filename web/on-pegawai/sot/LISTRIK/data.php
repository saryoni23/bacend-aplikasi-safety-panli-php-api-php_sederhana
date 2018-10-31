<h4>DATA TABEL LISTIK</h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="download.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
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
                                        <th>PANEL LISTRIK DAN DISTRIBUTION BOARDS DITUTUP DENGAN BENAR DAN TAK TERHALANG</th>
                                        <th>PERALATAN LISTRIK YANG LAYAK (PLUG, KABEL DLL.) DIGUNAKAN</th>
                                        <th>PENCAHAYAAN DI AREA KERJA MEMADAI</th>
                                        <th>TANDA BAHAYA TEGANGAN TINGGI DIPAJANG</th>
                                        <th>PERKAKAS TANGAN BERTENAGA DIPERIKSA DAN DILABEL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_listrik") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_listrik']?></td>
                                                    <td><?=$data['date_listrik']?></td>
                                                    <td><a>area:</a><?=$data['area_listrik1']?><br><a> hasil: </a><?=$data['hasil_listrik1']?><br><a>deskripsi:</a><?=$data['desk_listrik1']?></td>
                                                    <td><a>area:</a><?=$data['area_listrik2']?><br><a> hasil: </a><?=$data['hasil_listrik2']?><br><a>deskripsi:</a><?=$data['desk_listrik2']?></td>
                                                    <td><a>area:</a><?=$data['area_listrik3']?><br><a> hasil: </a><?=$data['hasil_listrik3']?><br><a>deskripsi:</a><?=$data['desk_listrik3']?></td>
                                                    <td><a>area:</a><?=$data['area_listrik4']?><br><a> hasil: </a><?=$data['hasil_listrik4']?><br><a>deskripsi:</a><?=$data['desk_listrik4']?></td>
                                                    <td><a>area:</a><?=$data['area_listrik5']?><br><a> hasil: </a><?=$data['hasil_listrik5']?><br><a>deskripsi:</a><?=$data['desk_listrik5']?></td>
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