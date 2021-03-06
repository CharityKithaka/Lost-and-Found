<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student ID</title>
    <link rel="icon" type="img/jpg" href="img/pata.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <script src="js/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/scriptsj.js"></script>
</head>
<body>


<fieldset>
    <center>
        <h1>Upload lost Student ID</h1>

    </center>
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-header">
            <div class="col-md-6 col-md-offset-3" >
                <form method="post" action="student_upload.php" enctype="multipart/form-data">
                    <label>Name:</label>
                    <input class="form-control" name="image_name"  placeholder="Enter Name of the Owner..." required/><br>

                    <label>ID Number:</label>
                    <input class="form-control" name="image_number"  placeholder="Enter the National ID number..." required/><br>

                    <label>Location:</label>
                    <input class="form-control" name="location"  placeholder="Enter your location..." required/><br>

                    <label>Upload file:</label>
                    <input type="hidden" name="size" value="1000000">
                    <div>
                        <input type="file" name="image" multiple required/>
                    </div>
                    <div>
                    </div>
                    <br>
                    <div>
                        <button type="submit" name="upload" class="btn bg-warning" style="background-color: #398439">POST</button>
                    </div>
                    <br>
                </form>

                <?php
                // Create database connection
                $db = mysqli_connect("localhost", "root", "", "lost_and_found");

                // Initialize message variable
                $msg = "";

                // If upload button is clicked ...
                if (isset($_POST['upload'])) {
                    // Get image name
                    $image = $_FILES['image']['name'];
                    // Get details
                    $image_name = mysqli_real_escape_string($db, $_POST['image_name']);
                    $image_number = mysqli_real_escape_string($db, $_POST['image_number']);
                    $location = mysqli_real_escape_string($db, $_POST['location']);

                    // image file directory
                    $target = "student/".basename($image);

                    $sql = "INSERT INTO studentid (image,image_name,image_number,location) VALUES ('$image', '$image_name','$image_number','$location')";
                    // execute query
                    $result=mysqli_query($db,$sql);
                    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
                        $msg = "Image uploaded successfully";
                    }else{
                        $msg = "Failed to upload image";
                    }

                    if($result==TRUE){
                        echo "<p style='color:chocolate'>Your post  is successfully Uploaded!</p>";
                    }
                }
                $result = mysqli_query($db, "SELECT * FROM studentid ORDER BY time DESC");
                ?>

                <p>Click <a href="student.php">here</a> to go back</p>

            </div>

        </div>
    </div>
    </div>
</fieldset>

</body>
</html>