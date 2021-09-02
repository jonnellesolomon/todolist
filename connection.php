<?php
	$db = new mysqli("localhost", "root", "", "todolist");
 
	if(!$db){
		die("Error: Cannot connect to the database");
	}
?>
