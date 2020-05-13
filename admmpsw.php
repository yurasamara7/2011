<?php
// ------------ http:www.internetbizn.ru
$Passwordnew=$_POST['Passwordnew'];
if (!$Passwordnew) {
 echo "Вы не ввели пароль<br/>".
       "Повторите все заново";
 exit;
}

if (!get_magic_quotes_gpc()) {
$Passwordnew=addslashes($Passwordnew);
}

require_once("confprg.php"); // грузим переменные

$db=new mysqli($host77,$user77,$passw77,$bazd77); // соединяемся с базой данных

// --------------------------------- проверяем соединение с базой данных
if (mysqli_connect_errno()) {
  echo "Ошибка соединения с базой данной.Попробуйте позже";
exit;
}
// ----------------


$query2 = "INSERT INTO $bazd77.$tabl35 (`Nomzap`, `Passwordadm`) VALUES ('1', '".$Passwordnew."');";
$result2=$db->query($query2);

echo " Новый пароль зафиксирован в базе данных <br/> ";

// ---- если нет, то создаем таблицу пользователей
$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl31 ( `Npor` int( 11 ) NOT NULL AUTO_INCREMENT ,\n"
    . " `IdUser` text NOT NULL ,\n"
    . " `IdPassword` text NOT NULL ,\n"
    . " `Priznakrazr` int( 11 ) NOT NULL ,\n"
    . " `Datarazr` date NOT NULL ,\n"
    . " `EmailUser` text NOT NULL ,\n"
    . " KEY `Npor` ( `Npor` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);
// ------------------------------------------------------

// ---- если нет, то создаем таблицу платежей

$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl32 ( `Nomzap` int( 11 ) NOT NULL AUTO_INCREMENT ,\n"
    . " `Dataplat` date NOT NULL ,\n"
    . " `EmailUser` text NOT NULL ,\n"
    . " `Summaplat` double NOT NULL ,\n"
    . " `Summareal` double NOT NULL ,\n"
    . " `Tipplat` text NOT NULL ,\n"
    . " PRIMARY KEY ( `Nomzap` ) ,\n"
    . " KEY `Dataplat` ( `Dataplat` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);
//-----------------------------------------------------------------

// ---- если нет, то создаем таблицу посещений
$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl33 ( `Nomzap` int( 11 ) NOT NULL AUTO_INCREMENT ,\n"
    . " `Ip1` text NOT NULL ,\n"
    . " `Datsession` datetime NOT NULL ,\n"
    . " PRIMARY KEY ( `Nomzap` ) ,\n"
    . " KEY `Datsession` ( `Datsession` ) ) ENGINE = MyISAM DEFAULT CHARSET = utf8;";

$result1=$db->query($sql);
//-----------------------------------------------------------------

// ---- если нет, то создаем таблицу формы обратной связи
$sql = "\n"
    . " CREATE TABLE IF NOT EXISTS $bazd77.$tabl36 (`Nomzap` INT NOT NULL AUTO_INCREMENT ,\n"
    . " `Npor` INT NOT NULL ,\n"
    . " `Datasoob` DATE NOT NULL ,\n"
    . " `Timesoob` TIME NOT NULL ,\n"
    . " `Soob` TEXT NOT NULL ,\n"
    . " `Naprav` TEXT NOT NULL ,\n"
    . " PRIMARY KEY (`Nomzap`), INDEX (`Npor`, `Datasoob`)) ENGINE = MyISAM;";

$result1=$db->query($sql);
//-----------------------------------------------------------------

echo " Закройте окно и можете входить режим администрирования с новым паролем <br/> ";

$db->close();

?>