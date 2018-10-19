<html lang = "ja"> 
<head>
<meta http-equiv="content-type" charset="utf-8">
</head>
<body>
<form action = "mission_1-5.php" method="post">
<input type = "text" name="comment" value=""placeholder="コメント"">
<input type ="submit" value="送信">
</form>
</body>
</html>

<?php
header("Content-Type: text/html; charset=UTF-8");

if(($_POST['comment'])=="完成！"){
echo "おめでとう";
}
else if(!empty($_POST['comment'])){
$comment=$_POST['comment'];

echo "ご入力ありがとうございます<br>"  . date("Y年m月d日 H時i分s秒") . "に $comment を受け付けました";

}?>

<?php
header("Content-Type: text/html; charset=UTF-8");
$comment=$_POST['comment'];
$filename='mission_1-5_tanaka.txt';
$fp=fopen($filename,'w');
fwrite($fp, $comment);
fclose($fp);
?>