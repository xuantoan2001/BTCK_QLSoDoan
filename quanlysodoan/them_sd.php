<?php

$title = "Thêm sổ đoàn";

require('../model/database.php');
require('../model/SinhVien.php');
require('../model/sodoan.php');
include('../header.php');
?>


<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-body">
                    <div class="btn-group" style="margin-bottom: 10px;float: right">
                        <a href="index.php?page=1" class="btn btn-danger">
                            <i class="glyphicon glyphicon-retweet"></i>
                            <span>Quay lại</span>
                        </a>
                    </div>
                </div>
                <section class="panel">
                    <header class="panel-heading">
                        Thêm sổ đoàn
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="index.php" method="POST">
                                <input type="hidden" name="action" value="add_sd">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã sinh viên</label>
                                    <input type="text" name ="masv" value="" class="form-control"  placeholder="Mã sinh viên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ngày nộp</label>
                                    <input type="date" name ="nop" value="" class="form-control" placeholder="Ngày nộp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ngày rút</label>
                                    <input type="date" name ="rut" value="" class="form-control" placeholder="Ngày rút">
                                </div>
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </form>
                        </div>

                    </div>
                </section>

            </div>
        </div>
    </section>                               
    <?php

    include '../footer.php';
    ?>

