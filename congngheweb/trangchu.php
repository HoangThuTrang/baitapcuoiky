<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>CÔNG NGHỆ WEB</h1>
  <p>Các bước khởi đầu để làm web!</p> 
</div>
</div>
<ul class="nav nav-tabs">
  <li><a href="email.php">Gửi thư</a></li> 
</ul>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Khóa học</h3>
        <?php
            include("dskhoahoc.php");
        ?>
    </div>
    <div class="col-sm-4">
      <h3>Bài giảng</h3>
        <?php
            include("baigiang.php");
        ?>
    </div>
  </div>
</div>
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
</body>
</html>
