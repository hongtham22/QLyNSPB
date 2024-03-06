<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $IDNV = $_POST["IDNV"];
    $hotenNV = $_POST["hotenNV"];
    $idPB = $_POST["idPB"];
    $diachiNV = $_POST["diachiNV"];

    // Kết nối đến cơ sở dữ liệu
    // $link = mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
    // mysqli_select_db($link, "qlnv");
    require_once("connect.php");

    // Sử dụng prepared statement để ngăn chặn SQL injection
    $update_query = "UPDATE nhanvien SET Hoten = ?, IDPB = ?, Diachi = ? WHERE IDNV = ?";
    $stmt = mysqli_prepare($link, $update_query);

    // Bind các tham số với các giá trị
    mysqli_stmt_bind_param($stmt, "ssss", $hotenNV, $idPB, $diachiNV, $idNV);

    // Thực hiện truy vấn cập nhật
    if (mysqli_stmt_execute($stmt)) {
        echo "Cập nhật thông tin nhân viên thành công";
        header("location: ./viewNhanVien.php");
    } else {
        echo "Lỗi khi cập nhật thông tin: " . mysqli_error($link);
    }

    // Đóng kết nối và statement
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
?>
