<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Administration</h3>
  <img src="../congngheweb/avartar.png" class="img-thumbnail" alt="Cinque Terre" width="304" height="236"> 
  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Trang chủ</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Khóa học <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="khoahoc.php">Thêm khóa học</a></li>
        <li><a href="dskhoahoc.php">Danh sách khóa học</a></li>
        <li><a href="timkhoahoc.php">Tìm khóa học</a></li>                        
      </ul>
    </li>
    <li class="dropdown2">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bài giảng <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="thembaigiang.php">Thêm bài giảng</a></li>
        <li><a href="baigiang.php">Danh sách bài giảng</a></li>
        <li><a href="timbaigiang.php">Tìm bài giảng</a></li>                        
      </ul>
    </li>
    <li><a href="dangnhap.php">Đăng xuất</a></li>
  </ul>
  <div class="container2">
  <h2>Có thể bạn đã biết!</h2>
  <div class="alert alert-success">
    <strong>Success!</strong> Học xong thì có thể biết làm web.
  </div>
  <div class="alert alert-info">
    <strong>Info!</strong> Web có hoạt động hay không phụ thuộc vào kiến thức bạn có được.
  </div>
  <div class="alert alert-warning">
    <strong>Warning!</strong> Cần phải tự tìm hiểu rất nhiều.
  </div>
  <div class="alert alert-danger">
    <strong>Danger!</strong> Dù có thể rất cố gắng nhưng vẫn không đi đến đâu cả T_T.
  </div>
</div>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "baitaplon";
    $conn = new mysqli($servername, $username, $password, $dbname); 
      session_start();
      session_destroy();
      header('dangnhap.php');
	?>
</body>
</html>
