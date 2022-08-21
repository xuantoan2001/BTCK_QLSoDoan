<?php
function get_sodoan($from, $sotin1trang) {
    global $db;
    $query = 'SELECT * FROM sodoan LIMIT '.$from.','.$sotin1trang;
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sd = $statement->fetchAll();
    $statement->closeCursor();
    return $list_sd;
}
function get_Intsodoan() {
    global $db;
    $query = 'SELECT * FROM sodoan';
    $statement = $db->prepare($query);
    $statement->execute();
    $list_sd = $statement->fetchAll();
    $statement->closeCursor();
    $sl = sizeof($list_sd);
    return $sl;
}
function get_tensvsodoanById($findid) {
    global $db;
    $query = 'SELECT * FROM sinhvien
              WHERE masv = :findid';    
    $statement = $db->prepare($query);
    $statement->bindValue(':findid', $findid);
    $statement->execute();    
    $sv = $statement->fetch();
    $statement->closeCursor();    
    $tensv = $sv['tensv'];
    return $tensv;
}
function get_sodoanById($findid) {
    global $db;
    $query = 'SELECT * FROM sodoan
              WHERE idsd = :findid';    
    $statement = $db->prepare($query);
    $statement->bindValue(':findid', $findid);
    $statement->execute();    
    $sd = $statement->fetch();
    $statement->closeCursor();    
    return $sd;
}
function result_sodoanById($findid) {
    global $db;
    $query = 'SELECT * FROM sodoan
              WHERE masv = :findid';    
    $statement = $db->prepare($query);
    $statement->bindValue(':findid', $findid);
    $statement->execute();    
    $sd = $statement->fetch();
    $statement->closeCursor();    
    
    if($sd != null)
        return "Đã nộp";
    else
        return "Chưa nộp";
}
function add_sodoan($masv, $tgnop, $tgrut) {
    global $db;
    $query = 'INSERT INTO sodoan
                 (idsd,masv, tgnop, tgrut)
              VALUES
                 (:idsd,:masv, :tgnop, :tgrut)';
    try
    {
        $statement = $db->prepare($query);
        $statement->bindValue(':idsd', null);
        $statement->bindValue(':masv', $masv);
        $statement->bindValue(':tgnop', $tgnop);
        $statement->bindValue(':tgrut', $tgrut);
        $statement->execute();
        $statement->closeCursor();
    } catch (Exception $ex) {
        $error = $ex;
            include('../../errors/error.php');
    }
    
}
function delete_sodoan($sd_id) {
    global $db;
    $query = 'DELETE FROM sodoan
              WHERE idsd = :sd_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':sd_id', $sd_id);
    $statement->execute();
    $statement->closeCursor();
}

function update_sodoan($id,$masv, $tgnop, $tgrut){
    global $db;
    $query = 'UPDATE sodoan SET masv = :masv,
            tgnop = :nop,
            tgrut = :rut
        WHERE sodoan.idsd = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(':masv', $masv);
        $statement->bindValue(':nop', $tgnop);
        $statement->bindValue(':rut', $tgrut);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $statement->closeCursor();
}

?>

