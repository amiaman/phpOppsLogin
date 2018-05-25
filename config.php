<?php
abstract class Connection {
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "user_logindb";
	public $conn;
	//abstract method
	abstract function set_connection();
}
class connection_db extends Connection{
	//Create Connection
	function set_connection() {
		$this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
	}
}
$connection_db = new connection_db();
$connection_db->set_connection();
?>
