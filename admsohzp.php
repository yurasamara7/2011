<?php
@ session_start(); // открываем ссесию
// ------------ http:www.internetbizn.ru

require_once("confprg.php"); // грузим переменные

$db=new mysqli($host77,$user77,$passw77,$bazd77); // соединяемся с базой данных

// --------------------------------- проверяем соединение с базой данных
if (mysqli_connect_errno()) {
echo "Ошибка соединения с базой данной.Попробуйте позже";
exit;
}
// ----------------


switch ($_SESSION['$vbrtbl']) {

case "pls":
$pols10=$_POST['pols10'];
$psw10=$_POST['psw10'];
$prr10=$_POST['prr10'];
$dkr10=$_POST['dkr10'];
$eml10=$_POST['eml10'];

if (!get_magic_quotes_gpc()) {
$pols10=addslashes($pols10);
$psw10=addslashes($psw10);
$prr10=addslashes($prr10);
$dkr10=addslashes($dkr10);
$eml10=addslashes($eml10);
}

$tablica=$tabl31;
$polezap="Npor";

$nzp1=$_SESSION['$nzp1'];
$query1 = "UPDATE $bazd77.$tablica SET `IdUser` = '".$pols10."', `IdPassword` = '".$psw10."', `Priznakrazr` = '".$prr10."', `Datarazr` = '".$dkr10."', `EmailUser` = '".$eml10."' where $tablica.$polezap = '".$nzp1."'"; // создаем запрос на всю таблицу

$result1=$db->query($query1);

if ($result1) {
require_once("admotpl.php");
}
else {
echo "Некорректная запись в таблицу пользователей";
}
break;

case "pt":
$dpl10=$_POST['dpl10'];
$eml10=$_POST['eml10'];
$spl10=$_POST['spl10'];
$szl10=$_POST['szl10'];
$tpl10=$_POST['tpl10'];

if (!get_magic_quotes_gpc()) {
$dpl10=addslashes($dpl10);
$eml10=addslashes($eml10);
$spl10=addslashes($spl10);
$szl10=addslashes($szl10);
$tpl10=addslashes($tpl10);
}

$tablica=$tabl32;
$polezap="Nomzap";

$nzp1=$_SESSION['$nzp1'];
$query1 = "UPDATE $bazd77.$tablica SET `Dataplat` = '".$dpl10."', `EmailUser` = '".$eml10."', `Summaplat` = '".$spl10."', `Summareal` = '".$szl10."', `Tipplat` = '".$tpl10."' where $tablica.$polezap = '".$nzp1."'"; // создаем запрос на всю таблицу

$result1=$db->query($query1);

if ($result1) {
require_once("admotpt.php");
}
else {
echo "Некорректная запись в таблицу пользователей";
}


break;



}




?>