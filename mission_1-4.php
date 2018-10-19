<html lang="ja">
<head>
<meta http-equiv="content-type" charset="utf-8">
</head>
<body>
<form method="post" action="mission_1-4.php">
<input type="text" name="message" value="コメント">
<input type="submit" value="送信">

</form>

<?php
$value=$_POST['message'];
$time=date("Y年m月d日G時i分");
print'ご入力ありがとうございます。<br>
｢'.$time.'」に｢'.$value.'｣を受け付けました。';
?>
