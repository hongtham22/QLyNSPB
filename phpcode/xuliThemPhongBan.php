<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $IDPB = $_POST["idPB"];
    $tenPB = $_POST["tenPB"];
    $mota = $_POST["mota"];

    // $link = mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
    // mysqli_select_db($link, "qlnv");
    require_once("connect.php");

    // Check for empty values
    if ($IDPB == "" || $tenPB == "" || $mota == "") {
        echo "Vui lòng nhập đầy đủ thông tin";
    } else {
        // Use prepared statement to prevent SQL injection
        $check_query = "SELECT * FROM phongban WHERE IDPB = '$IDPB'";
        $check_result = mysqli_query($link, $check_query);

        // Kiểm tra xem IDPB đã tồn tại trong bảng phongban hay không
        if (mysqli_num_rows($check_result) > 0) {
            // Nếu IDPB đã tồn tại, thực hiện cập nhật thông tin
            echo '<script type="text/javascript">
            alert("Vui lòng nhập IDPB khác");
            window.history.back();
             </script>';
        } else {
            // Nếu IDPB không tồn tại, thực hiện thêm mới
            $insert_query = "INSERT INTO phongban (IDPB, Tenpb, Mota) VALUES ('$IDPB', '$tenPB', '$mota')";
            if (mysqli_query($link, $insert_query)) {
                echo "Thêm mới thông tin thành công";
                header("location: ./viewPhongBan.php");
            } else {
                echo "Lỗi khi thêm mới thông tin: " . mysqli_error($link);
            }
        }
    }

    mysqli_close($link);
}
?>
