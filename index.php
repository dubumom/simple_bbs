<?php
  require_once('config.php');
  $sql = "SELECT * FROM bbs";
  $result = mysqli_query($mysqli,$sql);

  //print_r(mysqli_fetch_row($result)); -> Array ( [0] => 1 [1] => 홍길동 [2] => 반갑습니다. 첫인사드립니다. ) 
  /*
  while ($row = mysqli_fetch_row($result)) {
    printf($row[1]);
}
  */

  #print_r(mysqli_fetch_assoc($result)); -> Array ( [idx] => 1 [username] => 홍길동 [usermsg] => 반갑습니다. 첫인사드립니다. )
  /*
  while ($row = mysqli_fetch_assoc($result)) {
    printf($row['username']);
}
  */

  #print_r(mysqli_fetch_array($result)) ->Array ( [0] => 1 [idx] => 1 [1] => 홍길동 [username] => 홍길동 [2] => 반갑습니다. 첫인사드립니다. [usermsg] => 반갑습니다. 첫인사드립니다. )
  /*
  while ($row = mysqli_fetch_array($result)) {
    printf($row[0]);
    printf($row['username']);
  }
  */
  #print_r(mysqli_fetch_object($result)); ->stdClass Object ( [idx] => 1 [username] => 홍길동 [usermsg] => 반갑습니다. 첫인사드립니다. )
  $list ='';

  while ($row = mysqli_fetch_object($result)) {
    //printf($row->username);
    $list = $list."<li><a href='view.php?idx={$row->idx}'>{$row->username}</a></li>";
  }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Simple BBS</title>
</head>
<body>
  <h1>Simple BBS</h1>
    <ul>
      <?=$list?>
      <!-- <li><a href="">글 제목1</a><a href="">수정</a>/<a href="">삭제</a></li>
      <li><a href="">글 제목2</a><a href="">수정</a>/<a href="">삭제</a></li>
      <li><a href="">글 제목3</a><a href="">수정</a>/<a href="">삭제</a></li> -->
    </ul>
    <p>
      <a href="write.php">글쓰기</a>
    </p>
    <hr>
    <form action="">
      <input type="search">
      <button>검색</button>
    </form>
</body>
</html>