<?php
//A class to help work with Sessions
//In our case, primary to manage logging users in and out


class Session {

	private $logged_in;
	public $user_area;
	public $language;
	public $message;

	function __construct(){
		session_start();
		$this->check_message();
	}


	public function language($lang="") {
		if(!empty($lang)) {
			$_SESSION['language'] = $lang;
		} else {
			return $this->language;
		}
	}

	public function message($msg="") {
		if(!empty($msg)) {
			$_SESSION['message'] = $msg;

		} else {
			return $this->message;
		}
	}



	private function check_message() {
		if(isset($_SESSION['message'])) {
			$this->message = $_SESSION['message'];
			unset($_SESSION['message']);
		} else {
			$this->message = "";
		}
	}

	private function check_area() {
		if(isset($_SESSION['user_area'])) {
			$this->user_area = $_SESSION['user_area'];
		} else {
			$this->user_area = "";
		}
	}

}

$session = new Session();
$message = $session->message();

?>
