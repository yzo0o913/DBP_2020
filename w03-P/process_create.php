<?php
$link = mysqli_connect("localhost:3307","root","rootroot","dbp2");
$filtered = array(
  'name' => mysqli_real_escape_string($link,$_POST['name']),
  'description' => mysqli_real_escape_string($link,$_POST['description'])
);
$query = "
INSERT INTO SINGER(name, description, created)
values (
  '{$filtered['name']}',
  '{$filtered['description']}',
  now()
  )";

  $result = mysqli_multi_query($link,$query);
  if($result == false){
    echo '저장하는 과정에서 문제가 발생했습니다. 관리자에게 문의하세요.';
    error_log(mysqli_error($link));
  } else {
    echo '성공했습니다. <a href = "index.php">돌아가기</a>';
  }
   ?>
