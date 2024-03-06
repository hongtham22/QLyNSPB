 
<?php

$username;
$password;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username= $_POST["name"];
    $password = $_POST["pass"];


//     $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
// //Lựa chọn cơ sở dữ liệu
//     mysqli_select_db($link,"qlnv");
require_once("connect.php");

    $query = "select * from admin where username = '$username' and password = '$password'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
        session_start(); // Bắt đầu phiên session
        $_SESSION['username'] = $row["username"]; // Lưu tên đăng nhập vào session
        $_SESSION['password'] = $row["password"]; // Lưu mật khẩu vào session (lưu ý: không nên lưu mật khẩu vào session vì lý do bảo mật)
        echo '<script>window.parent.refreshlogin();</script>';
    //    header("Location: ./viewPhongBan.php"); // Chuyển hướng đến viewPhongBan.php

    } else {
        echo '<p style="color:red">Tên đăng nhập hoặc mật khẩu không đúng!</p>';
    }
    
}
mysqli_free_result($result);
mysqli_close($link);
?>