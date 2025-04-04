<?php
require_once 'connect_database.php';
// lay id_sua
$_ID = $_GET['id_sua'];
//cau lenh truy van
$_truyvan = "SELECT*FROM duynghia_quangnam WHERE id = $_ID";
$_thucthi = pg_query($_truyvan);
$_row= pg_fetch_assoc($_thucthi);
?>

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
    <div class="container bg-info-subtle" style="height:250px">
        <div class="text-center fw-bold text-danger fs-2"style="text-align:center; ">CẬP NHẬT THÔNG TIN THỬA ĐẤT</div>
        <form action="edit.php" method="POST" class="row mt-1 mb-1">
     <!--  id -->
     <input type="hidden" name="id_sua" value="<?php echo $_ID;?>">
      
        <!--     soto -->
            <div class="col-4">
                <label for = "soto" class="form-label">Nhập số tờ</label>
                <input type="text" class="form-control" id="soto" name="soto" placeholder="<?php echo $_row['shbando'];?>">
            </div>
           <!--  sothua -->
            <div class="col-4">
                <label for = "sothua" class="form-label">Nhập số thửa</label>
                <input type="text" class="form-control" id="sothua" name="sothua" placeholder="<?php echo $_row['shthua'];?>">
            </div>
           <!--  loaidat -->
           <div class="col-4">
            <label for = "loaidat" class="form-label">Nhập loại đất</label>
            <input type="text" class="form-control" id="loaidat" name="loaidat" placeholder="<?php echo $_row['mdsd'];?>">
        </div>    
            <!--  dientich -->
            <div class="col-4">
                <label for = "dientich" class="form-label">Nhập diện tích</label>
                <input type="text" class="form-control" id="dientich" name="dientich" placeholder="<?php echo $_row['dientich'];?>">
            </div>               
           <!-- tenchu -->
           <div class="col-8">
            <label for = "tenchu" class="form-label">Nhập tên chủ sử dụng đất</label>
            <input type="text" class="form-control" id="tenchu" name="tenchu" placeholder="<?php echo $_row['tenchusdd'];?>">
        </div>
        <div class="mt-1 mb-1"></div>
      

      <!--   nút xử lý -->
      <div clas="col-8 mt-1 mb-1" style="margin-left:500px">
        <button class="btn btn-primary" type="submit">Chỉnh sửa</button>

      </div>
        </form>


        
    </div>
</body>
</html>