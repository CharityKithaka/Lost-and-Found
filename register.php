<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles2.css">
</head>
  <body>
    <div class="register">
      <h1>Create your account</h1>
        <form method="post" action="register.php">
          <!-- display validation errors here -->
          <?php include ('errors.php'); ?>
          <input type="text" name="username" placeholder="Pick Username" value="<?php echo $username; ?>">
          <input type="text" name="email" placeholder="Your E-mail" value="<?php echo $email; ?>">
          <input type="tel" name="phone" placeholder="Phone Number" value="<?php echo $phone; ?>">
          <input type="password" name="password_1" placeholder="Choose password">
          <input type="password" name="password_2" placeholder="Re-enter password">
            <center>
            <button type="submit" name="register" class="btn btn-success">Sign Up</button>
            </center>
      </form>
        <br>
        <p> Already a member? <a href="login.php">Sign in</a>
    </div>
  </body>
</html>
