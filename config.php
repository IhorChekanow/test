<?php
ini_set( "display_errors", true ); // выводит ошибки в браузер, необходима для отладки кода
date_default_timezone_set( "Europe/Kiev" ); //временная зона // http://www.php.net/manual/en/timezones.php
//переменные окружения
define( "DB_HOST", "localhost");  //адрес хоста
define( "DB_NAME", "Clients"); //Имя БД
define( "DB_USER", "root"); //Имя юзера
define( "DB_PASS", ""); //Пароль

define( "MAIL", "true"); //отправка электронных писем
define( "TOKEN", "a53u7fqvi49ejwpjcjpb69wiift7ix");
define( "FEW_ROWS", false); //отдельные строки для каждой цены
error_reporting(0);

//свойства пользоывателя
$GLOBALS['a'] = 1;

//регулировка наценок
$SOFT_COVER = array(0.01,0.02,0.03,0.04,0.05,0.06,0.07);
$FLEXIBLE_COVER = array(0.01,0.02,0.03,0.04,0.05,0.06,0.07);
$HARD_COVER = array(0.01,0.02,0.03,0.04,0.05,0.06,0.07);
$CARDBOARD_BOOK = array(0.01,0.02,0.03,0.04,0.05,0.06,0.07);
$CARD_GAME = array(0.01,0.02,0.03,0.04,0.05,0.06,0.07);
$PACKAGIN = array(0.01,0.02,0.03,0.04,0.05,0.06,0.07);
$HANDMADE = array(0.01,0.02,0.03,0.04,0.05,0.06,0.07);

function handleException( $exception ) { // Создаем обработчик исключительных ситуаций
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}
set_exception_handler( 'handleException' );
//wpscoil1_mainsite
//wpscoil1_mainsit
//Q1w2e3r44852
?>
