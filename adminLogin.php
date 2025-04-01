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

    $sql = "SELECT username, password FROM admin WHERE username='$username'";
    $result = $conn->query($sql);


if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($password == $row['password']){
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        // Redirect to dashboard
        header("Location: adminHomepg.php");
        exit();
    }else{
        echo "<link rel='stylesheet' type='text/css' href='adminCSS/CSS.css'>
            <div class='container-main'>
            <nav>
            <a href='#' class='logo'>
                <img src='../images1/Logo1.png' alt='Fitness Center Logo'>
            </a>
            <div class='navbar'>
                
            </div>
            </nav>
            <div class='sign-form-box-wl'>
            <h1>Incorrect Password! Try Again</h1>
            
            <div class='btn-field'>
            <button type='button' id='backBtn'><a href='loginAdmin.html'>Back</a></button>
            </div>
            </div>
            </div>";
    }
}else{
    echo "<link rel='stylesheet' type='text/css' href='adminCSS/CSS.css'>
            <div class='container-main'>
            <nav>
            <a href='#' class='logo'>
                <img src='../images1/Logo1.png' alt='Fitness Center Logo'>
            </a>
            <div class='navbar'>
                
            </div>
            </nav>
            <div class='sign-form-box-wl'>
            <h1>User Not Found! Please Make an Account!</h1>
            
            <div class='btn-field'>
            <button type='submit' id='signupBtn'><a href='loginAdmin.html'>Back</a></button>
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