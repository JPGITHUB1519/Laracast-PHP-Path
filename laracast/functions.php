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
?>