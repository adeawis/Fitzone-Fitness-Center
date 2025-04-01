<?php
// Start session
session_start();

// Database connection
$host = "localhost";
$user = "root";
$password = "";
$dbname = "fitzone_gym";

$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if user exists
    $sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch user data
        $row = $result->fetch_assoc();
        $username = $row['username']; // assuming your database has a 'username' field
        
        // Store username in session
        $_SESSION['username'] = $username;
        
        // Redirect to homepage
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid email or password.";
    }
}

// Close connection
$conn->close();
?>
