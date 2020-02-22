<?php
require_once("initialize.php");
require_once(LIB_PATH.DS."config.php");


class MySQLDatabase
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
			$sql = 'select * from catagory';
			var_dump()
		} catch (PDOException $e) {
			die('Error! ' . $e->message);
		}

	}

	public function close_connection(){
		if(isset($this->connection)){
			mysqli_close($this->connection);
			unset($this->connection);

		}
	}

	public function query($sql){
		$this->last_query = $sql;
		$result = mysqli_query($this->connection, $sql);
		$this->confirm_query($result);
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

	public function fetch_array($result_set) {
		return mysqli_fetch_array($result_set);
	}

	public function num_rows($result_set) {
		return mysqli_num_rows($result_set);
	}

	public function insert_id() {
		// get the last id inserted over the current db connection
		return mysqli_insert_id($this->connection);
	}

	public function affected_rows() {
		return mysqli_affected_rows($this->connection);
	}

	private function confirm_query($result) {
		if(!$result){
			$output = "Database query failed: " . mysqli_error($this->connection) . "<br /><br />";
			$output .= "Last SQL query: " . $this->last_query;
			die($output);
		}
	}

}

$database = new MySQLDatabase();
$db =& $database;

?>
