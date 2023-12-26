<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>กรอกข้อมูล</title>
</head>
<body>
    <h2>กรอกข้อมูล</h2>
    <form action="insert_data.php" method="post">
        <label for="name">ชื่อ:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="age">อายุ:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <input type="submit" value="บันทึกข้อมูล">
    </form>
</body>
</html>
