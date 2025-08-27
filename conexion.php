<?php

	function conexion(){

	$host = "host=@dpg-d2nmblmmcj7s73cov840-a.oregon-postgres.render.com";
	$port = "port=5432";
	$dbname = "dbname=exampledbrnube2";
	$user = "user=exampledbrnube2_user";
	$password = "password=cQWzk0g9Uc327yLZC2yz7htjjT2UvnN2";

	$db = pg_connect("$host $port $dbname $user $password");

	return $db;
}
?>