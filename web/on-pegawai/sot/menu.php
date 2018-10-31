<?php include_once('../../_header.php');?>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                SOT
                            </div>
                            
                            <div class="panel-body">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#hu" data-toggle="tab">HOUSEKEEPING UMUM</a>
                                    </li>
                                    <li class=""><a href="#ppm" data-toggle="tab">PENANGANAN & PENYIMPANAN MATERIAL </a>
                                    </li>
                                    <li class=""><a href="#pp" data-toggle="tab">PERTOLONGAN PERTAMA</a>
                                    </li>
                                    <li class=""><a href="#listrik" data-toggle="tab">LISTRIK</a>
                                    </li>
                                    <li class=""><a href="#apd" data-toggle="tab">ALAT PELINDUNG DIRI</a>
                                    </li>
                                    <li class=""><a href="#pk" data-toggle="tab">PENCEGAHAN KEBAKARAN</a>
                                    </li>
                                    <li class=""><a href="#mp" data-toggle="tab">MESIN & PERALATAN</a>
                                    </li>
                                    <li class=""><a href="#bk" data-toggle="tab">BAHAN KIMIA</a>
                                    </li>
                                    <li class=""><a href="#ll" data-toggle="tab">LAIN-LAIN</a>
                                    </li>
                                    <li class=""><a href="#bos" data-toggle="tab">BEHAVIOR OBSERVATION SYSTEM (BOS Quality)</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="hu">
                                       <?php include_once ('HU/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="ppm">
                                        <?php include_once ('PPM/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="pp">
                                        <?php include_once ('PP/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="listrik">                                        <?php include_once ('LISTRIK/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="apd">
                                        <?php include_once ('APD/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="pk">
                                        <?php include_once ('PK/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="mp">
                                        <?php include_once ('MP/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="bk">
                                       <?php include_once ('BK/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="ll">
                                        <?php include_once ('LAINLAIN/data.php'); ?>
                                    </div>
                                    <div class="tab-pane fade" id="bos">
                                        <?php include_once ('Bos/data.php'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="../../_assets/js/jquery-1.11.1.js"></script>
    <script src="../../_assets/js/bootstrap.js"></script>