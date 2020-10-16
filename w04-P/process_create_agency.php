<?php
$link = mysqli_connect("localhost:3307","root","rootroot","dbp2");

$filtered = array(
  'aname' => mysqli_real_escape_string($link,$_POST['aname']),
  'ceo' => mysqli_real_escape_string($link,$_POST['ceo'])
);
$query = "
INSERT INTO agency (aname, ceo)
values (
  '{$filtered['aname']}',
  '{$filtered['ceo']}'
  )";

  $result = mysqli_query($link,$query);
  if($result == false){
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysqli_error($link));
  } else {
    header('Location: agency.php');
  }
   ?>
