<?php
session_start();

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitzone_gym";
                    
//creating connection
$conn = new mysqli ($server,$username,$password,$databse);
                    
//checking connection
if($conn->connect_error){
die("Connection Failed: " .$conn->connect_error);
}

$usernameStaff = $_POST['usernameStaff'];
$passwordStaff = $_POST['passwordStaff'];

//read all rows from the db
$sql = "SELECT usernameStaff, passwordStaff FROM staff WHERE usernameStaff='$usernameStaff'";
$result = $conn->query($sql);


if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    if($passwordStaff == $row['passwordStaff']){
        $_SESSION['usernameStaff'] = $row['usernameStaff'];
        $_SESSION['passwordStaff'] = $row['passwordStaff'];
        // Redirect to dashboard
        header("Location: staffHomepg.php");
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
            <h1>User or Password Not Found! Try Again</h1>
            
            <div class='btn-field'>
            <button type='submit' id='signupBtn'><a href='loginStaff.html'>Back</a></button>
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
            <h1>User Not Found! Please Contact Administration!</h1>
            <p>Admin - adminfitzone@gmail.com</p>
            
            <div class='btn-field'>
            <button type='submit' id='signupBtn'><a href='loginStaff.html'>Back</a></button>
            </div>
            </div>
            </div>";
}


$conn->close();
?>