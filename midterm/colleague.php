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


    $query = "SELECT first_name, last_name, hire_date, title from titles left join employees 
    on titles.emp_no = employees.emp_no order by employees.hire_date desc limit ".$filtered_number."";

        $result = mysqli_query($link, $query);

        $article = '';
        while($row = mysqli_fetch_Array($result)){
            $article .= '<tr><td>';
            $article .= $row['first_name'];
            $article .= '</td><td>';
            $article .= $row['last_name'];
            $article .= '</td><td>';
            $article .= $row['hire_date'];
            $article .= '</td><td>';
            $article .= $row['title'];
            $article .= '</td></tr>';
        }

        mysqli_free_result($result);
        mysqli_close($link);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title> 신입 사원 찾기 </title>
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
        <h2><a href = "index.php"> 홈</a> | 👬신입 사원 찾기👩🏼‍🤝‍🧑🏻</h2>
        <p> 사원의 명 수를 입력해 최근 입사일 순으로 신입 사원을 찾을 수 있습니다.</p>
        <img src = "https://img.goodchobo.com/upload/editor/2018-12-1810;51;06.PNG1545097879023.png" width = "900dp" >
        <table>
            <tr>
                <th>first_name</th>
                <th>last_name</th>
                <th>hire_date</th>
                <th>title</th>
            </tr>
            <?= $article ?>
        </table>
</body>
</html>

