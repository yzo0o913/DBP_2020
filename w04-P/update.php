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

if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($link, $_GET['id']);
  $query = "SELECT * FROM singer Where id = {$filtered_id}";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $article = array(
    'name'=>$row['name'],
    'description'=>$row['description']
  );
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> SINGER </title>
</head>
<body>
  <h1><a href ="index.php">SINGER</a> </h1>
  <ol><? = $list ?></ol>
  <form action = "process_update.php" method = "POST">
    <input type ="hidden" name = "id" value="<?=$filtered_id?>">
    <p><input type = "text" name="name" placeholder = "name"
      value="<?=$article['name']?>"></p>
    <p><textarea name = "description"
      placeholder="description"><?=$article['description']?></textarea></p>
    <p><input type = "submit"></p>
  </form>
</body>
<html>
