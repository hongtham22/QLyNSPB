

<html>
    <body>
        <form action='xuliDelete.php' method='post'>
            <table border='1' width='100%'>
                <tr>
                    <th>Chọn</th>
                    <th>ID phòng ban</th>
                    <th>Tên phòng ban</th>
                    <th>Mô tả</th>
            
                </tr>
                <?php
                //  $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
                //  // Lựa chọn cơ sở dữ liệu
                //  mysqli_select_db($link, "qlnv");
                require_once("connect.php");
             
                 $sql = "select * from phongban";
             
                 $result = mysqli_query($link, $sql);
             
                // Khai báo kết nối và truy vấn dữ liệu nhân viên
                // ...

                while ($row = mysqli_fetch_array($result)) {
                    $idPB = $row['IDPB'];
                    echo
                    '<tr>
                        <td><input type="checkbox" name="selectedPB[]" value="' . $idPB . '"></td>
                        <td>' . $idPB . '</td>  
                        <td>' . $row['Tenpb'] . '</td>  
                        <td>' . $row['Mota'] . '</td>   
                        <TD>
                            <p><a href="./viewNhanVienPhongBan.php?IDPB='.$idPB.'" style="text-decoration: none;">Xem nhân viên</a></p>
                            <p><a href="./insertNhanVien.php?IDPB='.$idPB.'" style="text-decoration: none;">Thêm nhân viên</a></p>
                            <p><a href="./updatePhongBan.php?IDPB='.$idPB.'" style="text-decoration: none;">Sửa thông tin</a></p>
                        </TD>   
                    </tr>';
                }
                ?>
            </table>
            
            <input type='submit' name='delete' value='Xóa phòng ban được chọn'>
            <a href="./insertPhongBan.php?IDPB='.$idPB.'" style="text-decoration: none;">Thêm phòng ban</a>
        </form>
        
    </body>
</html>

