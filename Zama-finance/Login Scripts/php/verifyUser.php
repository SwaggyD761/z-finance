<?php

	// Retrieve email and password values from form
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Connect to database
	$servername = "localhost";
	$username = "username";
	$password_db = "password";
	$dbname = "Zama_Finance";

	$conn = new mysqli($servername, $username, $password_db, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// Query to check if email and password combination exists in Accounts table
	$sql = "SELECT * FROM Accounts WHERE email='$email' AND password='$password' LIMIT 1";
	$result = $conn->query($sql);

	// If a matching record is found, redirect user to home page
	if ($result->num_rows == 1) {
	  header('Location: home.html');
	  exit();
	} else {
	  // Query to check if email exists in Accounts table
	  $sql = "SELECT * FROM Accounts WHERE email='$email' LIMIT 1";
	  $result = $conn->query($sql);
	  
	  // If email exists in Accounts table, display error message for incorrect password
	  if ($result->num_rows == 1) {
		echo "<script>alert('Invalid password. Please try again.');</script>";
	  } else {
		// If email doesn't exist in Accounts table, redirect user to sign up page
		header('Location: signup.html');
		exit();
	  }
	}

	$conn->close();

?>