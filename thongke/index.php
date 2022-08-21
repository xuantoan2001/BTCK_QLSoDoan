<?php
$title = "Thống kê";

require('../model/database.php');
require('../model/SinhVien.php');
include '../header.php';

if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
 else {
    $page = 1;
}
$sotin1trang = 10;
$batdau = ($page - 1) * $sotin1trang;

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'danop';
      
    }
}
if ($action == 'danop') {
    $select = '';
    $list_sv = get_danop($batdau,$sotin1trang);
    $tongsotin = get_danopCount();
    $text = 'đã nộp sổ đoàn';
    echo $sotrang = ceil($tongsotin / $sotin1trang);
    include('thongke.php');
}else{
    $select = 'selected';
    $list_sv = get_chuanop($batdau,$sotin1trang);
    $tongsotin = get_chuanopCount();
    $text = 'chưa nộp sổ đoàn';
    echo $sotrang = ceil($tongsotin / $sotin1trang);
    include('thongke.php');
}

include '../footer.php';
?>