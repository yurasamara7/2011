<?php
$Passwordmen=$_POST['Passwordmen'];
// ------------ http:www.internetbizn.ru
require_once("confprg.php"); // грузим переменные

$db=new mysqli($host77,$user77,$passw77,$bazd77); // соединяемся с базой данных

// --------------------------------- проверяем соединение с базой данных
if (mysqli_connect_errno()) {
echo "Ошибка соединения с базой данной.Попробуйте позже";
exit;
}
// ----------------

// ----------------  записываем пароль

$query1 = "UPDATE $bazd77.$tabl35 SET `Passwordadm` = '".$Passwordmen."' where  `Nomzap`='1'";
$result1=$db->query($query1);
if ($result1) {
echo "Пароль благополучно изменен";
}
else {
echo "Не получилось изменить пароль";
}

?>