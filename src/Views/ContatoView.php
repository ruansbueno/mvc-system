<?php 
	namespace mvc\Views;

	class ContatoView
	{
		private static $response;

		public static function render(){
			include 'pages/contato.php';
		}

		public static function request($request){
			self::$response = \mvc\Controllers\ContatoController::requester($request);
			return self::$response;
		}
	}