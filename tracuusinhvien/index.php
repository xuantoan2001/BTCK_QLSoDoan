<?php
$title = "Tra cứu sinh viên";

require('../model/database.php');
require('../model/SinhVien.php');
require('../model/sodoan.php');
include '../header.php';

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
 else {
    $page = 1;
}
$sotin1trang = 5;
$batdau = ($page - 1) * $sotin1trang;
$tongsotin = get_Intsinhvien();
echo $sotrang = ceil($tongsotin / $sotin1trang);
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_sv';
    }
}
if ($action == 'list_sv') {
    $list_sv = get_sinhvien($batdau,$sotin1trang);
    include('danhsachsv.php');
}elseif ($action == 'view_sv') {
    $id = filter_input(INPUT_GET, 'findid', 
                FILTER_VALIDATE_INT);
    $sv = get_sinhvienByID($id);
    include('view.php');
}elseif ($action == 'find_sv') {
    $id = filter_input(INPUT_GET, 'findid', 
                FILTER_VALIDATE_INT);
    $sv = get_sinhvienByMa($id);
    include('view.php');
}

include '../footer.php';
?>

                            
