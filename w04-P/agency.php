<?php
$link = mysqli_connect("localhost:3307","root","rootroot","dbp2");

$query = "SELECT * FROM agency";
$result = mysqli_query($link, $query);
$agency_info = '';
while ($row = mysqli_fetch_array($result)){
  $filtered = array(
    'id' => htmlspecialchars($row['id']),
    'aname' => htmlspecialchars($row['aname']),
    'ceo' => htmlspecialchars($row['ceo'])
  );

  $agency_info .= '<tr>';
  $agency_info .= '<td>'.$filtered['id'].'</td>';
  $agency_info .= '<td>'.$filtered['aname'].'</td>';
  $agency_info .= '<td>'.$filtered['ceo'].'</td>';
  $agency_info .= '<td><a href = "agency.php?id='.$filtered['id'].'">update</a></td>';
  $agency_info .= '<td>
      <form action = "process_delete_agency.php" method = "post">
        <input type ="hidden" name ="id" value =" '.$filtered['id'].'">
        <input type = "submit" value = "delete">
        </form></td>
        ';
        $agency_info .= '</tr>';
  };

$escaped = array(
  'aname' => '',
  'ceo' => ''
);

$label_submit = 'Create agency';
$form_action = 'process_create_agency.php';
$form_id = '';

if(isset($_GET['id'])){
  $filtered_id = mysqli_real_escape_string($link,$_GET['id']);
  settype($filtered_id, 'integer');
  $query = "SELECT * FROM agency WHERE id = {$filtered_id}";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $escaped['aname'] = htmlspecialchars($row['aname']);
  $escaped['ceo'] = htmlspecialchars($row['ceo']);
  $label_submit = 'Update agency';
  $form_action = 'process_update_agency.php';
  $form_id = '<input type = "hidden" name = "id" value = " '.$_GET['id'].'">';
};
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> SINGER </title>
</head>
<body>
  <h1><a href = "index.php"> SINGER</a></h1>
  <p><a href = "index.php"> singer</a></p>

  <table border = "1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>ceo</th>
      <th>update</th>
      <th>delete</th>
    </tr>
      <?=$agency_info ?>
    </table>
    <br>
    <form action="<?=$form_action?>" method="post">
               <?=$form_id?>
               <label for="fname">name:</label><br>
               <input type="text" id="aname" name="aname" placeholder="aname" value="<?=$escaped['aname']?>"><br>
             <label for="lname">ceo:</label><br>
             <input type="text" id="ceo" name="ceo" placeholder="ceo" value="<?=$escaped['ceo']?>"><br><br>
             <input type="submit" value="<?=$label_submit?>">
         </form>
     </body>
 </html>
