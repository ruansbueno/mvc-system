<?php 
	namespace mvc\Controllers;

	class ContatoController
	{
		private static $response;

		public function init(){
			\mvc\Views\ContatoView::render();
		}

		public static function requester($request){
			self::$response = \mvc\Models\ContatoModel::getContent($request);

			return self::$response;
		}
	}