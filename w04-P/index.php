<?php
$link = mysqli_connect("localhost:3307","root","rootroot","dbp2");
$query = "SELECT * FROM singer";
$result = mysqli_query($link, $query);
$list = '';
while ($row = mysqli_fetch_array($result)){
  $escaped_name = htmlspecialchars($row['name']);
  $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$escaped_name}</a></li>";
}

$article = array(
  'name'=>'Welcome',
  'description'=>'My favorite singers are ... '
);

$update_link = '';
$delete_link = '';
$agency='';

if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($link,$_GET['id']);
  $query = "SELECT * FROM singer LEFT JOIN agency ON singer.agency_id = agency.id
  WHERE singer.id={$filtered_id}";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $article['name'] = htmlspecialchars($row['name']);
  $article['description'] = htmlspecialchars($row['description']);
  $article['aname'] = htmlspecialchars($row['aname']);

  $update_link='<a href="update.php?id='.$_GET['id'].'">update</a>';
  $delete_link = '
  <form action = "process_delete.php" method = "POST">
  <input type = "hidden" name = "id" value = "'.$_GET['id'].'">
  <input type = "submit" value = "delete">
  </form>';
  $agency = "<p>from {$article['aname']}</p>";
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
  <a href = "agency.php">agency</a>
  <ol><?=$list ?></ol>
  <a href = "create.php">create</a>
  <?=$update_link?>
  <?=$delete_link?>
  <h2><?=$article['name']?></h2>
  <?=$article['description']?>
  <?=$agency?>
</body>
<html>
