<?php
include("_mysql.php");
include("_additional.php");
$headers  = 'MIME-Version: 1.0'."\r\n".'Content-type: text/html; charset=utf-8'."\r\n".'From: '.$additional[2].' <noreplay@'.str_replace('www.','',$_SERVER['SERVER_NAME']).'>'."\r\n";
if(isset($_POST['name']))
	mail($additional[11], 'Заказ ЗВОНКА с сайта '.str_replace('www.','',$_SERVER['SERVER_NAME']), '<p>На сайте <a href="http://'.$_SERVER['SERVER_NAME'].'/">'.str_replace('www.','',$_SERVER['SERVER_NAME']).'</a> заказали ЗВОНОК.</p><p>Имя: <b>'.$_POST['name'].'</b></p><p>Телефон: <b>'.$_POST['phn'].'</b> ('.$_POST['when_date'].' '.$_POST['when_time'].')</p><p>Отправлено со траницы: <a href="'.$_POST['page'].'">'.$_POST['page'].'</a></p>', $headers);
else
	mail($additional[11], 'ВОПРОС с сайта '.str_replace('www.','',$_SERVER['SERVER_NAME']), '<p>С сайта <a href="http://'.$_SERVER['SERVER_NAME'].'/">'.str_replace('www.','',$_SERVER['SERVER_NAME']).'</a> пришел новый вопрос:</p><p><b>'.str_replace('\n','</b></p><p><b>',$_POST['mess']).'</b></p><p>Телефон: <b>'.$_POST['phn'].'</b></p><p>Отправлено со траницы: <a href="'.$_POST['page'].'">'.$_POST['page'].'</a></p>', $headers);
?>OK