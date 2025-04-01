<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitzone_gym";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM customers WHERE username='$username'";
    $result = $conn->query($sql);


if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($password == $row['password']){
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        // Redirect to dashboard
        header("Location: welcomepg.php");
        exit();
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
            <h1>Incorrect Password! Try Again</h1>
            
            <div class='btn-field'>
            <button type='button' id='backBtn'><a href='sign-in.html'>Back</a></button>
            </div>
            </div>
            </div>";
    }
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
            <h1>User Not Found! Please Sign-Up</h1>
            
            <div class='btn-field'>
            <button type='submit' id='signupBtn'><a href='sign-up.html'>Sign-Up Now</a></button>
            </div>
            </div>
            </div>";
}
}else{
    echo "<div class='btn-field'>
        <button type='button' id='signinBtn' class='disable'>Sign-in</button>
        </div>";
}

$conn->close();
?>