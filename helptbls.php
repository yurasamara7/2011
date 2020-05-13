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

$logint1=$_SESSION['$logint1'];


$tablica=$tabl36; 
$nompor=$_SESSION['$nompor'];

//$filtr1="where Npor = '$logint1'"; //
$filtr1="where Npor = '$nompor'"; //



$sort1="Nomzap";


$query1 = "select * from $bazd77.$tablica $filtr1 order by $sort1 DESC "; // создаем запрос

$result1=$db->query($query1);

$res_array=array(); // создаем массив

// пихаем таблицу из БД в двумерный массив
for ($count=0; $row=$result1->fetch_assoc();$count++) {
$res_array[$count][0]=$row['Nomzap'];
$res_array[$count][1]=$row['Npor'];
$res_array[$count][2]=$row['Datasoob'];
$res_array[$count][3]=$row['Timesoob'];
$res_array[$count][4]=$row['Soob'];
$res_array[$count][5]=$row['Naprav'];
}
// ----- end

// -------- выводим заглавия таблицы
echo "<table border=2 align=center>";
echo "<CAPTION> Хронология сообщений </CAPTION>";

echo "<tr>
<td align=center>Дата сообщения</td>
<td align=center>Время сообщения</td>
<td align=center>Вопрос/ответ</td>
<td align=center>Сообщение</td>
</tr>";
// ----- end


// ----- выводим данные из массива в табличном виде
for ($kstr=0; $kstr<$count; $kstr++) {
echo "<tr>
<td align=center>".$res_array[$kstr][2]."</td>
<td align=center>".$res_array[$kstr][3]."</td>
<td align=center>".$res_array[$kstr][5]."</td>
<td align=center>".$res_array[$kstr][4]."</td>
</tr>";
}
echo "</table>";
// ----- end

$db->close();

?>