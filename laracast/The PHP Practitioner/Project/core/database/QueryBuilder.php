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

		public function insert($table, $parameters)
		{
			$sql = sprintf(
					'INSERT INTO %s(%s) values(%s)',
					$table,
					// in = [1,2,3] -> convert to string 1,2,3
					implode(',', array_keys($parameters)),
					":" . implode(', :', array_keys($parameters))
				);

			try
			{
				$statement = $this->pdo->prepare($sql);
				$statement->execute($parameters);
			} catch(Exception $e)
			{
				//die('Whoops, Something went wrong');
				die($e->getMessage());
			}
			
		}
	}	

?>