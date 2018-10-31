<h4>DATA TABEL BEHAVIOR OBSERVATION SYSTEM (BOS Quality)</h4>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        <div class="pull-right">
                            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="Bos/excel.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-print">Download Data</i></a>
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
                                        <th>PALLET ID ATAU LOKASI ID BISA DIBACA DAN TIDAK RUSAK</th>
                                        <th>KARDUS TIDAK BOLEH SOBEK ATAU PENYOK</th>
                                        <th>PALLET KONDISINYA BAGUS , TIDAK RUSAK ATAU TERINFEKSI SERANGGA</th>
                                        <th>PRODUK DI SUSUNAN AREA RACK BEBAS DARI DEBU TEBAL</th>
                                        <th>TIDAK ADA SHIPPER YANG TERBUKA DITEMUKAN DI DI AREA CASE PICK ATAU AREA DALAM PICK</th>
                                        <th>PALET YANG ADA PRODUKNYA  DIBUNGKUS PLASTIC WRAPING ATAU DITEKUK DENGAN BAND PALLET. JIKA DIBUNGKUS PLASTIK, DIBUNGKUS SAMPAI BAGIAN BAWAH PALLET</th>
                                        <th> TIDAK ADA PALET KOSONG YANG TERSIMPAN DI RAK</th>
                                        <th>LANTAI BEBAS DARI SAMPAH , SERPIHAN KAYU , PLASTIC , KERTAS DAN SEBAGAINYA</th>
                                        <th>PELINDUNG RACKING TIDAK RUSAK</th>
                                        <th>PRODUK DI AREA  STAGING OUTBOUND BEBAS DARI DEBU</th>
                                        <th>PALET FINISH GOOD BERADA DIDALM GARIS KUNING DALAM STAGING AREA</th>
                                        <th>CAT DI DINDING GARIS KUNING JELAS DAN TIDAK PUDAR</th>
                                        <th>LOADING DOCK PINTUNYA TERTUTUP SAAT TIDAK DIGUNAKAN</th>
                                        <th>PLASTIK PENUTUP PINTU LOADING DENGAN KONDISI BERSIH</th>
                                        <th>SEMUA LAMPU BERFUNGSI DENGAN BAIK</th>
                                        <th>TRUK YANG DIGUNAKAN TIDAK BASAH , BOCOR  ATAU BAU YANG MENYENGAT</th>
                                        <th>LANTAI TIDAK RUSAK ATAU RETAK</th>
                                        <th>TIDAK ADA KEBOCORAN DARI ATAP</th>
                                        <th>RANDOM CYCLE COUNT HASIL HARUS 100% MINIMAL CYCLE COUNT 5 SAMPLE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $sql_incident = mysqli_query ($con, "SELECT * FROM tb_bos") or die (mysqli_error($con));
                                            if(mysqli_num_rows($sql_incident) > 0){
                                            while($data = mysqli_fetch_array($sql_incident)){?>
                                                <tr>
                                                    <td><?=$no++?></td>
                                                    <td><?=$data['time_bos']?></td>
                                                    <td><?=$data['date_bos']?></td>
                                                    <td><a>area:</a><?=$data['area_bos1']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos1']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos1']?></td>
                                                    <td><a>area:</a><?=$data['area_bos2']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos2']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos2']?></td>
                                                    <td><a>area:</a><?=$data['area_bos3']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos3']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos3']?></td>
                                                    <td><a>area:</a><?=$data['area_bos4']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos4']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos4']?></td>
                                                    <td><a>area:</a><?=$data['area_bos5']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos5']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos5']?></td>
                                                    <td><a>area:</a><?=$data['area_bos6']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos6']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos6']?></td>
                                                    <td><a>area:</a><?=$data['area_bos7']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos7']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos7']?></td>
                                                    <td><a>area:</a><?=$data['area_bos8']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos8']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos8']?></td>
                                                    <td><a>area:</a><?=$data['area_bos9']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos9']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos9']?></td>
                                                    <td><a>area:</a><?=$data['area_bos10']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos10']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos10']?></td>
                                                    <td><a>area:</a><?=$data['area_bos11']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos11']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos11']?></td>
                                                    <td><a>area:</a><?=$data['area_bos12']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos12']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos12']?></td>
                                                    <td><a>area:</a><?=$data['area_bos13']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos13']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos13']?></td>
                                                    <td><a>area:</a><?=$data['area_bos14']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos14']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos14']?></td>
                                                    <td><a>area:</a><?=$data['area_bos15']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos15']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos15']?></td>
                                                    <td><a>area:</a><?=$data['area_bos16']?><br>
                                                        <a> hasil: </a><?=$data['hasil_bos16']?><br> 
                                                        <a>deskripsi:</a><?=$data['desk_bos16']?></td>
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