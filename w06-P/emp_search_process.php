 <?php 
     $link= mysqli_connect("localhost","admin","admin","employees"); 
 
 
     if(isset($_GET['first_name'])){ 
         $filtered_fn = mysqli_real_escape_string($link,$_GET['first_name']); 
     }else{ 
         $filtered_fn = mysqli_real_escape_string($link,$_POST['first_name']); 
     } 
     if(isset($_GET['last_name'])){ 
         $filtered_ln = mysqli_real_escape_string($link,$_GET['last_name']); 
     }else{ 
         $filtered_ln = mysqli_real_escape_string($link,$_POST['last_name']); 
     } 
 
 
     $filtered = array( 
         'first_name' => mysqli_real_escape_string($link,$_POST['first_name']), 
         'last_name' => mysqli_real_escape_string($link,$_POST['last_name'])
     ); 
 
 
     $check_query = " 
         SELECT *  
         FROM employees 
         WHERE first_name='$filtered_fn',last_name='$filtered_ln' 
     "; 
     // print_r($check_query); 
 
 
     $queryt = " 
         SELECT * 
         FROM employees 
     "; 
 
 
     $result = mysqli_query($link,$queryt); 
 
 
     while($row=mysqli_fetch_array($result)){ 
         $emp_info=$row['emp_no']; 
     } 
 
 
     // print_r($emp_info); 
 
 
     if($result==false){ 
         echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하세요.'; 
         error_log(mysqli_error($link)); 
     }else{ 
         echo '사번 조회 결과 : ['.$emp_info.']<p> 
         <a href="index.php">돌아가기</a>'; 
     } 
 
