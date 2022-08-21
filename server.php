<?php

session_start();

// initializing variables
$username = "";
$email = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'quanlysodoan');

// đăng ký tài khoản
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // kiểm tra đã nhập thông tin
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) {
        array_push($errors, "Chưa nhập tài khoản");
    }
    if (empty($email)) {
        array_push($errors, "Chưa nhập Email");
    }
    if (empty($password_1)) {
        array_push($errors, "Chưa nhập mật khẩu");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Mật khẩu không trùng khớp");
    }

    // kiểm tra trùng lặp tk và mk
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Tài khoản đã tồn tại");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email đã tồn tại");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (username, email, password) 
          VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        //$_SESSION['success'] = "You are now logged in";
        header('location: ../BTCK_QLSoDoan/login.php');
    }
}

// đăng nhập
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Nhập tài khoản");
    }
    if (empty($password)) {
        array_push($errors, "Nhập mật khẩu");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Đăng nhập thành công";
            header('location: trangchu/index.php');
        } else {
            array_push($errors, "Sai tài khoản hoặc mật khẩu");
        }
    }
}

?>