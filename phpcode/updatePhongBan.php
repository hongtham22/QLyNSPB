<?php
$myID = $_REQUEST['IDPB'];
// $socket = "E:\\XAMPP\\mysql\\mysql.sock";
// $link = mysqli_connect("localhost", "root", "", null, 3307, $socket)  or die ("Không thể kết nối SQL");
// $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
// //Lựa chọn cơ sở dữ liệu
// mysqli_select_db($link,"qlnv");
// $socket = "E:\\XAMPP\\mysql\\mysql.sock";
// $link = mysqli_connect("localhost", "root", "", null, 3307, $socket)  or die ("Không thể kết nối SQL");
// //Lựa chọn cơ sở dữ liệu
// mysqli_select_db($link,"qlnv");
require_once("connect.php");
$rs = mysqli_query($link,"select * from PhongBan where IDPB='$myID'");
$row = mysqli_fetch_array($rs);
?>
<html>
    <body>
        <Form action='xulicapnhatPB.php?IDPB=<?php echo $row["IDPB"];?>' method='post'>
        <table width = '100%' boder='0'>
            <tr>
                <td>Ma phong ban</td>
                <td><input type='Text' size = '20' name = 'txtIDPB' readonly value='<?php echo $row['IDPB'];?>'></td>
            </tr>
            <tr>
                <td>Ten phong ban</td>
                <td><input type ='Text' size = '20' name = 'txtTenpb'  value='<?php echo $row['Tenpb'];?>'></td>
            </tr>
            <tr>
                <td>Mo ta</td>
                <td><input type ='Text' size = '20' name = 'txtMota'  value='<?php echo $row['Mota'];?>'></td>
            </tr>
            <tr>
                <td><input type="submit" value="Sửa thông tin"></td>
            </tr>
        </table>

        </Form>
    </body>
</html>