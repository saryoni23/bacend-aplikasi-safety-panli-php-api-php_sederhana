<h4>DATA TABEL BAHAN KIMIA</h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="BK/excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
                        </div>
                            <div style="margin-button: 20px">
                                <form class="form-inline" action="" method="post">
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
                                        <th>ALAT PELINDUNG DIRI DIGUNAKAN KETIKA MENANGANI BAHAN KIMIA</th>
                                        <th>LEMBAR DATA KESELAMATAN TERSEDIA ATAS PERMINTAAN</th>
                                        <th>WADAH BAHAN KIMIA DIBERI LABEL DAN TERIDENTIFIKASI</th>
                                        <th>ALAT TUMPAHAN /MATERIAL ABSORBENT TERSEDIA</th>
                                        <th>NOMOR DARURAT TERSEDIA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_bk") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_bk1']?></td>
                                                    <td><?=$data['date_bk1']?></td>
                                                    <td><a>area:</a><?=$data['area_bk1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bk1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bk1']?></td>
                                                    <td><a>area:</a><?=$data['area_bk2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bk2']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_bk2']?></td>
                                                    <td><a>area:</a><?=$data['area_bk3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bk3']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_bk3']?></td>
                                                    <td><a>area:</a><?=$data['area_bk4']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bk4']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_bk4']?></td>
                                                    <td><a>area:</a><?=$data['area_bk5']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bk5']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_bk5']?></td>
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