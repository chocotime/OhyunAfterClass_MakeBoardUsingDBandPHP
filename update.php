<?php
include "db_info.php";

$id = $_GET[id];
$name = $_POST[name];
$pw = $_POST[pw];
$email = $_POST[email];
$title = $_POST[title];
$content = $_POST[content];
 
 // 글의 비밀번호를 가져온다.
 $query = "SELECT pw FROM board WHERE id=$id";
 $result=mysql_query($query, $conn);
 $row=mysql_fetch_array($result);
 
 //입력된 값과 비교한다.
 if ($pw==$row[pw]) { //비밀번호가 일치하는 경우
     $query = "UPDATE board SET name='$name', email='$email', title='$title', content='$content' WHERE id=$id";
     $result=mysql_query($query, $conn);
 }
 else { // 비밀번호가 일치하지 않는 경우
     echo ("
     <script>
     alert('비밀번호가 틀립니다.');
     history.go(-1);
     </script>
     ");
     exit;
 }
 
 mysql_close($conn);
 
 echo ("<meta http-equiv='Refresh' content='1; URL=read.php?id=$id'>");
 ?>
 <center>
 	<h1>정상적으로 수정되었습니다.</h1>
 </center>
