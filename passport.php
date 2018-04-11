<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "lost_and_found");

// Initialize message variable
$msg = "";
$result = mysqli_query($db, "SELECT * FROM passport ORDER BY time DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lost and Found</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scriptsj.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Pata!</a>
        </div>
        <ul class="nav navbar-nav">

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><button class="btn btn-warning navbar-btn">Post</button></li>
            <li><button class="btn btn-danger navbar-btn">Find</button></li>
            <li><button class="btn btn-success navbar-btn">Contacts</button></li>
            <li><button class="btn btn-success navbar-btn">About</button></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="passport.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        </ul>
    </div>
</nav>
<center>
    <h1>Passports</h1>
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
            echo "<img src='passport/".$row['image']."' alt='passport/".$row['image_name']."' width='400px' height='250px' >";
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

<a href="nationalid.php">NationalID</a>


</body>
</html>