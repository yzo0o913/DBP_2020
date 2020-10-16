<?php
$link = mysqli_connect("localhost:3307","root","rootroot","dbp2");
$query = "SELECT * FROM singer";
$result = mysqli_query($link, $query);
$list = '';
while ($row = mysqli_fetch_array($result)){
  $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$row['name']}</a></li>";
}

$article = array(
  'name'=>'Welcome',
  'description'=>'My favorite singers are ... '
);

$update_link = '';
$delete_link = '';

if(isset($_GET['id'])){
  $query = "SELECT * FROM singer Where id = {$_GET['id']}";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $article = array(
    'name'=>$row['name'],
    'description'=>$row['description']
  );
  $update_link='<a href="update.php?id='.$_GET['id'].'">update</a>';
  $delete_link = '
  <form action = "process_delete.php" method = "POST">
  <input type = "hidden" name = "id" value = "'.$_GET['id'].'">
  <input type = "submit" value = "delete">
  </form>';
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> SINGER </title>
</head>
<body>
  <h1><a href = "index.php"> SINGER</a></h1>
  <ol><?=$list ?></ol>
  <a href = "create.php">create</a>
  <?=$update_link?>
  <?=$delete_link?>
  <h2><?=$article['name']?></h2>
  <?=$article['description']?>
</body>
<html>
