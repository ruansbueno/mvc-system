<?php
	namespace mvc\Models;

	class HomeModel
	{
		public static function getContent($content = 'all'){
			if($content == 'all'){
				return 'All my content';
			}else{
				return $content.' Content';
			}
		}
	}