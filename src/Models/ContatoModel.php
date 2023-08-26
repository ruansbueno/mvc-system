<?php
	namespace mvc\Models;

	class ContatoModel
	{
		public static function getContent($content = 'all'){
			if($content == 'all'){
				return 'All my content';
			}else{
				return $content.' Content';
			}
		}
	}