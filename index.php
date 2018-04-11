<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "lost_and_found");

// Initialize message variable
$msg = "";
$result = mysqli_query($db, "SELECT * FROM nationalid ORDER BY time DESC");
$results = mysqli_query($db, "SELECT * FROM studentid ORDER BY time DESC ");
$resultn = mysqli_query($db, "SELECT * FROM passport ORDER BY time DESC ");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poor+Story" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/styles5.css">
  <meta charset="utf-8">
  <title>PATA</title>
    <link rel="icon" type="img/jpg" href="img/pata.png">
</head>

<body>

  <div class="jumbotron">
    <h1><a href="index.php"><img src="img/pata.png" alt="" id="logo"></a></h1>
      <h1 id="head"></h1>
  </div>
  <ul class="nav nav-pills" id="nav2">
    <li role="presentation" class="active"><a href="index.php">Home</a></li>

      <li role="presentation" class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              Post <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
              <li><a href="login.php">National ID</a> </li>
              <li><a href="login.php">Passports</a> </li>
              <li><a href="login.php">Student ID</a> </li>
          </ul>
      </li>

    <li role="presentation" class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      Find <span class="caret"></span>
    </a>
      <ul class="dropdown-menu">
        <li><a href="nationalid.php">National ID</a> </li>
        <li><a href="passport.php">Passports</a> </li>
        <li><a href="student.php">Student ID</a> </li>
      </ul>
    </li>
    <li role="presentation"><a href="about.php">About</a></li>
    <li role="presentation"><a href="contact.php">Contact Us</a></li>
    <li role="presentation" id="sign"><a href="login.php">LOGIN/SIGN UP</a></li>
  </ul>

  <center>

      <h1 style="font-family: 'Poor Story', cursive;">Random Documents</h1>
  </center>
  <div class="content">

      <div class="row">
          <?php
          while ($row = mysqli_fetch_array($result)) {
              echo "<div class='col-md-6'>";
              echo "<div class='panel panel-info'>";
              echo "<div class='panel-heading' style='background-color: #3c3d41; color: whitesmoke'>";

              echo "<h2 class='panel-title'>" .$row['image_name']."</h2>";

              echo "</div>";

              echo "<div class='panel-body'>";
              echo "<div class='row'>";
              echo "<img src='national/".$row['image']."' alt='national/".$row['image_name']."' width='350px' height='250px' >";
              echo "<div class='header3'>";
              echo "<h3>DESCRIPTION</h3>";
              echo"</div>";
              echo "<div class='desc'>";
              echo "<p>Name of The Owner:".$row['image_name']."</p>";
              echo "<p>ID Number:".$row['image_number']. "</p>";
              echo "<p>Location:".$row['location']."</p>";

              echo "</div>";
              echo "</div>";
              echo "</div>";

              echo "<div class='panel-footer'>";
              echo "<center>";
              echo "<a href='claim.php'><button class='btn warning'>CLAIM<i class='fa fa-plus-square'></i></button></a>";
              echo "</center>";
              echo "</div>";
              echo "</div>";

              echo "</div>";
          }?>

          <?php
          while ($row = mysqli_fetch_array($results)) {
              echo "<div class='col-md-6'>";
              echo "<div class='panel panel-info'>";
              echo "<div class='panel-heading' style='background-color: #3c3d41; color: whitesmoke'>";

              echo "<h2 class='panel-title'>" .$row['image_name']."</h2>";

              echo "</div>";

              echo "<div class='panel-body'>";
              echo "<div class='row'>";
              echo "<img src='student/".$row['image']."' alt='national/".$row['image_name']."' width='350px' height='250px' >";
              echo "<div class='header3'>";
              echo "<h3>DESCRIPTION</h3>";
              echo"</div>";
              echo "<div class='desc'>";
              echo "<p>Name of The Owner:".$row['image_name']."</p>";
              echo "<p>ID Number:".$row['image_number']. "</p>";
              echo "<p>Location:".$row['location']."</p>";

              echo "</div>";
              echo "</div>";
              echo "</div>";

              echo "<div class='panel-footer'>";
              echo "<center>";
              echo "<a href='claim.php'><button class='btn warning'>CLAIM<i class='fa fa-plus-square'></i></button></a>";
              echo "</center>";
              echo "</div>";
              echo "</div>";

              echo "</div>";
          }?>

          <?php
          while ($row = mysqli_fetch_array($resultn)) {
              echo "<div class='col-md-6'>";
              echo "<div class='panel panel-info'>";
              echo "<div class='panel-heading' style='background-color: #3c3d41; color: whitesmoke'>";

              echo "<h2 class='panel-title'>" .$row['image_name']."</h2>";

              echo "</div>";

              echo "<div class='panel-body'>";
              echo "<div class='row'>";
              echo "<img src='passport/".$row['image']."' alt='national/".$row['image_name']."' width='350px' height='250px' >";
              echo "<div class='header3'>";
              echo "<h3>DESCRIPTION</h3>";
              echo"</div>";
              echo "<div class='desc'>";
              echo "<p>Name of The Owner:".$row['image_name']."</p>";
              echo "<p>Passport Number:".$row['image_number']. "</p>";
              echo "<p>Location:".$row['location']."</p>";

              echo "</div>";
              echo "</div>";
              echo "</div>";

              echo "<div class='panel-footer'>";
              echo "<center>";
              echo "<a href='claim.php'><button class='btn warning'>CLAIM<i class='fa fa-plus-square'></i></button></a>";
              echo "</center>";
              echo "</div>";
              echo "</div>";

              echo "</div>";
          }?>


      </div>
  </div>



  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <h3>Get Started</h3>
          <a href="index.php">Home</a><br>
          <a href="register.php">Sign up</a><br>
          <a href="login.php">Login</a>
        </div>
        <div class="col-md-3">
          <h3>About US</h3>
          <a href="about.php">Our Team</a><br>
          <a href="about.php">Mission Statement</a><br>
          <a href="about.php">Our Vision</a>
        </div>
        <div class="col-md-3">
          <h3>Support</h3>
          <a href="contact.php">Our Contacts</a><br>

        </div>
        <div class="col-md-3" id="pata">
          <a href="index.php"><img src="img/pata.png" alt="logo"></a>
        </div>
      </div>
      <div class="footer-copyright">
        <p>© 2018 Copyright </p>
      </div>
    </div>
  </footer>
  <script src="js/jquery-3.3.1.js" charset="utf-8"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="js/scriptsj.js" charset="utf-8"></script>
</body>

</html>
