<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width", initial-scale="1.0">
        <title>FitZone Fitness Admin</title>
        <!-- css file connecter-->
        <link rel="stylesheet" href="adminCSS/staffCSS.css">

        <!-- fonts connecter-->
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
            </style>

            <!-- fontawesome icons connecter-->
        <script src="https://kit.fontawesome.com/70d0595457.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <header class="header">
            <div class="logo">
                <a href="">FITZONE FITNESS | MANAGEMENT</a>
                <div class="search-box">
                    <input type="text" placeholder="search here">
                    <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                </div>

            </div>

            <div class="header-icons">
                <i class="fas fa-bell"></i>
                <div class="account">
                    <img src="../images1/adminProPic.jpg" alt="User Picture">
                    <h4>
                    <?php
                    session_start();

                    // Check if the user is logged in
                    if (isset($_SESSION['usernameStaff'])) {
                    // Display the username
                    echo $_SESSION['usernameStaff'];
                    } else {
                        echo "Guest";
                    }   
                    ?>
                    </h4>
                </div>
            </div>
        </header>
        <div class="container">
            <nav>
                <div class="side-navbar">
                    <span>Main Menu</span>
                    <a href="staffHomepg.php" class="active">Queries</a>
                    <a href="FetchAppointments.php">Appoinments</a>


                    <div class="links">
                        <span>Quick Links</span>
                        <a href="../Home.html">Go To FFC Website</a>
                        <a href="loginStaff.html">Logout</a>
                    </div>
                </div>
            </nav>

            <div class="main-body">
                <h2>DASHBOARD</h2>
                <div class="display">
                    <h1>Welcome to FitZone Management</h1>
                    <span>FitZone Staff Management</span>
                    

                </div>

                <div class="display-tbl">
                    <div class="list">
                        <div class="row">
                            <h4>Queries</h4>
                        </div>


                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Query</th>

                                </tr>
                                <tbody>
                                    <?php
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

                                    //read all rows from the db
                                    $sql = "SELECT * FROM queries";
                                    $result = $conn->query($sql);

                                    if (!$result){
                                    die("Invalid query: " .$conn->connect_error);
                                    }


                                    //read data of each row
                                    while($row = $result->fetch_assoc()){
                                        echo "<tr>
                                                <td>" .$row["name"] ."</td>
                                                <td>" .$row["email"] ."</td>
                                                <td>" .$row["query"] ."</td>

                                            </tr>";
                                    }

                                    ?>
                                </tbody>
                            </thead>
                        </table>
                    </div>

                    <div class="respond-col">
                    <div class="row">
                                
                            <h4>Respond Queries</h4>

                            </div>
                        
                            <form class="respond-form" action="staffSubmitQueries.php" method="post">
                                <label for="email">To: </label> <br>
                                <input type="email" name="emailTo" placeholder="Enter Email"> 
                                <label for="email">From: </label> <br>
                                <input type="email" name="emailFrom"placeholder="Enter Email"> 
                                <textarea rows="4" name="message"   placeholder="Type Respond" required></textarea> <br>
                                <button type="Submit" class="reg-btn" onclick="confirmAction()">Send</button>
                            </form>

                            
                        
                        </div>

                </div>

                

            </div>


        </div>
        
        
    <script>
        function confirmAction() {
        let userConfirmed = confirm("Do You want to Send this Message?");
        if (userConfirmed) {
            alert("Message Sent Successfully!");
        } else {
            alert("Action Cancelled!");
        }
    }


    </script>

<?php
if (isset($_GET['confirmed']) && $_GET['confirmed'] === 'yes') {
    echo "<p>Success! User confirmed the action.</p>";
    
}
?>


    </body>
</html>



        

