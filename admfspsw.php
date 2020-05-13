<?php
require_once("confprg.php"); // грузим переменные
// ------------ http:www.internetbizn.ru

$db=new mysqli($host77,$user77,$passw77,$bazd77); // соединяемся с базой данных

// --------------------------------- проверяем соединение с базой данных
if (mysqli_connect_errno()) {
echo "Ошибка соединения с базой данной.Попробуйте позже";
exit;
}
// ----------------


// ----------------  скачиваем запись в массив

$query1 = "select * from $bazd77.$tabl35 where  `Nomzap`='1'";

$result1=$db->query($query1);

$row = $result1->fetch_assoc();

$Password2=$row['Passwordadm'];
echo <<<menadmpas1
<form action="admzpnps.php" method="post">
<table align="center" border="0" >

<tr>
<td> Пароль </td>
<td> <input type="text" name="Passwordmen" maxlength="25" size="25" value="$Password2"></td>
</tr>  

<tr>
<td colspan="2" align="center"><input type="submit" value="Сохраняем"  size="35"></td>
</tr> 

</table>
</form>
menadmpas1;


?>