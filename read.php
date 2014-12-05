<!DOCTYPE html>
<html>
<head>
<title>게시판</title>
</head>

<body>
<center>
<BR>
 <?php
 include "db_info.php";
 
 $id = $_GET[id];
 $no = $_GET[no];
 // 글 정보 가져오기
 $result=mysql_query("SELECT * FROM board WHERE id=$id", $conn);
 $row=mysql_fetch_array($result);
 ?>
 
 <table width="800" border="1">
 <tr>
     <td colspan="4" align="center">
         <B>제목:&nbsp;<?=$row[title]?></B>
     </td>
 </tr>
 <tr>
     <td align="center" width="25%">글쓴이</td>
     <td width="25%"><?=$row[name]?></td>
     <td align="center"  width="25%">이메일</td>
     <td width="25%"><?=$row[email]?></td>
 </tr>
 <tr>
     <td align="center">날&nbsp;&nbsp;&nbsp;짜</td>
 	<td align="center"><?=$row[wdate]?></td>
     <td align="center">조회수</td>
     <td align="center"><?=$row[cnt]?></td>
 </tr>
 <tr>
 	<td align="center">IP주소</td>
 	<td colspan="3"><?=$row[ip]?></td>
 </tr>
 <tr>
     <td colspan="4"><pre><?=$row[content]?></pre></td>
 </tr>
 
 <tr>
     <td colspan="4">
     <table width="100%">
         <tr>
             <td align="left">
                 <a href="list.php?no=<?=$no?>">[목록]</a>
                 <a href="write.php">[쓰기]</a>
                 <a href="edit.php?id=<?=$id?>">[수정]</a>
                 <a href="predel.php?id=<?=$id?>">[삭제]</a>
             </td>
             <!-- 기타 버튼 끝 -->
             <!-- 이전 다음 표시 -->
             <td align="right">
 <?php
 // 현재 글보다 id 값이 큰 글 중 가장 작은 것을 가져온다. 삭제됬을때를 생각해서 이렇게 구현함
 // 즉 바로 이전 글 ORDER BY id ASC가 함축됨 즉 오름차순으로 정렬되있음
 $query=mysql_query("SELECT id FROM board WHERE id >$id LIMIT 1", $conn);
 $prev_id=mysql_fetch_array($query);
 
 if ($prev_id[id]) // 이전 글이 있을 경우
 {
     echo "<a href=read.php?id=$prev_id[id]><b>[이전]</b></a>";
 }
 else
 {
     echo "[이전]";
 }
 
 //내림차순으로 정렬하고 작은 것 한개 가져옴
 $query=mysql_query("SELECT id FROM board WHERE id <$id ORDER BY id DESC LIMIT 1", $conn);
 $next_id=mysql_fetch_array($query);
 
 if ($next_id[id])
 {
     echo "<a href=read.php?id=$next_id[id]><b>[다음]</b></a>";
 }
 else
 {
     echo "[다음]";
 }
 ?>
             </td>
         </tr>
     </table>
     </td>
 </tr>
 </table>
 </center>
 </body>
 </html>
 
 <?php
 // 조회수 업데이트
 $result=mysql_query("UPDATE board SET cnt=cnt+1 WHERE id=$id", $conn);
 
 mysql_close($conn);
 ?>
