<?php
include "core.php";
/*
Render specific page with footer header etc
*/
	$api = new CMSCore("localhost","root","toor","dflowers");

	$uri=preg_replace('#[a-z0-9]+\.[a-z0-9]+$#i', '', $_SERVER['REQUEST_URI']);
	$get_reqs=explode('/', $uri, 20);

	if($get_reqs[1]=="admin"){
		$api->UIbeginAdminHeader();
			if($api->userPermission==1){
				echo "Открываем админ-панель";
			}else{
				$api->UIgetAuthForm();
			}
		$api->UIendAdminHeader();

	}else{
		echo "Запрашиваем список всех страниц и сравниваем их с текущей";
		//Если не одна не подходит -> 404
		//Если подходит, грузим по шаблону
	}
?>
