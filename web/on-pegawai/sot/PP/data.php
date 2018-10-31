<h4>DATA TABEL PERTOLONGAN PERTAMA</h4>
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
                                        <th>KOTAK P3K DISEDIAKAN DAN MEMADAI</th>
                                        <th>PETUGAS P3K TERSEDIA</th>
                                        <th>SEMUA ALAT P3K YANG DIWAJIBKAN ADA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_pp") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_pp1']?></td>
                                                    <td><?=$data['date_pp1']?></td>
                                                    <td><a>area:</a><?=$data['area_pp1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pp1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_pp1']?></td>
                                                    <td><a>area:</a><?=$data['area_pp2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pp2']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pp2']?></td>
                                                    <td><a>area:</a><?=$data['area_pp3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_pp3']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_pp3']?></td>
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