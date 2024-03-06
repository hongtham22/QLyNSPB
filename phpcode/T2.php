


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T2</title>
    <link rel="stylesheet" href="T2.css">
    <script>
            function reloadPage() {
                location.reload();
            }
    </script>
</head>
<body>
    <div class="sidebar">
        <ul>
            <hr>
            <?php
            // echo'
            // <script>
            // // Hàm này sẽ tải lại trang sau khi trang đã được tải hoàn toàn
            
    
            // // Gọi hàm reloadPage sau 5 giây sau khi trang đã được tải
            //     window.onload = function() {
            //         setTimeout(reloadPage, 2000); 
            // // Tải lại trang sau 5 giây
            //     }
            // </script>';
            
            session_start(); // Bắt đầu phiên session (lưu ý: bạn cần bắt đầu phiên session trước khi sử dụng các biến session)
            if(isset($_SESSION['username']) && isset($_SESSION['password'])){
                $username = $_SESSION['username']; // Lấy tên đăng nhập từ session
                $password = $_SESSION['password']; // Lấy mật khẩu từ session (lưu ý: không nên lưu mật khẩu vào session vì lý do bảo mật)
                // Sử dụng tên đăng nhập và mật khẩu ở đây theo ý của bạn
            
                echo '<li>Xin chào, ' . $_SESSION['username']. '</li>';
                echo '<li><a href="logout.php" target="t3">Đăng xuất</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/viewPhongBan.php" target="t3">Trang chủ</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/viewPhongBan.php" target="t3">Quản lí phòng ban</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/viewNhanVien.php" target="t3">Quản lí nhân viên</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/timkiem.php" target="t3">Tìm kiếm</a></li>';
                echo '<hr>';
            } else {
                // Nếu session không tồn tại, có thể chuyển hướng người dùng đến trang đăng nhập hoặc thực hiện các hành động khác tùy thuộc vào yêu cầu của bạn
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/login.php" target="t3">Đăng nhập</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/viewPhongBan_index.php" target="t3">Trang chủ</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/viewPhongBan_index.php" target="t3">Xem Phòng Ban</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/viewNhanVien_index.php" target="t3">Xem Nhân Viên</a></li>';
                echo '<hr>';
                echo '<li><a href="http://localhost/bt1/QLyNSPB/phpcode/timkiem.php" target="t3">Tìm kiếm</a></li>';
                echo '<hr>';
            }

            ?>
        </ul>
    </div>
</body>
</html>
