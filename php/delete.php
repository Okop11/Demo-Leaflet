<?php
require_once 'connect_database.php';
// xoa doi tuong theo ID
$_ID = $_GET['id_xoa']; #4
// cau lenh XOA
$delete_data = "DELETE FROM duynghia_quangnam WHERE id = $_ID";
// THUC THI
pg_query($delete_data);
echo 'Xoá thành công';
// quay lại trang chinh
header("Location: show_data.php ");


?>