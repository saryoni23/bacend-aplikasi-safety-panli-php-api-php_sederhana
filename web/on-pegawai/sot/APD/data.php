<h4>DATA TABEL ALAT PELINDUNG DIRI</h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="APD/excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
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
                                        <th>APD yang digunakan sesuai area yang di tentukan</th>
                                        <th>Pakaian tidak  ada yang longar</th>
                                        <th>Alat pelindung diri dalam kondisi yang bagus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_apd") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_apd1']?></td>
                                                    <td><?=$data['date_apd1']?></td>
                                                    <td><a>area:</a><?=$data['area_apd1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_apd1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_apd1']?></td>
                                                    <td><a>area:</a><?=$data['area_apd2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_apd2']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_apd2']?></td>
                                                    <td><a>area:</a><?=$data['area_apd3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_apd3']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_adp3']?></td>
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