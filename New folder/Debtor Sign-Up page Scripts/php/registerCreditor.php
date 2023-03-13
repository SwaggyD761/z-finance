<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
  // Get file inputs from the form
  $proof_of_residence = $_FILES['proof-of-residence']['name'];
  $proof_of_income = $_FILES['proof-of-income']['name'];
  $proof_of_employment = $_FILES['proof-of-employment']['name'];
  $proof_of_indebtedness = $_FILES['proof-of-indebtedness']['name'];

  // Prepare and bind statement
  $stmt = $conn->prepare("INSERT INTO User_Verification_Documents (proof_of_residence, proof_of_income, proof_of_employment, proof_of_indebtedness) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $proof_of_residence, $proof_of_income, $proof_of_employment, $proof_of_indebtedness);

  // Execute statement
  if ($stmt->execute() === TRUE) {
    echo "Files inserted successfully.";
  } else {
    echo "Error inserting files: " . $conn->error;
  }

  // Close statement and connection
  $stmt->close();
  $conn->close();
}
?>
