<?php
  
    if(isset($_GET['IDPB'])){
        $idPB = $_GET['IDPB'];
        // $link =  mysqli_connect("localhost", "root", '') or die('Khong the ket noi den CSDL');
        // mysqli_select_db($link, "qlnv");
        require_once("connect.php");
        $sql = "SELECT * FROM nhanvien WHERE IDPB = ?";
        $stmt = mysqli_prepare($link, $sql);
        mysqli_stmt_bind_param($stmt, "s", $idPB);
        mysqli_stmt_execute($stmt);

        echo '<table border="1" width="100%">';
        echo '<caption style="font-size: 30px">Danh Sách Nhân Viên Theo Phòng Ban</caption>';
        echo '<TR><TH>ID Nhân viên</TH><TH>Họ Tên</TH><TH>ID Phòng Ban</TH><TH>Địa Chỉ</TH></TR>';

        // Lấy dữ liệu từ kết quả truy vấn
        $result = mysqli_stmt_get_result($stmt);

        // Sử dụng fetch_assoc thay vì fetch_array để lấy dữ liệu theo tên cột
        while($row = mysqli_fetch_assoc($result)){
            echo
            '<TR>
                <TD>'.$row['IDNV'].'</TD>  
                <TD>'.$row['Hoten'].'</TD>  
                <TD>'.$row['IDPB'].'</TD>   
                <TD>'.$row['Diachi'].'</TD>
            </TR>';
        }

        echo '</table>';

        echo '<br>';
        echo '<a href="./viewPhongBan_index.php" style="text-decoration: none;">Quay lại</a>';

        // Giải phóng tập các bản ghi trong $result và statement
        mysqli_free_result($result);
        mysqli_stmt_close($stmt);
        mysqli_close($link);
    }
?>