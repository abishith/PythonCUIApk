<?php
	define('DB_HOST', '192.241.244.177');
	define('DB_NAME', 'db_BP_Dmart');
	define('DB_USER','root');
	define('DB_PASSWORD','tecnics');
	$userName = $_GET['userName'];
	$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, "db_BP_Dmart", 3306);
	$query = "insert into Users (UserName) values ('$userName')";
	$data = $connection->query($query); 
	if($data)
	{
		echo "Registered as ".$userName;
	}
	$connection->close()
?>
