<h4>MESIN & PERALATAN</h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="MP/excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
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
                                        <th>MESIN DAN PERALATAN KETIKA DITINGGALKAN KONDISI MATI</th>
                                        <th>MESIN DAN PERALATAN DALAM KEADAAN BERSIH DAN DALAM KONDISI YANG BAGUS</th>
                                        <th>PELINDUNG PADA MESIN DALAM LOKASI YANG TEPAT DAN DALAM KONDISI YANG BAGUS</th>
                                        <th>TANDA PERINGATAN DIPAJANG KETIKA MESIN DAN PERALATAN SEDANG DALAM PERBAIKAN</th>
                                        <th>TOMBOL STOP DARURAT DALAM KONDISI BAGUS</th>
                                        <th>LOCKOUT / TAG OUT DIGUNAKAN UNTUK REPAIR/SERVIS</th>                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_mp") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_mp1']?></td>
                                                    <td><?=$data['date_mp1']?></td>
                                                    <td><a>area:</a><?=$data['area_mp1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_mp1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_mp1']?></td>
                                                    <td><a>area:</a><?=$data['area_mp2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_mp2']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_mp2']?></td>
                                                    <td><a>area:</a><?=$data['area_mp3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_mp3']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_mp3']?></td>
                                                    <td><a>area:</a><?=$data['area_mp4']?><br>
                                                        <a> hasil: </a><?=$data['hasil_mp4']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_mp4']?></td>
                                                    <td><a>area:</a><?=$data['area_mp5']?><br>
                                                        <a> hasil: </a><?=$data['hasil_mp5']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_mp5']?></td>
                                                    <td><a>area:</a><?=$data['area_mp6']?><br>
                                                        <a> hasil: </a><?=$data['hasil_mp6']?><br>
                                                        <a>deskripsi:</a><?=$data['desk_mp6']?></td>
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