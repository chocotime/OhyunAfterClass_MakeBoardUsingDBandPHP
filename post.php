<!DOCTYPE html>
<html>
<title> hello </title>
</head>
<body>
<?
echo "hello baby";
?>
</body>
<?php
echo "Correct!!!<br>";
?>
<script language=php>
echo "Another Coding Style!";
</script>
<form action="<?php echo $PHP_SELF ?>" method=post>
<input name=info>
<input type=submit value=보내기>
</form>
<? echo "폼을 이용해 전송된 값 : $info"; ?>
</html>
