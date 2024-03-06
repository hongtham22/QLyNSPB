<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm Kiếm Nhân Viên</title>
    <script>
        function validateForm() {
            var criteria = document.getElementsByName('criteria');
            var isChecked = false;

            for (var i = 0; i < criteria.length; i++) {
                if (criteria[i].checked) {
                    isChecked = true;
                    break;
                }
            }

            if (!isChecked) {
                alert('Vui lòng chọn một tiêu chí tìm kiếm.');
                return false;
            }
        }
    </script>
</head>
<body>
    <h1>Tìm Kiếm Nhân Viên</h1>
    <form action="xulitimkiem.php" method="post">
        <input type="radio" name="criteria" value="idnv"> ID Nhân Viên<br>
        <input type="radio" name="criteria" value="hoten"> Họ Tên<br>
        <input type="radio" name="criteria" value="diachi"> Địa Chỉ<br>
        <br>
        <label for="keyword">Nhập từ khóa:</label>
        <input type="text" name="keyword" id="keyword" required>
        <br>
        <input type="submit" value="Tìm Kiếm">
    </form>
</body>
</html>
