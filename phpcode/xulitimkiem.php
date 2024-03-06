<?php

// $socket = "E:\\XAMPP\\mysql\\mysql.sock";
// $link = mysqli_connect("localhost", "root", "", null, 3307, $socket)  or die ("Không thể kết nối SQL");
// $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
// //Lựa chọn cơ sở dữ liệu
// mysqli_select_db($link,"qlnv");
require_once("connect.php");
// Nhận dữ liệu từ form tìm kiếm
$criteria = $_POST['criteria'];
$keyword = $_POST['keyword'];


// Xử lý truy vấn tìm kiếm theo tiêu chí
$sql = "SELECT * FROM nhanvien WHERE $criteria LIKE '%$keyword%'";
$result = mysqli_query($link, $sql);


// Hiển thị kết quả tìm kiếm
if ($result->num_rows > 0) {
    // while($row = $result->fetch_assoc()) {
    //     echo "ID: " . $row["id"]. " - Họ Tên: " . $row["hoten"]. " - Địa Chỉ: " . $row["diachi"]. "<br>";
    // }
    echo '<table border="1" width="100%">';
    echo '<caption style="font-size: 30px">Danh Sách Nhân Viên</caption>';
    echo '<TR><TH>ID Nhân viên</TH><TH>Họ Tên</TH><TH>ID Phòng Ban</TH><TH>Địa Chỉ</TH></TR>';
    
    while($row =mysqli_fetch_array($result)){
        echo
        '<TR>
            <TD>'.$row['IDNV'].'</TD>  
            <TD>'.$row['Hoten'].'</TD>  
            <TD>'.$row['IDPB'].'</TD>   
            <TD>'.$row['Diachi'].'</TD>
        </TR>';
    }
    echo '</table>';


        // echo '<a href="./timkiem.php" style="text-decoration: none;">Quay lại</a>';


} else {
    echo "Không tìm thấy kết quả phù hợp.";
}
echo '<br>';
echo '<a href="./timkiem.php" style="text-decoration: none;">Quay lại</a>';

// Đóng kết nối đến cơ sở dữ liệu
//$conn->close();
mysqli_free_result($result);
mysqli_close($link);
?>
