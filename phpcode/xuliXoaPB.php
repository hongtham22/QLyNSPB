<?php
// Kiểm tra xem nút xóa đã được bấm chưa
if (isset($_POST['delete'])) {
    // Lấy danh sách nhân viên được chọn từ mảng $_POST['selectedEmployees']
    $selectedPB = $_POST['selectedPB'];

    // Kiểm tra xem có nhân viên được chọn không
    if (!empty($selectedPB)) {
        // Khai báo kết nối
        // $link = mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
        // // Lựa chọn cơ sở dữ liệu
        // mysqli_select_db($link, "qlnv");
        require_once("connect.php");
        // Lặp qua danh sách nhân viên được chọn và thực hiện truy vấn xóa cho từng nhân viên
        foreach ($selectedPB as $idPB) {
            // Thực hiện truy vấn xóa cho nhân viên với IDNV là $idNV
           // $rsl = mysqli_query($link, "DELETE FROM phongban WHERE IDPB = '$idPB'");
            // Truy vấn xóa nhân viên liên kết với phòng ban
            $rsl1 = mysqli_query($link, "DELETE FROM nhanvien WHERE IDPB = '$idPB'");
            $rsl2 = mysqli_query($link, "DELETE FROM phongban WHERE IDPB = $idPB");
            // $deleteNhanVienQuery = "DELETE FROM nhanvien WHERE IDPB = $idPB";
            // mysqli_query($link, $deleteNhanVienQuery);

            // Truy vấn xóa phòng ban
            // $deletePhongBanQuery = "DELETE FROM phongban WHERE IDPB = $idPB";
            // mysqli_query($link, $deletePhongBanQuery);

        }

        // Kiểm tra xem truy vấn xóa đã thành công hay không
        if ($rsl2) {
            echo "Đã xóa phòng ban thành công!";
            header("location: ./viewPhongBan.php"); // Chuyển hướng sau khi xóa
        } else {
            echo "Xóa phòng ban thất bại!";
        }

        // Đóng kết nối
        mysqli_close($link);
    } else {
        echo "Không có phòng ban được chọn!";
    }
}
?>
