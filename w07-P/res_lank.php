<?php
    $link = mysqli_connect('localhost','admin','admin','employees' );

    if(mysqli_connect_errno()){
        echo "MariaDB 접속에 실패했습니다. 관리자에게 문의하세요.";
        echo "<br";
        echo mysqli_connect_error();
        exit();
    }

    settype($_GET['number'],'integer');
    $filtered_number = mysqli_real_escape_string($link,$_GET['number']);


    $query = "
    select e.first_name, e.last_name, s.salary 
    from employees e inner join salaries s on e.emp_no = s.emp_no 
    inner join dept_emp de on e.emp_no = de.emp_no 
    where de.dept_no = 'd008'  
    order by salary desc limit ".$filtered_number."";

        $result = mysqli_query($link, $query);

        $article = '';
        while($row = mysqli_fetch_Array($result)){
            $article .= '<tr><td>';
            $article .= $row['first_name'];
            $article .= '</td><td>';
            $article .= $row['last_name'];
            $article .= '</td><td>';
            $article .= $row['salary'];
            $article .= '</td></tr>';
        }

        mysqli_free_result($result);
        mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title> Research 부서 연봉 순위 </title>
    <style>
        body{
            font-family : Consolas, monospace;
            font_family : 12px;
        }
        table{
            width : 100%;

        }
        th,td{
            padding: 10px;
            border-bottom : 1px solid #dadada;
        }
    </style>
    
</head>
<body>
        <h2><a href = "index.php"> 직원관리 시스템</a> | 
        <a href = "dept_index.php"> 부서별 연봉 순위 </a> | Research </h2>
        <table>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>salary</th>
            </tr>
            <?= $article ?>
        </table>
</body>
</html>
