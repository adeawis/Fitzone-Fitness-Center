<?php
// Database connection
$server = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$databse = "fitzone_gym"; // Your database name

$conn = new mysqli($server, $username, $password, $databse);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $usernameStaff = $_POST['usernameStaff'];
    $passwordStaff = $_POST['passwordStaff'];
    $address = $_POST['address'];
    $phone_num = $_POST['phone_num'];
    $position = $_POST['position'];

    // Prepare SQL query to insert data
    $sql = "INSERT INTO staff (id, name, email, usernameStaff, passwordStaff, address, phone_num, position) 
            VALUES ('$id','$name', '$email', '$usernameStaff', '$passwordStaff', '$address', '$phone_num', '$position')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        
        header("Location: adminHomepg.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
