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
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $program = $_POST['program'];
    $gender = $_POST['gender'];

    // Prepare SQL query to insert data
    $sql = "INSERT INTO registrations (full_name, email, program, gender) 
            VALUES ('$full_name', '$email', '$program', '$gender')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<link rel='stylesheet' type='text/css' href='adminCSS/CSS.css'>
            <div class='container-main'>
            <nav>
            <a href='#' class='logo'>
                <img src='../images1/Logo1.png' alt='Fitness Center Logo'>
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
            <h1>You Registered to a Program <br> Successfully!</h1>
            <p>Check Your Profile for More Details</p>
            
            <div class='btn-field'>
            <button type='submit' id='signinBtn'><a href='sign-in.html'>Profile</a></button>
            </div>
            </div>
            </div>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
