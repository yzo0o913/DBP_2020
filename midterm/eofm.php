<?php
  $link = mysqli_connect('localhost', 'admin', 'admin', 'employees');
  $query = "SELECT distinct first_name, last_name, birth_date from titles 
  left join employees on titles.emp_no = employees.emp_no  
  where substr(employees.birth_date,6,5) = '11-02' and 
  titles.to_date = '9999-01-01' 
  order by employees.birth_date asc ";

  $result = mysqli_query($link, $query);  
  $emp_info = '';
  while($row = mysqli_fetch_array($result)) {
    $emp_info .= '<tr>';
    $emp_info .= '<td>'.$row['first_name'].'</td>';
    $emp_info .= '<td>'.$row['last_name'].'</td>';   
    $emp_info .= '<td>'.$row['birth_date'].'</td>';
    $emp_info .= '</tr>';
  }  
  
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title> 오늘의 사원 </title>
</head>
<body>
    <h2><a href="index.php">홈</a> | 🌹오늘의 사원🌹</h2>
    <p> 오늘 생일을 맞이한 사원들 입니다.</p>
    <p> 모두들 생일 축하드리며 행복한 하루 보내시길 바랍니다.</p>
    <img src = "https://i.pinimg.com/originals/90/88/30/90883014dc09c4205164609e67f53d38.png" width = "400" >
    <p> </p>
    <table border="1">
        <tr>
            <th>first_name</th>
            <th>last_name</th>
            <th>birth_date</th>
        </tr>
        <?=$emp_info?>
    </table>
    
    <img src = "https://cdn.crowdpic.net/list-thumb/thumb_l_AC6A345EB07FDDF1E8B8EB50EC6CF882.jpg" width = "400" >

    </body>
</html>