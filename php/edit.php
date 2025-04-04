<?php
require_once 'connect_database.php';
$_id = $_POST['id_sua'];
$_so_to = $_POST['soto'];
$_so_thua = $_POST['sothua'];
$_loai_dat = $_POST['loaidat'];
$_dien_tich = $_POST['dientich'];
$_tenchusdd = $_POST['tenchu'];

// cau lenh cap chinh
$_update = "UPDATE duynghia_quangnam 
SET shbando='$_so_to',
    shthua = '$_so_thua',
    mdsd ='$_loai_dat',
    dientich= '$_dien_tich',
    tenchusdd= '$_tenchusdd'
WHERE id = '$_id' ";
//thuc thi
pg_query($_update);
header("Location:show_data.php");
?>