<?php include_once('../../_header.php');?>

<div class="box">
    <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Edit Data Incident</h4>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <!--   Kitchen Sink -->
                <div class="panel panel-default">
                    <div class="panel-heading pull-right">
                        <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevro n-left">Kembali</i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <?php
                        $id= @$_GET['id_inc'];
                        $sql_inc = mysqli_query($con, "SELECT * FROM tb_incident WHERE id_inc = '$id' ") or die (mysqli_error($con));
                        while($data= mysqli_fetch_array($sql_inc));                                                       
                        ?>
                          <form action="proses.php" method="post">
                            <div class="form-group">
                            <label for="area">Area</label>
                                <input type="text" name="area" id="area" value="<?=$data['area_inc']?>" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                            <label for="problem">Problem</label>
                                <input type="text" name="problem" id="problem" value="<?=$data['problem_inc']?>" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                            <label for="root">Rooot Cause</label>
                                <input type="text" name="rootcause" id="root" value="<?=$data['rootcause_inc']?>" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                            <label for="action">Action Plan</label>
                                <input type="text" name="action" id="action" value="<?=$data['actionplan_inc']?>" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                            <label for="pic">Pic</label>
                                <input type="text" nama="pic" id="pic" value="<?=$data['pic_inc']?>" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                            <label for="status">Status</label>
                                <input type="text" nama="text" id="status" value="<?=$data['status_inc']?>" class="form-control" required autofocus>
                            </div>
                            <div class="form-group pull-right">
                                <input type="Submit" nama="edit" value="Update" class="btn btn-success" required autofocus>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once ('../../_footer.php'); ?>
