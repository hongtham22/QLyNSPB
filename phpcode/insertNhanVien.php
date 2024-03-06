<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Nhân viên Phòng ban</title>
</head>
<body>
<?php
//if(isset($_GET['IDPB'])){
        // $phongbanvalue = $idPB;
        $idPB = $_GET['IDPB'];
        // $link = mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
        // mysqli_select_db($link, "qlnv");
        $socket = "E:\\XAMPP\\mysql\\mysql.sock";
        $link = mysqli_connect("localhost", "root", "", null, 3307, $socket)  or die ("Không thể kết nối SQL");
        //Lựa chọn cơ sở dữ liệu
        mysqli_select_db($link,"qlnv");

        // Lấy thông tin nhân viên từ cơ sở dữ liệu
        $check_query = "SELECT * FROM phongban WHERE IDPB = '$idPB'";
        $check_result = mysqli_query($link, $check_query);
        $row = mysqli_fetch_assoc($check_result);

        //}
?>
    <h2>Thêm Nhân viên mới</h2>

    <form action="xuliThemNhanVien.php?IDPB=<?php echo $row["IDPB"];?>" method="post">

        <label for="id">Id NV:</label>
        <input type="text" id="id" name="idNV" required><br>

        <label for="hoten">Họ Tên NV:</label>
        <input type="text" id="hoten" name="hotenNV" required><br>

        <label for="phongBan"> Phòng ban:</label>
        <input type="text" id="tenpb" name="tenpb" value="<?php echo $row["Tenpb"]; ?>" readonly><br>
        <label for="diachi">Địa chỉ:</label>
        <input type="text" id="diachi" name="diachiNV" required><br>

        <!-- Thêm các trường dữ liệu khác cần thiết -->

        <input type="submit" value="Thêm Nhân viên">
    </form>

    <?php require_once('viewNhanVienPhongBan.php'); ?>

</body>
</html>
