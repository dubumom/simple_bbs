<?php
  require_once('config.php');
  $num = $_POST['idx'];
  $username = $_POST['username'];
  $usermsg = $_POST['usermsg'];

  $sql= "UPDATE bbs SET username='$username', usermsg='$usermsg' WHERE idx = {$num}";
  $result = mysqli_query($mysqli,$sql);

  if(!$result){
    echo "<script>alert('수정실패');history.back();</script>";
    error_log(mysql_error($mysqli));
  }else{
    echo "<script>alert('수정성공');location.href='./index.php';</script>";
    echo '<a href="index.php">홈</a>';
  }
?>
