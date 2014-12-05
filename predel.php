<!DOCTYPE html>
<html>
<head>
<title>게시판</title>
</head>

<body>
<center>
<br>
 <form action="delete.php?id=<?=$_GET[id]?>" method="post">
 <table width="300" border="1">
 <tr>
     <td align="center">
         <b>비 밀 번 호 확 인</b>
     </td>
 </tr>
 <tr>
     <td align="center">
         <b>비밀번호 : </b>
         <INPUT type="password" name="pw" size="8">
         <INPUT type="submit" value="확 인">
         <INPUT type="button" value="취 소" onclick="history.back(-1)">
     </td>
 </tr>
 </table>
 </body>
 </html>
