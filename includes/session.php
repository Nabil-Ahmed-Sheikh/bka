<?php
//A class to help work with Sessions
//In our case, primary to manage logging users in and out


class Session {

	private $logged_in;
	public $language;

	function __construct(){
		session_start();
		$this->check_language();
	}

	public function set_language($lang) {
		//database should find user based on username/password
		if($lang){
			$this->language = $_SESSION['language'] = $lang;
		}
	}


	private function check_language(){
		if(isset($_SESSION['language'])) {
			$this->language = $_SESSION['language'];
		} else {
			$this->language = 'Bangla';
		}
	}



}

$session = new Session();


?>
