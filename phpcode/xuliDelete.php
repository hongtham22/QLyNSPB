<?php
// Kiểm tra xem nút xóa đã được bấm chưa
if (isset($_POST['delete'])) {
    // Lấy danh sách nhân viên được chọn từ mảng $_POST['selectedEmployees']
    $selectedEmployees = $_POST['selectedEmployees'];

    // Kiểm tra xem có nhân viên được chọn không
    if (!empty($selectedEmployees)) {
       
        require_once("connect.php");
        
        $deletelist = implode("','", $selectedEmployees); 
   
    $sql = "DELETE FROM nhanvien WHERE IDNV IN ('$deletelist')";
    $rsl = mysqli_query($link, $sql);
    
        if ($rsl) {
            echo "Đã xóa nhân viên thành công!";
            header("location: ./viewNhanVien.php"); // Chuyển hướng sau khi xóa
        } else {
            echo "Xóa nhân viên thất bại!";
        }

        // Đóng kết nối
        mysqli_close($link);
    } else {
        echo "Không có nhân viên được chọn!";
    }
}
?>
