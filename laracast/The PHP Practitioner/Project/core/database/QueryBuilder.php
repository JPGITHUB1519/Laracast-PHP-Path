<?php
	class QueryBuilder
	{
		protected $pdo;

		public function __construct($pdo)
		{
			$this->pdo = $pdo;
		}

		public function selectAll($table)
		{
			$statement = $this->pdo->prepare("SELECT * FROM {$table}");
			$statement->execute();
			return $statement->fetchAll(PDO::FETCH_CLASS);
		}

		public function insertTask($description)
		{
			$statement = $this->pdo->prepare("INSERT INTO todos(description, completed) VALUES (:description, False)");
			$statement->bindParam(':description', $description, PDO::PARAM_STR);
			$statement->execute();
		}
	}	

?>