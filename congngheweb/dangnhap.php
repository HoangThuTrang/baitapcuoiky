<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUẢN LÝ KHÓA HỌC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1><h1>QUẢN LÝ KHÓA HỌC<small>Administration</small></h1></h1>
  <p>Mời bạn đăng nhập tại đây.</p>          
</div>
<div class="container2">
  <h2>ĐĂNG NHẬP</h2>
  <form method="POST" action="dangnhap.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Nhập email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Mật khẩu:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Nhập mật khẩu" name="pwd">
    </div>
    <div class="checkbox">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Đăng nhập</button>
  </form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baitaplon";
$conn = new mysqli($servername, $username, $password, $dbname); 
session_start();
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $matkhau =$_POST["pwd"];
  $rows = mysqli_query($conn,"SELECT * FROM `admin` where email = '$email' and matkhau = '$matkhau'");
  $count = mysqli_num_rows($rows);
  if($count==1){
    $_SESSION["loged"] = true;
    header("location:quantri.php");
  }  
}
?>
</body>
</html>
