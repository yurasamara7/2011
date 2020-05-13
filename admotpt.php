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



$tablica=$tabl32; 
if ($filtr=="vse") {
$filtr1="";
}
else {
$filtr1="where (Dataplat >= '$datfirst') AND (Dataplat <= '$datsecnd')"; //
}


if ($sort=="podat") {
$sort1="Dataplat";
}
else {
$sort1="Nomzap";
}

$query1 = "select * from $bazd77.$tablica $filtr1 order by $sort1"; // создаем запрос

$result1=$db->query($query1);

$res_array=array(); // создаем массив

// пихаем таблицу из БД в двумерный массив
for ($count=0; $row=$result1->fetch_assoc();$count++) {
$res_array[$count][0]=$row['Nomzap'];
$res_array[$count][1]=$row['Dataplat'];
$res_array[$count][2]=$row['EmailUser'];
$res_array[$count][3]=$row['Summaplat'];
$res_array[$count][4]=$row['Summareal'];
$res_array[$count][5]=$row['Tipplat'];
}
// ----- end
echo "<table border=0 align=center>";
echo "<tr>
<td align=center>";

// -------- выводим заглавия таблицы
echo "<table border=2 align=center>";
if ($filtr=="vse") {
echo "<CAPTION> Отчет по платежам за весь период </CAPTION>";
} else {
echo "<CAPTION> Отчет по платежам с $datfirst по $datsecnd </CAPTION>";
}
echo "<tr>
<td align=center>Номер записи</td>
<td align=center>Дата платежа</td>
<td align=center>Email пользователя</td>
<td align=center>Сумма перечисленная</td>
<td align=center>Сумма зачисленная</td>
<td align=center>Тип платежа</td>
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
echo "</td>";
echo "<td>";


echo "</td>";
echo "</tr>";
echo "</table>";

$db->close();

?>