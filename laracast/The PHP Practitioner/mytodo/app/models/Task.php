<?php

	namespace App\Models;
	use PDO;
	class Task
	{
		// database connection and table name
		private $pdo;
		private $table_name = "tasks";

		// object properties
		public $id;
		public $title;
		public $description;
		public $status;

		public function __construct($pdo)
		{
			$this->pdo = $pdo;
		} 

		function getTasks()
		{
			$query = "SELECT * 
					FROM 
						tasks";

			$stmt = $this->pdo->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function create()
		{
			try
			{
				$stmt = $this->pdo->prepare("INSERT INTO tasks(id, title, description, status) VALUES(:id, :title, :description, :status)");
				$stmt->bindParam(":id", $this->id);
				$stmt->bindParam(":title", $this->title);
				$stmt->bindParam(":description", $this->description);
				if($this->status == 'on')
					$this->status = 1;
				else
					$this->status = 0;
				$stmt->bindParam(":status", $this->status);
				$stmt->execute();
				return true;
			}
			catch(PDOException $e)
			{
				$e->getMessage();
				return false;
			}
			
		}

	}

?>