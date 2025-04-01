<?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitzone_gym";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query'];

$sql = "INSERT INTO queries (name, email, query) VALUES ('$name', '$email', '$query')";


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
            <h1>Query Submitted! Thank You!</h1>
            
            <div class='btn-field'>
            <button type='submit' id='signinBtn'><a href='contact.html#query-sec'>Back</a></button>
            </div>
            </div>
            </div>";
}else{
    echo "<link rel='stylesheet' type='text/css' href='css/CSS2.css'>
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
            <h1>Query Did Not Submit! Try Again!</h1>
            
            <div class='btn-field'>
            <button type='button' id='backBtn'><a href='contact.html#query-sec'>Back</a></button>
            </div>
            </div>
            </div>";
}



$conn->close();

?>