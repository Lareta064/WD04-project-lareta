<?php
//-переменные для БД
define('DB_HOST', 'localhost');
define('DB_NAME', 'webdev-team04-lareta');
define('DB_USER', 'root');
define('DB_PASS', '');

//-Хост
define('HOST', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/');

//-физический путь к корневой директори скрипта
define('ROOT', dirname(__FILE__). '/');



?>