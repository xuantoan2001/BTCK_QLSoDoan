<?php

$title = "Quản lý sổ đoàn";

require('../model/database.php');
require('../model/SinhVien.php');
require('../model/sodoan.php');
include('../header.php');

$them = null;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$sotin1trang = 5;
$batdau = ($page - 1) * $sotin1trang;
$tongsotin = get_Intsodoan();
echo $sotrang = ceil($tongsotin / $sotin1trang);
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_sd';
    }
}

switch ($action) {
    case 'list_sd':
        $list_sd = get_sodoan($batdau, $sotin1trang);
        include('danhsach.php');
        break;
    case 'show_add_edit_form':
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        if ($id === null) {
            $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        }
        include('them_sd.php');
        break;
    case 'add_sd':
        $masv = $_POST['masv'];
        $tgnop = $_POST['nop'];
        $tgrut = $_POST['rut'];

        $sv = get_sinhvienByMa($masv);
        // Validate inputs
        if ($tgrut != null) {
            if (strtotime($tgnop) > strtotime($tgrut)) {
                $error = "Ngày rút không được nhỏ hơn ngày nộp";
                include ('../errors/error.php');
                return;
            }
        } else {
            if ($masv == null || $tgnop == null) {
                $error = 'Không được để trống mã sinh viên và ngày nộp!';
                include ('../errors/error.php');
                return;
            } elseif ($sv == null) {
                $error = "Sinh viên không tông tại!";
                include ('../errors/error.php');
                return;
            }
        }
        add_sodoan($masv, $tgnop, $tgrut);
        $list_sd = get_sodoan($batdau, $sotin1trang);
        $them = "Thêm thành công";
        include('danhsach.php');
        break;
    case 'update_sd':
        $idsd = $_POST['idsd'];
        $masv = $_POST['masv'];
        $tgnop = $_POST['nop'];
        $tgrut = $_POST['rut'];

//        
//        echo $idsd;
//        echo $masv;
//        echo $tgnop;
//        echo $tgrut;


        $sv = get_sinhvienByMa($masv);
        // Validate inputs
        if ($tgrut != null) {
            if (strtotime($tgnop) > strtotime($tgrut)) {
                $error = "Ngày rút không được nhỏ hơn ngày nộp";
                include ('../errors/error.php');
                die();
            }
        }
        if ($masv == null || $tgnop == null) {
            $error = 'Không được để trống mã sinh viên và ngày nộp!';
            include ('../errors/error.php');
            die();
        } elseif ($sv == null) {
            $error = "Sinh viên không tông tại!";
            include ('../errors/error.php');
            die();
        }
        
        update_sodoan($idsd, $masv, $tgnop, $tgrut);
        $list_sd = get_sodoan($batdau, $sotin1trang);
        $them = "Cập nhật thành công";
        include('danhsach.php');
        break;
    case 'delete':
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        delete_sodoan($id);
        break;
}

include ('../footer.php');
?>

