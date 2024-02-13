<?php
$mysqli = new mysqli('localhost', 'simplebbs', '12345', 'simplebbs');

if (mysqli_connect_errno()) {
  echo "DB연결에 실패했습니다." .mysqlii_connect_errer();
}
?>