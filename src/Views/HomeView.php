<?php 
	namespace mvc\Views;

	class HomeView
	{
		private static $response;

		public static function render(){
			include 'pages/home.php';
		}

		public static function request($request){
			self::$response = \mvc\Controllers\HomeController::requester($request);
			return self::$response;
		}
	}