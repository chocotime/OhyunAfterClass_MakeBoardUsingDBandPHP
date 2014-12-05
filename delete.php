<?php
include "db_info.php";

$id = $_GET[id];
$pw = $_POST[pw];
$result = mysql_query("SELECT pw FROM board WHERE id=$id", $conn);
$row = mysql_fetch_array($result);

if ($pw==$row[pw] )//비밀번호 맞는지 확인함.
 {
     $query = "DELETE FROM board WHERE id=$id "; //데이터 삭제하는 쿼리문
     $result = mysql_query($query, $conn);
 }
 else
 {
     echo ("
     <script>
     alert('비밀번호가 틀립니다.');
     history.go(-1);
     </script>
     ");
     exit;
 }
 ?>
 
 <meta http-equiv="Refresh" content="1; URL=list.php">
 <center>
 	<h1>삭제되었습니다.</h1>
 </center>
