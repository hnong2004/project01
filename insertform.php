<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>กรอกข้อมูลพนักงาน</title>
</head>
<body>
    <h2>ฟอร์มกรอกข้อมูลพนักงาน</h2>
    <hr>
    <form action="insertdata.php" method="POST">
        <label>คำนำหน้า : </label> 
            <select name="emp_title">
                <option value="นาย">นาย </option>
                <option value="นาง">นาง </option>
                <option value="นางสาว">นางสาว </option>
            </select> 
        <br>
        <label>ชื่อ : </label>
            <input type="text" name="emp_name">
        <br>
        <label>นามสกุล : </label>
            <input type="text" name="emp_surname">
        <br>
        <label>วันเดือนปีเกิด : </label>
            <input type="date" name="emp_birthday">
        <input type="submit" value="บันทึกข้อมูล">
    </form>
</body>
</html>