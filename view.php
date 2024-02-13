<?php
  require_once('config.php');
  $num = $_GET['idx'];

  $sql = "SELECT * FROM bbs WHERE idx = {$num}";
  $result = mysqli_query($mysqli,$sql);

  //print_r(mysqli_fetch_object($result));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if($row = mysqli_fetch_object($result)){
  ?>
  <h1>글 상세페이지</h1>
  <h2>글쓴이: <?= $row->username?></h2>
  <h3>글내용: <?= $row->usermsg?></h3>
  <?php
    } else{
      echo "<script>alert('해당글이 없습니다'); location.href='index.php';</script>";
    }
  ?>
</body>
</html>