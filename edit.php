<!DOCTYPE html>
<html>
<head>
<title>게시판</title>
</head>

<body>
<center>
<br>
 <form action="update.php?id=<?=$_GET[id]?>" method="post">
 <table width="800" border="1">
     <tr>
         <td align="center"><b>글 수 정 하 기</b></td>
     </tr>
 <?php
 include "db_info.php";
 
 $id = $_GET[id];
 $no = $_GET[no];
 
 // 먼저 쓴 글의 정보를 가져온다.
 $result=mysql_query("SELECT * FROM board WHERE id=$id", $conn);
 $row=mysql_fetch_array($result);
 ?>
 <!-- 입력 부분 -->
     <tr>
         <td>
         <table>
             <tr>
                 <td align="left">이름</td>
                 <td align="left">
 					<INPUT type="text" name="name" size="20" value="<?=$row[name]?>">
                 </td>
             </tr>
             <tr>
                 <td align="left">이메일</td>
                 <td align="left">
                     <INPUT type="text" name="email" size="20" value="<?=$row[email]?>">
                 </td>
             </tr>
             <tr>
                 <td align="left" >비밀번호</td>
                 <td align="left" >
                     <INPUT type="password" name="pw" size="8"> 
                     (비밀번호가 맞아야 수정가능)
                 </td>
             </tr>
             <tr>
                 <td align="left" >제 목</td>
                 <td align="left" >
                     <INPUT type="text" name="title" size="60" value="<?=$row[title]?>">
                 </td>
             </tr>
             <tr>
                 <td align="left" >내용</td>
                 <td align="left" >
                     <TEXTAREA name="content" cols="80" rows="15"><?=$row[content]?></TEXTAREA>
                 </td>
             </tr>
             <tr>
                 <td colspan="10" align="center">
                     <INPUT type="submit" value="글 저장하기">
                     &nbsp;&nbsp;
                     <INPUT type="reset" value="다시 쓰기">
                     &nbsp;&nbsp;
                     <INPUT type="button" value="되돌아가기" onClick="history.back(-1)">
                 </td>
             </tr>
             </table>
         </td>
     </tr>
 <!-- 입력 부분 끝 -->
 </table>
 </form>
 </center>
 </body>
 </html>
