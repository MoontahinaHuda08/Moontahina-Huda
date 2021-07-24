<?php

session_start();


$mysqli= new mysqli("localhost","root", "","issm") or die(mysqli_error($mysqli));

	if (isset($_POST['register'])){
		$name = $_POST['username'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$pass = $_POST['password'];
		
		$mysqli->query("INSERT INTO issmtb(username,email,phone,gender,password) 
						VALUES ('$name','$email','$phone','$gender','$pass')") or
					die($mysqli-> error);
		
		header('location:index.html');
		
		
	}	
?>