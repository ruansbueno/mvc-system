<?php
	include 'vendor/autoload.php';

	$url = isset($_GET['url']) ? $_GET['url'] : 'Home';
	$controller = ucfirst(explode('/', $url)[0].'Controller');

	if(file_exists('src/Controllers/'.$controller.'.php')){
		$controller = '\mvc\Controllers\\'.$controller;
    	$app = new $controller();
    	$app->init();
	}else{
		include 'src/Views/pages/404.php';
	}
