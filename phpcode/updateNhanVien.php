<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Nhân Viên</title>
</head>
<body>
<?php
//if(isset($_GET['IDPB'])){
        // $phongbanvalue = $idPB;
        $idNV = $_GET['IDNV'];
        // $link = mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
        // mysqli_select_db($link, "qlnv");
        $socket = "E:\\XAMPP\\mysql\\mysql.sock";
        $link = mysqli_connect("localhost", "root", "", null, 3307, $socket)  or die ("Không thể kết nối SQL");
        //Lựa chọn cơ sở dữ liệu
        mysqli_select_db($link,"qlnv");
    
        // Check for empty values
       
            // Use prepared statement to prevent SQL injection
            $check_query = "SELECT * FROM nhanvien WHERE IDNV = '$idNV'";
            $check_result = mysqli_query($link, $check_query);
            $row = mysqli_fetch_assoc($check_result);
    
            // Kiểm tra xem IDPB đã tồn tại trong bảng phongban hay không
            if ($row > 0) {
                $IDNV = $row["IDNV"];
                $Hoten = $row["Hoten"];
                $IDPB = $row["IDPB"];
                $Diachi = $row["Diachi"];
                // Nếu IDPB đã tồn tại, thực hiện cập nhật thông tin
               ;
            } else {
                // Nếu IDPB không tồn tại, thực hiện thêm mới
                
                    echo "Lỗi khi thêm mới thông tin: " . mysqli_error($link);
                
            }
        
//}
?>
    <h2>Cập nhật thông tin nhân viên</h2>
    

    <form action="xuliUpdate.php" method="post">

        <label for="id">Id NV:</label>
        <input type="text" id="id" name="idNV" value="<?php echo $IDNV; ?>" readonly required><br>

        <label for="hoten">Họ Tên NV:</label>
        <input type="text" id="hoten" name="hotenNV" value="<?php echo $Hoten; ?>" readonly required><br>

        <label for="phongBan">ID Phòng ban:</label>
        <input type="text" id="phongBan" name="idPB" value="<?php echo $IDPB; ?>" readonly required><br>
        <label for="diachi">Địa chỉ:</label>
        <input type="text" id="diachi" name="diachiNV" value="<?php echo $Diachi; ?>" readonly required><br>

        

        <input type="submit" value="Sửa thông tin">
    </form>

    

</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Nhân Viên</title>
</head>
<body>
<?php
$idNV = $_GET['IDNV'];
$link = mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
mysqli_select_db($link, "qlnv");

// Lấy thông tin nhân viên từ cơ sở dữ liệu
$check_query = "SELECT * FROM nhanvien WHERE IDNV = '$idNV'";
$check_result = mysqli_query($link, $check_query);
$row = mysqli_fetch_assoc($check_result);

// Lấy danh sách tất cả các phòng ban
$query_phongban = "SELECT * FROM phongban";
$result_phongban = mysqli_query($link, $query_phongban);
?>

<h2>Cập nhật thông tin nhân viên</h2>

<form action="xuliUpdateNV.php?IDNV=<?php echo $row["IDNV"];?>" method="post">
    <label for="id">Id NV:</label>
    <input type="text" id="id" name="IDNV" value="<?php echo $row['IDNV']; ?>" readonly required><br>

    <label for="hoten">Họ Tên NV:</label>
    <input type="text" id="hoten" name="hotenNV" value="<?php echo $row['Hoten']; ?>" required><br>

    <label for="phongBan"> Phòng ban:</label>
    <select id="phongBan" name="idPB" required>
        <?php
        // Hiển thị danh sách các phòng ban trong combobox
        while ($phongban = mysqli_fetch_assoc($result_phongban)) {
            echo '<option value="' . $phongban['IDPB'] . '"';
            // Nếu IDPB của nhân viên trùng với IDPB trong danh sách, chọn tùy chọn đó
            if ($phongban['IDPB'] == $row['IDPB']) {
                echo ' selected';
            }
            echo '>' . $phongban['Tenpb'] . '</option>';
        }
        ?>
    </select><br>

    <label for="diachi">Địa chỉ:</label>
    <input type="text" id="diachi" name="diachiNV" value="<?php echo $row['Diachi']; ?>"  required><br>

    <input type="submit" value="Sửa thông tin">
</form>

</body>
</html>

<?php
mysqli_close($link);
?>
