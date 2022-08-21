
<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel panel-primary">
                    <header class="panel-heading">
                        Danh sánh sinh viên nộp sổ đoàn
                    </header>
                    <div class="panel-body">
                        <?php if ($them != null) : ?>
                            <div id="AlertBox" class="alert alert-success hide">
                                <?php
                                echo $them;
                                echo $them = null;
                                ?>
                            </div>
                        <?php endif ?>
                        <div class="btn-group" style="margin-bottom: 10px;float: right">
                            <a href="them_sd.php" class="btn btn-success">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>Thêm mới</span>
                            </a>
                        </div>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã sinh viên</th>
                                        <th>Tên sinh viên</th>
                                        <th>Thời gian nộp</th>
                                        <th>Thời gian rút</th>
                                        <th colspan="2">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = $batdau + 1; ?>
                                    <?php foreach ($list_sd as $sd) : ?>
                                        <tr id="row<?php echo $sd['idsd']; ?>">
                                            <td><?php echo $i ?></td>
                                            <td><?php echo $sd['masv']; ?></td>
                                            <td><?php echo $str = get_tensvsodoanById($sd['masv']); ?></td>
                                            <td><?php echo date('d-m-Y', strtotime($sd['tgnop'])); ?></td>
                                            <td>
                                                <?php
                                                    if($sd['tgrut'] == '0000-00-00')
                                                        echo 'Chưa rút';
                                                    else
                                                        echo date('d-m-Y', strtotime($sd['tgrut'])); 
                                                ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning" href="sua_sd.php?id=<?php echo $sd['idsd']; ?>">
                                                    <i class="glyphicon glyphicon-edit"></i>
                                                    <span>Sửa</span>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="." method="POST" id="delete">
                                                    <input type="hidden" name="action" value="delete">
                                                    <input type="hidden" name="id"
                                                           value="<?php echo $sd['idsd']; ?>">
                                                    <button class="btn btn-danger" type="submit">
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                        <span>Xóa</span>
                                                    </button>
                                                </form>
                                            </td>
                                            <?php $i = $i + 1; ?>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="dataTables_paginate paging_bootstrap pagination">

                                <ul> 
                                    <?php
                                    if ($page > 1) {
                                        echo '<li class="prev disabled" ><a href="index.php?page=' . ($page - 1) . '">← Prev</a></li>';
                                    }
                                    for ($t = 1; $t <= $sotrang; $t++) {
                                        echo '<li><a href="index.php?page=' . $t . '">' . $t . '</a></li>';
                                    }

                                    if ($page < $sotrang) {
                                        echo '<li class="next"><a href="index.php?page=' . ($page + 1) . '">Next →"</a></li>';
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