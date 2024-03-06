<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="index.css">
    <style>
    frame[name="t5"] {
    background-color: black;
    color: white;
}

    </style>
    <script>
        function refreshlogin(){
            window.frames["t2"].location.href= "T2.php";
            window.frames["t3"].location.href= "viewPhongBan.php"
            
        }
        function refreshlogout(){
            window.frames["t2"].location.href= "T2.php";
            window.frames["t3"].location.href= "viewPhongBan_index.php"
            
        }
    </script>
</head>
<frameset rows="100,*,80">
    <frame name="t1" src="T1.php">
    <frameset cols="200,*,200">
        <frame name="t2" src="T2.php">
        <frame name="t3" src="T3.php" >
        <frame name="t4" src="T4.php">
    </frameset>
    <frame name="t5" bgcolor="black"> 
</frameset>

</html>

