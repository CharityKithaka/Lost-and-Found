<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "lost_and_found");

// Initialize message variable
$msg = "";
$result = mysqli_query($db, "SELECT * FROM studentid ORDER BY time DESC ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lost and Found</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles5.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scriptsj.js"></script>

</head>
<body>

<div class="jumbotron">
    <h1><img src="img/pata.png" alt="" id="logo"> </h1>
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
    <h1>Student Identification Documents</h1>
</center>
<div class="content">

    <div class="row">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "<div class='col-md-4'>";
            echo "<div class='panel panel-info'>";
            echo "<div class='panel-heading'>";

            echo "<h2 class='panel-title'>" .$row['image_name']."</h2>";

            echo "</div>";

            echo "<div class='panel-body'>";
            echo "<div class='row'>";
            echo "<img src='student/".$row['image']."' alt='student/".$row['image_name']."' width='400px' height='250px' >";
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

</body>
</html>