<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
  <body>
    <div class="login">
      <img src="img/avatar1.png" id="avatar">
      <h1>Log In</h1>
        <form method="post" action="claim.php">
            <!-- display validation errors here -->
            <?php include ('errors.php'); ?>
        <p>Username:</p>
        <input type="text" name="username" placeholder="Username">
        <p>Password:</p>
        <input type="password" name="password" placeholder="Password"></br>
            <button type="submit" name="login" id="login-button">Login</button>
        <p>or Sign up <a href="register.php">here</a></p>
      </form>
    </div>
  </body>
</html>
