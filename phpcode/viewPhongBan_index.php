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
            // $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
            // mysqli_select_db($link, "qlnv");
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
                       
                    </td>   
                </tr>';
            }
            ?>
        </table>
        
       
    </form>
</body>
</html>
