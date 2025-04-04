<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- khai bao thu vien bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
</head>
<body>
    <div class="container bg-light">
        <div class="text-center fw-bold fs-3 text-danger">THÔNG TIN THUỘC TÍNH THỬA ĐẤT</div>
      <!--   tao bang de dua du lieu vao -->
      <table class="table table-bordered text-center table-hover">
        <thead class="table-warning">
            <tr>
                <th style="width:10%">STT</th>
                <th style="width:10%">Số tờ</th>
                <th style="width:10%">Số thửa</th>
                <th style="width:15%">Loại đất</th>
                <th style="width:15%">Diện tích</th>
                <th style="width:20%">Tên chủ SDĐ</th>
                <th style="width:10%">#</th>
            </tr>
        </thead>


        <tbody>
   






        <!-- xuly -->
<?php
//ket noi csdl
require_once 'connect_database.php';
// cau lenh truy van
$_SQL_truyvan = "SELECT* FROM duynghia_quangnam order by id" ;
// thuc thi cau lenh
$_thucthi = pg_query($_SQL_truyvan) or die ('Lỗi câu truy vấn');
// lay du lieu va hien thi
while ($_row = pg_fetch_assoc($_thucthi)){
   // echo "STT: ".$_row['id']."<br>".
   // "Số tờ: ".$_row['shbando']."<br>".
   // "Số thửa: ".$_row['shthua']."<br>".
   // "Loại đất: ".$_row['mdsd']."<br>".
   // "Diện tích: ".$_row['dientich']."<br>".
   // "Tên chủ: ".$_row['tenchusdd']."<br>". "<hr>"
    
  //  ;
?>  
  <tr>
    <td> <?php echo $_row['id']  ; ?></td>
    <td> <?php echo $_row['shbando']  ; ?></td>
    <td> <?php echo $_row['shthua']  ; ?></td>
    <td> <?php echo $_row['mdsd']  ; ?></td>
    <td> <?php echo $_row['dientich']  ; ?></td>
    <td> <?php echo $_row['tenchusdd']  ; ?></td>
    <td>
       <!--  sửa thông tin -->
       <a  href="form_edit.php?id_sua=<?php echo $_row['id'] ; ?>" class="btn btn-warning" >Sửa</a>
       <!-- xoá -->
       <a  onclick ="return confirm('Bạn có chắc chắn xoá không ?')" href="delete.php?id_xoa=<?php echo $_row['id'] ; ?>" class="btn btn-danger" >Xoá</a>


    </td>
</tr>

<?php
}
?>




</tbody>

</table>
    </div>
    
</body>
</html>