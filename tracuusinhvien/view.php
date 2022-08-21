<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-primary">
                    <header class="panel-heading">
                        Thông tin sinh viên
                    </header>
                    <div class="panel-body">
                        <div class="btn-group" style="margin-bottom: 10px;float: right">
                            <button onclick="javascript:history.go(-1)" class="btn btn-danger">
                                <i class="glyphicon glyphicon-retweet"></i>
                                <span>Quay lại</span>
                            </button>
                        </div>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã sinh viên</th>
                                        <th>Tên sinh viên</th>
                                        <th>Lớp Sinh Hoạt</th>
                                        <th>Ngày sinh</th>
                                        <th>Trạng thái sổ đoàn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><?php echo $sv['masv']; ?></td>
                                        <td><?php echo $sv['tensv']; ?></td>
                                        <td><?php echo $sv['lopSH']; ?></td>
                                        <td><?php echo date('d-m-Y',strtotime($sv['ngaysinh'])); ?></td>
                                        <td style="text-align: center"><?php echo result_sodoanById($sv['masv']); ?></td>
                                    </tr>

                                </tbody>
                            </table>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </section>   

