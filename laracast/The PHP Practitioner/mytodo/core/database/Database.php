<?php
	namespace App\Core;
	class Database
	{
		private $DB_host = "localhost";
		private $DB_name = "mytodo";
		private $DB_username = "root";
		private $DB_password = "";
		public $conn;

		// get the database connection
		public getConnection()
		{
			$this->conn = null;

			try
			{
				$this->conn = new PDO("mysql:host=" . $this->DB_host . ";dbname=" . $this->DB_name, $this->DB_username, $this->password);
			}
			catch(PDOException $exception)
			{
				echo "Connection error : " . $exception->getMessage();
			}

			return $this->conn; 
		}

	}

?>