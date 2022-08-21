<?php $title = "Trang chủ"; ?>
<?php include '../header.php'; ?>
<section id="main-content">
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <div class="panel-heading">
                    <?php if (isset($_SESSION['success'])) : ?>
                        <div id="AlertBox" class="alert alert-success hide">
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                    ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="panel-body">
                    <h3>Xin chào <strong class="text-primary"><?php echo $_SESSION['username']; ?></strong> !</h3>
                </div>
            </section>
        </div>
        <!--mini statistics start-->
        
        
    </section>
</section>
<?php include '../footer.php'; ?>
