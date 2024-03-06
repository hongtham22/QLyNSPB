<?php
// Bắt đầu hoặc khôi phục phiên session
session_start();

// Hủy tất cả các biến session
session_unset();

// Hủy phiên session
session_destroy();
echo '<script>window.parent.refreshlogout();</script>';

// Chuyển hướng người dùng đến trang đăng nhập hoặc trang chính (tùy thuộc vào yêu cầu của bạn)
header("Location: viewPhongBan_index.php"); // Chuyển hướng đến trang đăng nhập
// header("Location: index.php"); // Chuyển hướng đến trang chính

// Kết thúc kịch bản PHP

exit();
?>
