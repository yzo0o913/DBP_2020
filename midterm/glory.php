<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
  $query = "SELECT first_name, last_name, hire_date, title from titles 
  left join employees on titles.emp_no = employees.emp_no
   WHERE titles.to_date = '9999-01-01' ORDER BY employees.hire_date ASC LIMIT 20";
  $result = mysqli_query($link, $query);  
  $emp_info = '';
  while($row = mysqli_fetch_array($result)) {
    $emp_info .= '<tr>';
    $emp_info .= '<td>'.$row['first_name'].'</td>';
    $emp_info .= '<td>'.$row['last_name'].'</td>';
    $emp_info .= '<td>'.$row['hire_date'].'</td>';    
    $emp_info .= '<td>'.$row['title'].'</td>';
    $emp_info .= '</tr>';
  }  
  
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title> 명예의 전당 </title>
</head>
<body>
    <h2><a href="index.php">홈</a> | 👏명예의 전당👏</h2>
    <p> 현재까지 가장 오래 근무하신 직원 분들입니다.</p>
    <img src = "https://www.gamsadream-n.com/images/hp_banner_small.gif" width = "440" >
    <p> </p>
    <table border="1">
        <tr>
            <th>first_name</th>
            <th>last_name</th>
            <th>고용일</th>
            <th>직무</th>
        </tr>
        <?=$emp_info?>
    </table>
    
    <img src = "https://www.gamsadream-n.com/images/hp_banner_small.gif" width = "440" >

    </body>
</html>