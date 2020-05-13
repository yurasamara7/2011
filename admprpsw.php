<?php
// ------------ http:www.internetbizn.ru
$Password1=$_POST['Password1'];

if (!$Password1) {
echo "Вы не ввели пароль <br/>";
echo  "Закройте окно и повторите ввод";
exit;
}


if (!get_magic_quotes_gpc()) {
$Password1=addslashes($Password1);
}


require_once("adm1psw.php"); // грузим первый пароль
require_once("confprg.php"); // грузим переменные


$db=new mysqli($host77,$user77,$passw77,$bazd77); // соединяемся с базой данных

// --------------------------------- проверяем соединение с базой данных
if (mysqli_connect_errno()) {
echo "Ошибка соединения с базой данной.Попробуйте позже";
exit;
}
// ----------------


// ---------------- если нет то создаем таблицу пароля

$sql = "\n"
    . " CREATE TABLE  IF NOT EXISTS $bazd77.$tabl35 ( `Nomzap` int( 11 ) NOT NULL ,\n"
    . " `Passwordadm` text NOT NULL ,\n"
    . " PRIMARY KEY ( `Nomzap` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);

// ---------------- проверяем есть ли запись пароля в базе данных и если есть скачиваем запись в массив
$query1 = "select * from $bazd77.$tabl35 where  `Nomzap`='1'";

$result1=$db->query($query1);

$row = $result1->fetch_assoc();

$Nomzap1=$row['Nomzap'];
$Password2=$row['Passwordadm'];
// ------------------------------------


// --- запись пароля в базе есть, проверим правильно ли ввели пароль ----
if ($Nomzap1=="1") {

if ($Password1==$Password2) {   
echo <<<vibradm11

<form action="admvpmn.php" BORDER="0" metod="post">
<fieldset>
<TABLE BORDER="0" FRAME="BORDER" align="center">
<CAPTION> Выберите пункт администрирования </CAPTION>

<TR>
<TD>
<input type="radio" name="viborp" checked="checked" value="otchizm" id="izmotch">
</TD>
<TD>
<label for="izmotch">Отчеты по таблицам и их изменения</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="viborp" value="izmadm" id="admizm">
</TD>
<TD>
<label for="admizm">Изменение пароля администратора</label>
</TD>
</TR>

<TR>
<TD>
<input type="radio" name="viborp" value="otvfos" id="otvfos">
</TD>
<TD>
<label for="otvfos">Ответы по форме обратной связи</label>
</TD>
</TR>


<TR>
<TD>
<input type="submit" value="Ввод">
</TD>
</TR>

</TABLE>
</fieldset>
</form>

vibradm11;
}
else {
echo "Неправильный пароль<br/>";
echo "Закройте окно и повторите ввод";

exit;
}
// -------------------------------------------------------------------------
}
// --- записи пароля в базе нет, проверим соответствует ли введенный пароль первоначальному паролю --------
// введем новый пароль
else {
if ($Password1==$admpas1) {       
echo <<<platn71
<form action="admmpsw.php" method="post">
<table align="center" border="0" >

<tr>
<td> Введите и запомните новый пароль </td>
<td> <input type="text" name="Passwordnew" maxlength="15" size="15"></td>
</tr>  

<tr>
<td colspan="2" align="center"><input type="submit" value="Ввод"  size="35"></td>
</tr> 

</table>
</form>
<h4 align="center"> Если не созданы, то будут созданы таблицы пользователей, платежей, посещений сайта 
</h4>
platn71;

}
else {
echo "Неправильный пароль <br/>";
echo "Закройте окно и попробуйте еще раз";
exit;
}
}


$db->close();
?>
