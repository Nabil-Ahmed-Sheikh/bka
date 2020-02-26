<?php
require_once("initialize.php");
require_once(LIB_PATH.DS."config.php");


class Database
{
	private $connection;
	public $last_query;
	private $magic_quotes_active;
	private $real_escape_string_exists;

	function __construct() {
		$this->open_connection();
		$this->magic_quotes_active = get_magic_quotes_gpc();
		$this->real_escape_string_exists = function_exists("mysql_real_escape_string");
	}

	public function open_connection(){
		try {
			$this->connection = new PDO('pgsql:host=localhost;dbname='.DB_NAME, DB_USER, DB_PASS);
		} catch (PDOException $e) {
			die('Error! ' . $e->message);
		}
	}

	public function close_connection(){
		if(isset($this->connection)){
			unset($this->connection);
		}
	}

	public function query($sql){
		$this->last_query = $sql;
		$stmt = $this->connection->prepare($sql);
		$stmt->execute();
    $result = $stmt->fetchAll();


		//$this->confirm_query($result);
		return $result;
	}

	public function escape_value($value) {
		$magic_quotes_active = get_magic_quotes_gpc();
		$new_enough_php = function_exists("mysql_real_escape_string");
		if($this->real_escape_string_exists) {
			if($this->magic_quotes_active) {
				$value = stripslashes($value);
			}
			$value = mysql_real_escape_string($value);
		} else {
			if(!$this->magic_quotes_active){
				$value = addslashes($value);
			}
		}
		return $value;
	}




	private function confirm_query($result) {
		if(!$result){
			$output = "Database query failed!" . "<br /><br />";
			$output .= "Last SQL query: " . $this->last_query;
			die($output);
		}
	}

}

$database = new Database();
$db =& $database;

?>
