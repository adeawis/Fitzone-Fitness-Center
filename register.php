<?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitzone_gym";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO customers (username, email, password) VALUES ('$username', '$email', '$password')";


if($conn->query($sql)=== TRUE){
    echo "<link rel='stylesheet' type='text/css' href='css/CSS.css'>
            <div class='container-main'>
            <nav>
            <a href='#' class='logo'>
                <img src='images1/Logo1.png' alt='Fitness Center Logo'>
            </a>
            <div class='navbar'>
                <a href='Home.html'>HOME</a>
                <a href='Services.html'>SERVICES</a>
                <a href='blog.html'>BLOG</a>
                <a href='About.html'>ABOUT US</a>
                <a href='contact.html'>CONTACT</a>
                <a href=''>|</a>
                <a href='sign-up.html'>SIGN-UP</a>
            </div>
            </nav>
            <div class='sign-form-box-wl'>
            <h1>Account Created Successfully!</h1>
            
            <div class='btn-field'>
            <button type='submit' id='signinBtn'><a href='sign-in.html'>Login</a></button>
            </div>
            </div>
            </div>";
}else{
    echo "<link rel='stylesheet' type='text/css' href='css/CSS.css'>
            <div class='container-main'>
            <nav>
            <a href='#' class='logo'>
                <img src='images1/Logo1.png' alt='Fitness Center Logo'>
            </a>
            <div class='navbar'>
                <a href='Home.html'>HOME</a>
                <a href='Services.html'>SERVICES</a>
                <a href='blog.html'>BLOG</a>
                <a href='About.html'>ABOUT US</a>
                <a href='contact.html'>CONTACT</a>
                <a href=''>|</a>
                <a href='sign-up.html'>SIGN-UP</a>
            </div>
            </nav>
            <div class='sign-form-box-wl'>
            <h1>Username is not Available!</h1>
            
            <div class='btn-field'>
            <button type='button' id='backBtn'><a href='sign-up.html'>Back</a></button>
            </div>
            </div>
            </div>";
}



$conn->close();

?>