<?php
define("PG_DB", "webgis_t11_2024"); // sửa tên database
define("PG_HOST","localhost");
define("PG_USER","postgres");
define("PG_PORT","5432");// 
define("PG_PASS", "0353164470");// sửa mật khẩu
$dbcon=pg_connect("dbname=".PG_DB." user=".PG_USER." password=".PG_PASS." host=".PG_HOST." port=".PG_PORT);

//echo "Kết nối thành công";
?>
