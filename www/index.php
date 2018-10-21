<?php
require "config.php";
require "db.php";


// echo ROOT;
// print_r($_SERVER);

/*...............................
			ROUTER
................................*/

$uri = $_SERVER['REQUEST_URI']; //-получаем цепочку запроса из адресной строки
$uri = rtrim($uri, '/'); //-убираем слэш на конце этой цепочки запроса
$uri = filter_var($uri, FILTER_SANITIZE_URL); //- защита от символов, которые добавляет хакер
$uri = substr($uri, 1); //- убираем первый слэш у цепочки
$uri = explode('?', $uri);//-разбиваем цепочку на массив запросов, до ? и get-запрос после?

// echo $uri[0];
// echo "<br><br>";
switch($uri[0]){

	case '':
		include "modules/main/index.php";
		break;
		
	case 'about':
		include "modules/about/index.php";
		break;
	
	case 'blog':
		include "modules/blog/index.php";
		break;

	case 'contacts':
		include "modules/contacts/index.php";
		break;

	default:
		echo "404 and Main";
		break;

}


?>