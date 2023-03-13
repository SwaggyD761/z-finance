<!DOCTYPE html>
<html>
<head>
	<title>Sign-Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body {
			background-color: steelblue;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

	</style>
</head>
<body>
	<div class="sign-up-form-area">
		<form class="sign-up-form" action="registerUser.php" method="post">
			<h2>Sign Up</h2>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" required>
			<label for="surname">Surname</label>
			<input type="text" id="surname" name="surname" required>
			<label for="cellnumber">Cell Number</label>
			<input type="text" id="cellnumber" name="cellnumber" required>
			<label for="email">Email Address</label>
			<input type="email" id="email" name="email" required>
			<label for="password">Password</label>
			<input type="password" id="password" name="password" required>
			<label for="confirmpassword">Confirm Password</label>
			<input type="password" id="confirmpassword" name="confirmpassword" required>
			<input type="submit" value="Sign Up">
		</form>
	</div>
</body>
</html>
