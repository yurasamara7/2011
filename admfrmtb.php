<?php
@ session_start(); // открываем ссесию
// ------------ http:www.internetbizn.ru

$_SESSION['$vbrtbl']=$_GET['vbrtbl']; //выбор таблицы
$_SESSION['$sort']=$_GET['sort']; //выбор сортировки
$_SESSION['$filtr']=$_GET['filtr']; //выбор фильтра
$_SESSION['$datfirst']=$_GET['datfirst']; //выбор первой даты
$_SESSION['$datsecnd']=$_GET['datsecnd']; //выбор второй даты

if ($_GET['filtr']=="per") {

//if (!$_GET['$datfirst']||!$_GET['$datsecnd']) {
// echo "Вы не ввели дату(ы).<br/>".
//       "Повторите ввод";
// exit;
//}

//if ($_GET['$datfirst']>!$_GET['$datsecnd']) {
// echo "Дата начала периода больше даты окончания периода.<br/>".
//       "Повторите ввод";
// exit;
//}

}



echo " <frameset rows=20%,* border=3> ";
echo "<frame src=admrobrt.php name=verhFrame scrolling=No noresize=noresize id=verhFrame />";

switch ($_GET['vbrtbl']) {

case "pls":
echo "<frame src=admotpl.php name=nizFrame scrolling=yes noresize=noresize id=nizFrame />";
break;

case "pt":
echo "<frame src=admotpt.php name=nizFrame scrolling=yes noresize=noresize id=nizFrame />";
break;

case "ps":
echo "<frame src=admotps.php name=nizFrame scrolling=yes noresize=noresize id=nizFrame />";
break;

}

echo "</frameset>";
echo "<noframes>";

echo "<body>";

echo "</body>";
echo "</noframes>";




?>