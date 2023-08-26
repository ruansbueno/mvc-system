<?php 
	namespace mvc\Controllers;

	class HomeController
	{
		private static $response;

		public function init(){
			\mvc\Views\HomeView::render();
		}

		public static function requester($request){
			self::$response = \mvc\Models\HomeModel::getContent($request);

			return self::$response;
		}
	}