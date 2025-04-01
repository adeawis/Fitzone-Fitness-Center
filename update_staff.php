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

    // Fetch current data based on ID
    $query = "SELECT * FROM staff WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // If the form is submitted
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $usernameStaff = $_POST['usernameStaff'];
        $passwordStaff = $_POST['passwordStaff'];
        $address = $_POST['address'];
        $phone_num = $_POST['phone_num'];
        $position = $_POST['position'];

        // Update query
        $updateQuery = "UPDATE staff SET 
                        name = '$name', 
                        email = '$email',
                        usernameStaff = '$usernameStaff',
                        passwordStaff = '$passwordStaff', 
                        address = '$address', 
                        phone_num = '$phone_num',
                        position = '$position' 
                        WHERE id = $id";

        if (mysqli_query($conn, $updateQuery)) {
            echo "Record updated successfully!";
            header("Location: adminHomepg.php"); // Redirect back to the main page after updating
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    echo "No ID provided";
}


?>

<!----- update html page ---->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width", initial-scale="1.0">
        <!-- css file connecter-->
        <link rel="stylesheet" href="adminCSS/adminCSS.css">
    <title>Update Staff</title>
    
</head>
<body>

<div class="update-col">
<h2>Update Staff Information</h2>

<a href="adminHomepg.php" class="close-btn">&times;</a>
<form method="POST" action="" class="update-form">
    <label for="name">Name: </label><input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
    <label for="email">Email: </label><input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    <label for="usernameStaff">Username: </label><input type="text" name="usernameStaff" value="<?php echo $row['usernameStaff']; ?>" required><br>
    <label for="passwordStaff">Password: </label><input type="password" name="passwordStaff" value="<?php echo $row['passwordStaff']; ?>" required><br>
    <label for="address">Address: </label><input type="text" name="address" value="<?php echo $row['address']; ?>" required><br>
    <label for="phone_num">Phone Number: </label><input type="text" name="phone_num" value="<?php echo $row['phone_num']; ?>" required><br>
    <label for="position">Post: </label><select name="position" id="position" required>
                                            <option value="">Select Post</option>
                                            <option value="Gym Trainer" <?php echo ($row['position'] == 'Gym Trainer') ? 'selected' : ''; ?>>Gym Trainer</option>
                                            <option value="Yoga Coach" <?php echo ($row['position'] == 'Yoga Coach') ? 'selected' : ''; ?>>Yoga Coach</option>
                                            <option value="Assistant" <?php echo ($row['position'] == 'Assistant') ? 'selected' : ''; ?>>Assistant</option>
                                            <option value="Cleaner" <?php echo ($row['position'] == 'Cleaner') ? 'selected' : ''; ?>>Cleaner</option>
                                        </select>
    <button type="submit" name="update" class="updateBTN">Update</button>
</form>
</div>

</body>
</html>








