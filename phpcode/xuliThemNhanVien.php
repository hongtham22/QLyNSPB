
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $IDNV = $_POST["idNV"];
    $hoten = $_POST["hotenNV"];
    //$Tenpb = $_POST["tenpb"];
    $diachi = $_POST["diachiNV"];
    $idPB = $_GET['IDPB'];

// Loại bỏ dòng này: $Tenpb = $_POST["tenpb"];

// Lấy Tenpb từ cơ sở dữ liệu dựa trên IDPB


    // $socket = "E:\\XAMPP\\mysql\\mysql.sock";
    // $link = mysqli_connect("localhost", "root", "", null, 3307, $socket)  or die ("Không thể kết nối SQL");
//     $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
// //Lựa chọn cơ sở dữ liệu
//     mysqli_select_db($link,"qlnv");

require_once("connect.php");

    // Check for empty values
    if($IDNV == "" || $hoten == "" ||  $diachi == "") {
        echo "Vui lòng nhập đầy đủ thông tin";
    } else {
        // Use prepared statement to prevent SQL injection
        $sql_test = "SELECT * FROM nhanvien WHERE IDNV = ?";
        $stmt = mysqli_prepare($link, $sql_test);
        mysqli_stmt_bind_param($stmt, "s", $IDNV);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if(mysqli_stmt_num_rows($stmt) != 0) {
            // echo '<script type="text/javascript">alert("Vui lòng nhập IDNV khác");</script>';
            // echo "Vui lòng nhập IDNV khác";
            echo '<script type="text/javascript">
            alert("Vui lòng nhập IDNV khác");
            window.history.back();
             </script>';
        } else {
            // $check_query = "SELECT * FROM phongban WHERE Tenpb = '$Tenpb'";
            // $check_result = mysqli_query($link, $check_query);
            // $row = mysqli_fetch_assoc($check_result);

            // $phongban = $row["IDPB"];

            $sql = "INSERT INTO nhanvien (IDNV, Hoten, IDPB, Diachi) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($link, $sql);
            mysqli_stmt_bind_param($stmt, "ssss", $IDNV, $hoten, $idPB, $diachi);

            if (mysqli_stmt_execute($stmt)) {
                echo "Thêm nhân viên thành công";
                header("location: ./viewNhanVienPhongBan.php?IDPB=".$idPB);
                exit();
            } else {
                echo "Lỗi: " . mysqli_error($link);
            }
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($link);
}
?>