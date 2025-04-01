<?php

$server = "localhost";
$username = "root";
$password = "";
$databse = "fitzone_gym";

$conn = new mysqli ($server,$username,$password,$databse);

if($conn->connect_error){
    die("Connection Failed: " .$conn->connect_error);
}

$emailTo = $_POST['emailTo'];
$emailFrom = $_POST['emailFrom'];
$message = $_POST['message'];

$sql = "INSERT INTO respond_queries (emailTo, emailFrom, message) VALUES ('$emailTo', '$emailFrom', '$message')";


if($conn->query($sql)=== TRUE){
    echo "Message Send successfully!";
        // Redirect to the main page after deletion
        header("Location: staffHomepg.php");

}else{
    echo "An Error Occured! Please Try Again!";
}



$conn->close();

?>