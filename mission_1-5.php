<html lang = "ja"> 
<head>
<meta http-equiv="content-type" charset="utf-8">
</head>
<body>
<form action = "mission_1-5.php" method="post">
<input type = "text" name="comment" value=""placeholder="�R�����g"">
<input type ="submit" value="���M">
</form>
</body>
</html>

<?php
header("Content-Type: text/html; charset=UTF-8");

if(($_POST['comment'])=="�����I"){
echo "���߂łƂ�";
}
else if(!empty($_POST['comment'])){
$comment=$_POST['comment'];

echo "�����͂��肪�Ƃ��������܂�<br>"  . date("Y�Nm��d�� H��i��s�b") . "�� $comment ���󂯕t���܂���";

}?>

<?php
header("Content-Type: text/html; charset=UTF-8");
$comment=$_POST['comment'];
$filename='mission_1-5_tanaka.txt';
$fp=fopen($filename,'w');
fwrite($fp, $comment);
fclose($fp);
?>