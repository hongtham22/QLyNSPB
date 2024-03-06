<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the form data from the POST request
$IDPB = $_POST['txtIDPB'];
$tenpb = $_POST['txtTenpb'];
$mota = $_POST['txtMota'];

// Establish a database connection
// $link = mysqli_connect("localhost", "root", "") or die('Khong the ket noi den CSDL');
// mysqli_select_db($link, "qlnv");
require_once("connect.php");

// Update the record in the database
$query = "UPDATE PhongBan SET Tenpb='$tenpb', Mota='$mota' WHERE IDPB='$IDPB'";
$result = mysqli_query($link, $query);

// Check if the update was successful
if ($result) {
    echo "Cập nhật thông tin phòng ban thành công!";
    header("location: ./viewPhongBan.php");
} else {
    echo "Cập nhật thông tin phòng ban thất bại!";
}

// Close the database connection
mysqli_close($link);
}
?>
