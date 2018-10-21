<?php 

$details = R::find('about', 1);
//-print_r($details);
$aboutName= $details[1]['name'];
$aboutDescrip= $details[1]['descrip'];

$title = "Главная";
$content = "Содержание главной страницы";

ob_start();
include ROOT . "templates/_main/_main.tpl";
$content = ob_get_contents();
ob_clean();

include ROOT . "templates/_parts/_header.tpl";
include ROOT . "templates/template.tpl";
include ROOT . "templates/_parts/_footer.tpl";



 ?>