<html>
<head>
    <title>Form Đăng Nhập</title>
    <style>
         .xuLy{
            color:red;
            margin-top:10px;
        }
    </style>
  
</head>
<body>
    <?php
    echo '
    <form action="xulilogin.php" method="post">
        <table width="400" height="200" border="0" cellpadding="5" cellspacing="0" align="center">
            <tr>
                <th colspan="2">ĐĂNG NHẬP</th>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" placeholder="Nhập tên đăng nhập" size="40" name="name"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" placeholder="Nhập mật khẩu" size="40" name="pass"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <!-- Thẻ div để hiển thị thông báo -->
                    <div id="message" style="color: red;"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="reset" name="btreset" value="Reset">
                    <input type="submit" name="btok" value="OK" >
                </td>
            </tr>
            
        </table>
    </form> '

    ?>
</body>
</html>
