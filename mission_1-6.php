<html lang="ja">
<head>
<meta http-equiv="content-type" charset="utf-8">
</head>
<body>
<form action = "mission_1-6.php" method="post">
<input type = "text" name="comment" value=""placeholder="ƒRƒƒ“ƒg"">
<input type ="submit" value="‘—M">
</form>
</body>
</html>

<?php
header("Content-Type: text/html; charset=UTF-8");
$comment=$_POST['comment'];
$filename='mission_1-6_tanaka.txt';
$fp=fopen($filename,'a');
fwrite($fp,$comment.PHP_EOL);
fclose($fp);
?>