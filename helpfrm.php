<?php
// открываем сессию и доступ к ее переменным
@ session_start();



$logint1=$_POST['logint1'];
$_SESSION['$logint1']=$logint1;
$Passwordt1=$_POST['Passwordt1'];


if (!$logint1||!$Passwordt1) {
 echo "Вы не ввели пользователя и/или пароль.<br/>".
       "Повторите ввод";
 exit;
}


if (!get_magic_quotes_gpc()) {
$logint1=addslashes($logint1);
$Passwordt1=addslashes($Passwordt1);
}

require_once("confprg.php"); // грузим переменные

$db=new mysqli($host77,$user77,$passw77,$bazd77); // соединяемся с базой данных

// --------------------------------- проверяем соединение с базой данных
if (mysqli_connect_errno()) {
echo "Ошибка соединения с базой данной.Попробуйте позже";
exit;
}
// ----------------


//-- ищем такого пользователя 
$query1 = "select * from $bazd77.$tabl31 where  `IdUser`='".$logint1."'";
$result1=$db->query($query1);
$row = $result1->fetch_assoc();
$user1=$row['IdUser'];
$Passwordt11=$row['IdPassword'];
$nompor=$row['Npor'];
$_SESSION['$nompor']=$nompor;
// -------------------------------

// --- проверяем пользователя и пароль
if ($user1==$logint1){
if ($Passwordt1==$Passwordt11){

echo <<<tehp
<html>
<head>
<title> Страница техподдержки сайта Инструменты для Вашего бизнеса в Интернете </title>
<style>
table { background-image: url(wood25.jpg);}
div { background-image: url(wood25.jpg);}
form { background-image: url(wood25.jpg);}
p { background-image: url(wood25.jpg);}
body { background-image: #f6f6f6;}
</style>

</head>

<body>
<table align="center"   border="1" width="980px" > 
<tr>
<td>

<h4 align="center"> Введите сообщение администратору </h4>
<form action="helpvsb.php" target="tehFrame" method="post">
 <table align="center" border="0" with="70"> 
  <tr>   
   <td><textarea name="osntext1" cols="80" rows="5"></textarea></td>
  </tr>  
  <tr>
   <td align="center"><input type="submit" value="Ввод"></td>
  </tr>
 </table>
</form>

</td>
</tr>
<tr>
<td align="center">

<iframe  name=tehFrame src=helptbls.php  width=900px  height=750px>
</iframe>

</td>
</tr>
</table> 
</body>
</html>
tehp;
} else {
echo " Пароль не правильный ";
exit;
} 

} else {
echo " Такого пользователя нет ";
exit;
}



$db->close();

?>