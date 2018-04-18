<?php
session_start();

$username ="";
$email ="";
$phone ="";
$errors = array();



// connect to the database
$db = mysqli_connect('localhost' ,'root', '','lost_and_found');

// if the register button is clicked
if (isset($_POST['register'])) {
    $username= mysqli_real_escape_string($db, $_POST['username']);
    $email= mysqli_real_escape_string($db, $_POST['email']);
    $phone= mysqli_real_escape_string($db, $_POST['phone']);
    $password_1= mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2= mysqli_real_escape_string($db, $_POST['password_2']);


    //ensure that form fields are filled properly
    if (empty ($username)){
        array_push($errors, "Username is required");

    }
    if (empty ($email)){
        array_push($errors, "Email is required");

    }

    if (empty ($phone)){
        array_push($errors, "Phone number is required");

    }

    if (empty ($password_1)) {
        array_push($errors, "Password is required");
    }

    if ($password_1 != $password_2){
        array_push($errors, "The two passwords do not match!");

    }

    //if the are no errors, save user to database
    if (count ($errors)  == 0) {
        $password = hash('sha256',$password_1); // encrypt password before storing
        $sql ="INSERT INTO users (username,phone,email,password) 
                  VALUES('$username','$phone','$email','$password')";
        mysqli_query($db,$sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Hey you are logged in!";

        // redirect to home page
        header('location: indexy.php');
    }
}

// log user in from login page
if (isset($_POST['login'])) {

    $username= mysqli_real_escape_string($db, $_POST['username']);
    $password= mysqli_real_escape_string($db, $_POST['password']);

    //ensure that form fields are filled properly
    if (empty ($username)){
        array_push($errors, "Username is required");

    }
    if (empty ($password)){
        array_push($errors, "Password is required!");
    }

    if (count($errors) == 0) {
        $password =hash('sha256',$password); // encrypt password before comparing with that from database
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            //log user in
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are logged in";
            header('location" indexy.php'); // redirect to home page
        }

        else if (count($errors) != 0) {
            array_push($errors,"wrong username/password combination");
        }
    }

}



//Logout
if (isset ($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');

}

?>