<form method="post" action="mission_1-4.php">
<input type="text" name="message" value="�R�����g">
<input type="submit" value="���M">

</form>

<?php
$value=$_POST['message'];
$time=date("Y�Nm��d��G��i��");
print'�����͂��肪�Ƃ��������܂��B<br>
�'.$time.'�v�ɢ'.$value.'����󂯕t���܂����B';
?>