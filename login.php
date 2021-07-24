<?php

session_start();

$server="localhost";
$username= "root";
$password= "";
$database="issm";
$mysqli=mysqli_connect($server,$username,$password,$database);
	
	if (isset($_POST['login'])){
		$name = $_POST['username'];
		$pass = $_POST['password'];
		$result = $mysqli->query("SELECT * FROM issmtb WHERE username='$name' and password='$pass' ") 
					or die($mysqli->error());
		$row = $result->fetch_array();
		
		$counter = mysqli_num_rows(result);
		
		if ($row==0){
			echo "Invalid Username or Password";
			header('location: login11.html');
		}
		else
		{
			$_SESSION[username]=$name;
			header('location: index.html');
		}
		
	}
?>