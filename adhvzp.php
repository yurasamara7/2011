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

$osntext11=$_POST['osntext11'];
$nompor11=$_POST['nompor11'];

if (!$osntext11||!$nompor11) {
 echo "Вы не ввели сообщение и/или N пользователя.<br/>".
       "Повторите ввод";
 exit;
}

if (!get_magic_quotes_gpc()) {
$osntext11=addslashes($osntext11);
$nompor11=addslashes($nompor11);
}
$nprv="ответ";
$tekdat=date('c');
$tektime=date("H:i:s",time());

$tablica=$tabl36; 

$query1 = "INSERT INTO  $bazd77.$tabl36 (`Nomzap`, `Npor`, `Datasoob`,`Timesoob`, `Soob`, `Naprav`) VALUES (NULL, '".$nompor11."', '".$tekdat."', '".$tektime."', '".$osntext11."', '".$nprv."');";


$result1=$db->query($query1);

$db->close();
require_once("adhnfrm.php");

// ---------------------------------------------

?>