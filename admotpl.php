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

$vbrtbl=$_SESSION['$vbrtbl'];
$sort=$_SESSION['$sort'];
$filtr=$_SESSION['$filtr'];
$datfirst=$_SESSION['$datfirst'];
$datsecnd=$_SESSION['$datsecnd'];

$tablica=$tabl31; 
if ($filtr=="vse") {
$filtr1="";
}
else {
$filtr1="where (Datarazr >= '$datfirst') AND (Datarazr <= '$datsecnd')"; //
}


if ($sort=="podat") {
$sort1="Datarazr";
}
else {
$sort1="Npor";
}

$query1 = "select * from $bazd77.$tablica $filtr1 order by $sort1"; // создаем запрос

$result1=$db->query($query1);

$res_array=array(); // создаем массив

// пихаем таблицу из БД в двумерный массив
for ($count=0; $row=$result1->fetch_assoc();$count++) {
$res_array[$count][0]=$row['Npor'];
$res_array[$count][1]=$row['IdUser'];
$res_array[$count][2]=$row['IdPassword'];
$res_array[$count][3]=$row['Priznakrazr'];
$res_array[$count][4]=$row['Datarazr'];
$res_array[$count][5]=$row['EmailUser'];
}
// ----- end

// -------- выводим заглавия таблицы
echo "<table border=2 align=center>";

if ($filtr=="vse") {
echo "<CAPTION> Отчет по пользователям за весь период </CAPTION>";
} else {
echo "<CAPTION> Отчет по пользователям с $datfirst по $datsecnd </CAPTION>";
}

echo "<tr>
<td align=center>Порядковый номер</td>
<td align=center>Пользователь</td>
<td align=center>Пароль</td>
<td align=center>Признак разрешения</td>
<td align=center>Дата разрешения</td>
<td align=center>Email</td>
</tr>";
// ----- end


// ----- выводим данные из массива в табличном виде
for ($kstr=0; $kstr<$count; $kstr++) {
echo "<tr>
<td align=center>".$res_array[$kstr][0]."</td>
<td align=center>".$res_array[$kstr][1]."</td>
<td align=center>".$res_array[$kstr][2]."</td>
<td align=center>".$res_array[$kstr][3]."</td>
<td align=center>".$res_array[$kstr][4]."</td>
<td align=center>".$res_array[$kstr][5]."</td>
</tr>";
}
echo "</table>";
// ----- end

$db->close();

?>