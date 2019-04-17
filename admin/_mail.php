<?php
include("_mysql.php");
include("_additional.php");
$headers  = 'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8'."\r\n".'From: '.$additional[2].' <noreplay@'.$_SERVER['SERVER_NAME'].'>'."\r\n";
mail($additional[11], 'Заявка с сайта', '<p>Имя: <b>'.$_POST['name'].'</b></p><p>Телефон: <b>'.$_POST['phone'].'</b></p>'.($_POST['goodid']>0?'<p>Товар: <a href="http://'.$_SERVER['SERVER_NAME'].'/goods/'.$_POST['goodid'].'/">'.$_POST['goodname'].'</a></p>':''), $headers);
?>
<p style="color:green;margin:20px 0;font-weight:bold;text-align:center;font-size:120%"><?=($_POST['goodid']>0?'Заказ принят':'Сообщение отправлено')?>.<br/>Менеджер свяжется с Вами в ближайшее время.</p>