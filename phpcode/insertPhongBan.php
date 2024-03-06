<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    ?>
    <h3> Thêm phòng ban </h3>
    <form action="xuliThemPhongBan.php" method="post">

        <label for="id">IDPB:</label>
        <input type="text" id="id" name="idPB" required><br>

        <label for="tenpb">Tên phòng ban:</label>
        <input type="text" id="tenpb" name="tenPB" required><br>

        <label for="mota">Mô tả:</label>
        <input type="text" id="mota" name="mota" required><br>

        <!-- Thêm các trường dữ liệu khác cần thiết -->

        <input type="submit" value="Thêm phòng ban">
    </form>

</body>
</html>