<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      background-color: steelblue;
    }
  </style>
</head>

<body>
  <div class="login-form-area">
    <h2>Login</h2>
	
    <form class="login-form" action="verifyUser.php" method="POST">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Login</button>
    </form>
	
  </div>
  
</body>
</html>