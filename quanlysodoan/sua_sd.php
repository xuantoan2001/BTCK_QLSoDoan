<?php

$title = "Sửa sổ đoàn";

require('../model/database.php');
require('../model/SinhVien.php');
require('../model/sodoan.php');
include('../header.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $sd = get_sodoanById($id);
        
        $idsd = $sd['idsd'];
        $masv = $sd['masv'];
        $tgnop = $sd['tgnop'];
        $tgrut = $sd['tgrut'];

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
                        Cập nhật sổ đoàn
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form role="form" action="index.php" method="POST">
                                <input type="hidden" name="action" value="update_sd" class="hide">
                                <input type="hidden" name="idsd" value="<?php echo $idsd; ?>" >
                                <div class="form-group">
                                    <label for="exampleInput1">Mã sinh viên</label>
                                    <input type="text" name ="masv" value="<?php echo $masv; ?>" class="form-control"  placeholder="Mã sinh viên">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput2">Ngày nộp</label>
                                    <input type="date" name ="nop"  value="<?php echo $sd['tgnop']; ?>" class="form-control" placeholder="Ngày nộp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput3">Ngày rút</label>
                                    <input type="date" name ="rut" value="<?php echo $sd['tgrut']; ?>" class="form-control" placeholder="Ngày rút">
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
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