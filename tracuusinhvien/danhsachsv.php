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


                        <form action="index.php" method="get">
                            <div class="input-group m-bot15">
                                <input type="text" name="action" value="find_sv" class="hide">
                                <input type="text" name="findid" class="form-control" placeholder="Nhập mã sinh viên">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </span>
                            </div>
                        </form>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã sinh viên</th>
                                        <th>Tên sinh viên</th>
                                        <th>Lớp Sinh Hoạt</th>
                                        <th>Ngày sinh</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = $batdau + 1; ?>
                                    <?php foreach ($list_sv as $sv) : ?>
                                        <tr>
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $sv['masv']; ?></td>
                                            <td>
                                                <a href="?action=view_sv&amp;findid=<?php echo $sv['idsv']; ?>">
                                                    <?php echo htmlspecialchars($sv['tensv']); ?>
                                                </a>
                                            </td>
                                            <td><?php echo $sv['lopSH']; ?></td>
                                            <td><?php echo date('d-m-Y',strtotime($sv['ngaysinh'])); ?></td>
                                            <?php $i = $i + 1; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="dataTables_paginate paging_bootstrap pagination">

                                <ul> 
                                    <?php
                                    if ($_GET['page'] > 1) {
                                        echo '<li class="prev disabled" ><a href="index.php?page=' . ($_GET['page'] - 1) . '">← Prev</a></li>';
                                    }
                                    for ($t = 1; $t <= $sotrang; $t++) {
                                        echo '<li><a href="index.php?page=' . $t . '">' . $t . '</a></li>';
                                    }
                                    $page = $page + 1;
                                    if ($_GET['page'] < $sotrang) {
                                        echo '<li class="next"><a href="index.php?page=' . ($_GET['page'] + 1) . '">Next →"</a></li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </section>   

