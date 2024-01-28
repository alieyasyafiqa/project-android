<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="admin.css">
 
</head>
<body>

  <div class="container">
    <h1>Admin Login</h1>
    <form action="check_login.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br>
      <!-- Apply the button styling to the login button -->
      <button type="submit">Login</button>
    </form>
	<a id="signup-link" href="#">Sign Up</a>
  </div>
</body>
</html>
