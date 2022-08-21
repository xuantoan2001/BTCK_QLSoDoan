<?php
function get_sinhvien($from, $sotin1trang) {
    global $db;
    $query = 'SELECT * FROM sinhvien LIMIT '.$from.','.$sotin1trang;
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sv = $statement->fetchAll();
    $statement->closeCursor();
    return $list_sv;
}
function get_Intsinhvien() {
    global $db;
    $query = 'SELECT * FROM sinhvien';
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sv = $statement->fetchAll();
    $statement->closeCursor();
    $sl = sizeof($list_sv);
    return $sl;
}
function get_sinhvienByID($findid) {
    global $db;
    $query = 'SELECT * FROM sinhvien WHERE idsv = :id';
    
     $statement = $db->prepare($query);
        $statement->bindValue(':id', $findid);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
}
function get_sinhvienByMa($findid) {
    global $db;
    $query = 'SELECT * FROM sinhvien WHERE masv = :id';
    
     $statement = $db->prepare($query);
        $statement->bindValue(':id', $findid);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
}
function get_chuanop($from, $sotin1trang) {
    global $db;
    $query = 'SELECT * FROM sinhvien WHERE masv NOT IN (SELECT masv FROM sodoan) LIMIT '.$from.','.$sotin1trang;
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sv = $statement->fetchAll();
    $statement->closeCursor();
    return $list_sv;
}
function get_danop($from, $sotin1trang) {
    global $db;
    $query = 'SELECT * FROM sinhvien WHERE masv IN (SELECT masv FROM sodoan) LIMIT '.$from.','.$sotin1trang;
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sv = $statement->fetchAll();
    $statement->closeCursor();
    return $list_sv;
}
function get_danopCount() {
    global $db;
    $query = 'SELECT * FROM sinhvien WHERE masv IN (SELECT masv FROM sodoan)';
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sv = $statement->fetchAll();
    $statement->closeCursor();
    $sl = sizeof($list_sv);
    return $sl;
}
function get_chuanopCount() {
     global $db;
    $query = 'SELECT * FROM sinhvien WHERE masv NOT IN (SELECT masv FROM sodoan)';
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sv = $statement->fetchAll();
    $statement->closeCursor();
    $sl = sizeof($list_sv);
    return $sl;
}
?>

