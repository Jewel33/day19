<?php 
namespace App\Classes;

	class Demo{
		public $name = "Nur Nobi";
		protected $email = "nur@gmail.com";
		private $mobile = "4395734";
		//static $city ="Feni";

		public function test(){
			echo "In test";
			//$this->hello();
			//echo Demo::$city;
		}

		protected function hello(){
			echo "In hello";
		}

		private function world(){
			echo "In world";
		}
	}
?>
