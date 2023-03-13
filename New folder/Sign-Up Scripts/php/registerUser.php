<?php
// Connect to the Zama_Finance database
$host = 'localhost';
$username = 'your_database_username';
$password = 'your_database_password';
$dbname = 'Zama_Finance';

$conn = new mysqli($host, $username, $password, $dbname);

// Check for errors connecting to the database
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$cellnumber = $_POST['cellnumber'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	
	// Validate form data
	if (empty($name) || empty($surname) || empty($cellnumber) || empty($email) || empty($password) || empty($confirmpassword)) {
		die("Please fill in all required fields.");
	}
	
	if ($password !== $confirmpassword) {
		die("Password and Confirm Password must match.");
	}
	
	// Check if email already exists in the Accounts table
	$sql = "SELECT * FROM Accounts WHERE email='$email'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		// Redirect user to Login page with error message
		header("Location: Login.php?error=email_already_exists");
		exit;
	} else {
		// Insert user data into Signed_Up_Accounts table
		$sql = "INSERT INTO Signed_Up_Accounts (name, surname, cellnumber, email, password, is_Tokenized) VALUES ('$name', '$surname', '$cellnumber', '$email', '$password', false)";
		if ($conn->query($sql) === FALSE) {
			die("Error: " . $sql . "<br>" . $conn->error);
		}
		
		// Verify email and tokenize user
		verifyEmail($email);
	}
}

// Verify email function
function verifyEmail($email) {
	// Your code for verifying the email goes here
	// If verification is successful, call the tokenizeUser function
	tokenizeUser($email);
}

// Tokenize user function
function tokenizeUser($email) {
	// Update the Signed_Up_Accounts table to set is_Tokenized to true for the matching email
	$sql = "UPDATE Signed_Up_Accounts SET is_Tokenized=true WHERE email='$email'";
	if ($conn->query($sql) === FALSE) {
		die("Error: " . $sql . "<br>" . $conn->error);
	}
	
	// Redirect user to Home page
	header("Location: Home.php");
	exit;
}

$conn->close();
?>
 