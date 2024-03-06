<html>
<body>
    <form action='xuliXoaPB.php' method='post'>
        <table border='1' width='100%'>
            <tr>
        
                <th>ID phòng ban</th>
                <th>Tên phòng ban</th>
                <th>Mô tả</th>
                <th>Thao tác</th>
            </tr>
            <?php

            require_once("connect.php");
            $sql = "select * from phongban";
            
            $result = mysqli_query($link, $sql);
            
            while ($row = mysqli_fetch_array($result)) {
                $idPB = $row['IDPB'];
                echo
                '<tr>

                    <td>' . $idPB . '</td>  
                    <td>' . $row['Tenpb'] . '</td>  
                    <td>' . $row['Mota'] . '</td>   
                    <td>
                        <p><a href="./viewNhanVienPhongBan.php?IDPB=' . $idPB . '" style="text-decoration: none;">Xem nhân viên</a></p>
                        <p><a href="./insertNhanVien.php?IDPB=' . $idPB . '" style="text-decoration: none;">Thêm nhân viên</a></p>
                        <p><a href="./updatePhongBan.php?IDPB=' . $idPB . '" style="text-decoration: none;">Sửa thông tin</a></p>
                    </td>   
                </tr>';
            }
            ?>
        </table>
        
  
        <br>
        <a href="./insertPhongBan.php" style="text-decoration: none;">Thêm phòng ban</a>
    </form>
</body>
</html>
