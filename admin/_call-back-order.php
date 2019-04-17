<?php
include("_mysql.php");
include("_additional.php");
$headers  = 'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8'."\r\n".'From: '.$additional[11].' <noreplay@'.$_SERVER['SERVER_NAME'].'>'."\r\n";
mail($additional[11], 'Обратный звонок для '.$_POST['name'], '<p>'.$_POST['name'].' ('.$_POST['nomer'].')</p>', $headers);
?>
<p style="color:green">Сообщение отправлено. Менеджер свяжется с Вами в ближайшее время.</p>