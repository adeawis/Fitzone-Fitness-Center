<?php
$server = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$databse = "fitzone_gym"; // Your database name

$conn = new mysqli($server, $username, $password, $databse);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete query
    $deleteQuery = "DELETE FROM staff WHERE id = $id";

    // Execute the query
    if (mysqli_query($conn, $deleteQuery)) {
        echo "Record deleted successfully!";
        // Redirect to the main page after deletion
        header("Location: adminHomepg.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No ID provided to delete!";
}

// Close the connection
mysqli_close($conn);



?>