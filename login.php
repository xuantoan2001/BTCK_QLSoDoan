<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Đăng nhập</title>

    <!--Core CSS -->
    <link href="public/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/bootstrap-reset.css" rel="stylesheet">
    <link href="public/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="public/css/style.css" rel="stylesheet">
    <link href="public/css/style-responsive.css" rel="stylesheet" />

   
</head>

  <body class="login-body" >

    <div class="container">

      <form class="form-signin"  method="post" action="login.php">
          <h2 class="form-signin-heading" style="background-color: #0085FF;border-bottom: 0px">Trang đăng nhập</h2>
        <?php include('errors.php'); ?>
          <div class="login-wrap" style="background: white">
            
            <div class="user-login-info">
                <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
            </div>
        
            <button style="background-color: #0085FF" class="btn btn-lg btn-login btn-block" name="login_user" type="submit">Đăng nhập</button>

            <div class="registration">
                Chưa có tài khoản?
                <a class="" href="register.php" style="color: #428bca">
                    Đăng kí
                </a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    
    <script src="public/js/jquery.js"></script>
    <script src="public/bs3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(function () {
        $('#AlertBox1').removeClass('hide');
        $('#AlertBox1').delay(1500).slideUp(500);
    });
</script>
  </body>
</html>
