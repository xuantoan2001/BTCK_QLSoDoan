
<?php $title = "Lỗi"; ?>

<section id="main-content">
    <section class="wrapper">
        <div class="btn-group" style="margin-bottom: 10px;float: right">
            <button onclick="javascript:history.go(-1)" class="btn btn-danger">
                <i class="glyphicon glyphicon-retweet"></i>
                <span>Quay lại</span>
            </button>
        </div>
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-body">
                    <div id="AlertBox1" class="alert alert-danger">
                        <p><?php echo $error; ?></p>
                    </div>

                </div>
            </section>
        </div>
        <!--mini statistics start-->
    </section>
</section>
