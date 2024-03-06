<?php

$myID = $_REQUEST['idNV'];
// $socket = "E:\\XAMPP\\mysql\\mysql.sock";
// $link = mysqli_connect("localhost", "root", "", null, 3307, $socket)  or die ("Không thể kết nối SQL");
// $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
// //Lựa chọn cơ sở dữ liệu
// mysqli_select_db($link,"qlnv");
require_once("connect.php");

$rs = mysqli_query($link,'select IDNV from nhanvien');

while($row = mysqli_fetch_array($rs)){
    $myID = $_REQUEST($row['IDNV']);
    $rsl = mysqli_query( $link,"delete from nhanvien where IDNV = '$myID'") ;;
}
mysqli_free_result( $rs );
mysqli_close( $link );
header("Location: ./viewNhanVien.php");

?>