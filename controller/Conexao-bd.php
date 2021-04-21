<?php
error_reporting(E_ERROR | E_PARSE);


  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'todo-list';

$con = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
