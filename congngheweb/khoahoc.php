<!DOCTYPE html>
<html lang="en">
<head>
  <title>THÊM KHÓA HỌC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
  <h2>TẠO KHÓA HỌC</h2>
  <form action="khoahoc.php">
    <div class="form-group">
      <label for="makhoahoc">Mã khóa học:</label>
      <input type="text" class="form-control" id="makhoahoc" placeholder="Nhập mã khóa học" name="makhoahoc">
    </div>
    <div class="form-group">
      <label for="tenkhoahoc">Tên khóa học:</label>
      <input type="text" class="form-control" id="tenkhoahoc" placeholder="Nhập tên khóa học" name="tenkhoahoc">
    </div>
    <button type="submit" class="btn btn-default">Tạo</button>
  </form>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baitaplon";
$conn = new mysqli($servername, $username, $password, $dbname); 
$makhoahoc = "";
$tenkhoahoc = "";
$sql = "INSERT INTO khoahoc (makhoahoc,tenkhoahoc)
VALUES ('$makhoahoc','$tenkhoahoc')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>
</html>
