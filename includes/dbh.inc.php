<?php 
	class dbh {
		private $servername;
		private $username;
		private $password;
		private $dbname;

		protected function connect() {
			$this->servername = 'localhost';
			$this->username   = 'reymark';
			$this->password   = 'password';
			$this->dbname     = 'scoreboard';
			$conn = new mysqli(
				$this->servername, $this->username,
				$this->password,   $this->dbname
				);
			return $conn;
		}
	}


 ?>