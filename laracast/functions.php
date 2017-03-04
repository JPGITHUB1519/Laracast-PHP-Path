<?php
	function dd($val)
	{
		echo '<pre>';
		die(var_dump($val));
		echo '</pre>';
	}

	function access($age)
	{
		if($age >= 21)
		{
			echo "You can Access to this Site";
			return True;
		}
		else
		{
			echo "You cannot  Access to this Site";
			return False;
		}
	}

	function connectToDb()
	{
		try
		{
			return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'root');
		}
		catch(PDOException $e)
		{
			die('Could Not Connect to Database');
		}
	}

	function fetchAllTasks($pdo)
	{
		$statement = $pdo->prepare('SELECT * FROM todos');
		$statement->execute();
		// TO CONVERT TO CUSTOM CLASSES
		$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
		return $tasks;
	}
?>