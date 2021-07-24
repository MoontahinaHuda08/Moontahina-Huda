<?php

session_start();


$mysqli= new mysqli("localhost","root", "","issm") or die(mysqli_error($mysqli));

	if (isset($_POST['submit'])){
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$enquiry = $_POST['enquiry'];
		
		
		$mysqli->query("INSERT INTO issmcontact(firstname,lastname,email,phone,enquiry) 
						VALUES ('$fname','$lname','$email','$phone','$enquiry')") or
					die($mysqli-> error);
		
		header('location:index.html');
		
		
	}	
?>