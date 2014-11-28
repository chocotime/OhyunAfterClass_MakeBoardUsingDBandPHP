<html>
<head>
<title>게시판</title>
<style>
<!--
td { font-size : 9pt, }
A:link { font : 9pt; color : black, text-decoration : none;
font-family : 굴림; font-size : 9pt; }
A:visited { text-decoration : none; color : black; font-size : 9pt; }
A:hover { text-decoration : underline; color : black;
font-size : 9pt; }
-->
</style>
</head>
<body topmargin=0 leftmargin=0 text=#464646>
<center>
<BR>
<!-- 입력된 값을 다음 페이지로 넘기기 위해 FORM을 만든다.-->
<form action=insert.php method=post>
<table width=580 border=0 cellpadding=2 cellspacing=1 bgcolor=#777777>
<tr>
<td height=20 align=center bgcolor=#999999>
<font color=white> <B>글쓰기</B> </font>
</td>
</tr>
<!-- 입력부분 -->
<tr>
<td bgcolor=white> &nbsp;
<table>
<tr>
<td width=60 align=left> 이름 </td>
