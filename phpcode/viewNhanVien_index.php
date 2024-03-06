

<html>
    <body>
       
            <table border='1' width='100%'>
                <tr>
                    <th>ID Nhân viên</th>
                    <th>Họ Tên</th>
                    <th>ID Phòng Ban</th>
                    <th>Địa Chỉ</th>
                </tr>
                <?php
                //  $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
                //  // Lựa chọn cơ sở dữ liệu
                //  mysqli_select_db($link, "qlnv");
                require_once("connect.php");
             
                 $sql = "select * from nhanvien";
             
                 $result = mysqli_query($link, $sql);
             
                // Khai báo kết nối và truy vấn dữ liệu nhân viên
                // ...

                while ($row = mysqli_fetch_array($result)) {
                    $idNV = $row['IDNV'];
                    echo
                    '<tr>
                        <td>' . $idNV . '</td>  
                        <td>' . $row['Hoten'] . '</td>  
                        <td>' . $row['IDPB'] . '</td>   
                        <td>' . $row['Diachi'] . '</td>
                        
                    </tr>';
                }
                ?>
            </table>


        
    </body>
</html>

