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

if(isset($_GET['id'])){
  $query = "SELECT * FROM singer Where id = {$_GET['id']}";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $article = array(
    'name'=>$row['name'],
    'description'=>$row['description']
  );
  $updated_link = '<a href = "update.php?id'.$_GET['id'].'">update</a>';
}

$query = "SELECT * FROM agency";
$result = mysqli_query($link, $query);
$select_from = '<select name ="agency_id">';
while($row = mysqli_fetch_array($result)) {
  $select_from .= '<option value="'.$row['id'].'">'.$row['aname'].'</option>';
}
$select_from .= '</select>';
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> SINGER </title>
</head>
<body>
  <h1><a href = "index.php"> SINGER</a> </h1>
  <ol><? = $list ?></ol>
  <form action = "process_create.php" method = "post">
    <p><input type = "text" name = "name" placeholder = "name"></p>
    <p><textarea name = "description" placeholder="description"></textarea></p>
    <?= $select_from ?>
    <p><input type = "submit"></p>
  </form>
</body>
<html>
