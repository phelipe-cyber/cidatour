<?php

	class System{
		public function __construct($view){
			// print_r($view);
			if (file_exists("views/{$view}.php")) {
				$file =$view;
			}else{
				$file ='404';
			}
			
			$this->get_header();

			include('views/'.$file.'.php');

			$this->get_footer();
		}
		private function get_header(){
			include('./header.php');
		}

		private function get_footer(){
			include('./footer.php');
		}
	}