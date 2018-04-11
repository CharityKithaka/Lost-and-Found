<?php include ('server.php');

//if user is not logged in,they cannot access this page
if(empty($_SESSION['username'])) {
    header('location:login.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lost and Found</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scriptsj.js"></script>
</head>
<body>

<div class="col-md-6">
<img src="claim.jpg" width="600px" height="600px">
</div>
<div class="col-md-6">
    <div class="contacts">
        <h1 class="cont-head">Contact Us To Claim</h1>
    <p class="con"><strong>Email:</strong><a href="mailto:briansigilai@gmail.com? subject=Hey%20Nguys" style="text-transform: lowercase">briansigilai@gmail.com</lo></a></p>

        <p class="con"><strong>&phone;:</strong><a href="tel:0792071275">0792071275</a></p>
    </div>
    <div class="content">
        <?php if  (isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>

            </div>
        <?php endif ?>

        <?php if (isset($_SESSION["username"])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br >

            <p><a href="claim.php?logout='1'" style="color":red;">Logout</a></p>
        <?php endif ?>
    </div>
</div>

</body>
</html>