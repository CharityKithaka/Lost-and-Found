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
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles5.css">
  <meta charset="utf-8">
  <title>PATA</title>
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
        <li><a href="nationalid_upload.php">National ID</a> </li>
        <li><a href="passport_upload.php">Passports</a> </li>
        <li><a href="student_upload.php">Student ID</a> </li>
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
    <li role="presentation"><a href="#">About</a></li>
    <li role="presentation"><a href="contact.html">Contact Us</a></li>
    <li role="presentation" id="sign"><a href="login.php">SIGN UP/LOGIN</a></li>
  </ul>

  <center>
      <h1>Random Documents</h1>
  </center>
  <div class="content">

      <div class="row">
          <?php
          while ($row = mysqli_fetch_array($result)) {
              echo "<div class='col-md-6'>";
              echo "<div class='panel panel-info'>";
              echo "<div class='panel-heading'>";

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
              echo "<div class='panel-heading'>";

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
              echo "<div class='panel-heading'>";

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
          <a href="#">Home</a><br>
          <a href="#">Sign up</a><br>
          <a href="#">Login</a>
        </div>
        <div class="col-md-3">
          <h3>About US</h3>
          <a href="#">Our Team</a><br>
          <a href="#">Mission Statement</a><br>
          <a href="#">Our Vision</a>
        </div>
        <div class="col-md-3">
          <h3>Support</h3>
          <a href="#">Our Contacts</a><br>
          <a href="#">Physical Address</a>
        </div>
        <div class="col-md-3" id="pata">
          <a href="index.php"><img src="img/pata.png" alt=""></a>
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
