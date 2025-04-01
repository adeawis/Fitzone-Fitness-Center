<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width", initial-scale="1.0">
        <title>FitZone Fitness Center</title>
        <link rel="stylesheet" href="css/CSS.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
            </style>
        <script src="https://kit.fontawesome.com/70d0595457.js" crossorigin="anonymous"></script>
        <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"/>

    </head>
    <body>
        <section class="subheader">
            <nav>
            <a href="#" class="logo">
                <img src="images1/Logo1.png" alt="Fitness Center Logo">
            </a>
            <div class="navbar">
                <a href="Home.html">HOME</a>
                <a href="Services.html">SERVICES</a>
                <a href="blog.html">BLOG</a>
                <a href="About.html">ABOUT US</a>
                <a href="contact.html">CONTACT</a>
                <a href="">|</a>
                <a href="Home.html">LOGOUT</a>
            </div>
            </nav>
            <h1>WELCOME 
            <?php

            session_start();
            // Check if the user is logged in
            if (isset($_SESSION['username'])) {
            // Display the username
            echo $_SESSION['username'];
            } else {
                echo "Guest";
            }
            ?>
            
            </h1>

            </section>

            <section class="explore">
                <h1>Explore Our Programs</h1>
                
                <div class="Row">      
                    
                    <div class="explore-col">
                        <img src="images1/infopic3.jpg" alt="Training Picture">
                        <h3>Personalized Training Sessions</h3>
                        <p>With personalized training, you get a workout experience that’s 
                            both efficient and effective, designed specifically for you.</p>
                            <br><br>
                            
                    </div>
                    <div class="explore-col">
                        <img src="images1/infopic4.jpg" alt="Group Picture">
                        <h3>Group Classes</h3>
                        <p>Group classes are Fun and motivating way to work out with others while following 
                            a structured routine led by a professional instructor.</p>
                            <br><br>
                            
                    </div>
                    <div class="explore-col">
                        <img src="images1/backpic7.jpg" alt="Meals Picture">
                        <h3>Nutrition Counseling</h3>
                        <p> personalized nutrition plans can help align your diet 
                            with your workout routine, ensuring you're fueling your body 
                            to meet your fitness goals.</p>
                            <br><br>
                            
                    </div>
                </div> 
            </section>

            <section class="info1">
                <h1>REGISTER NOW FOR A PROGRAM!</h1>
                <a href="proRegpg.html" class="info1-btn">JOIN NOW</a> 
    
            </section>

            
                <section class="explore1">
                <div class="Row">
                    <div class="explore-col1">
                        <img src="images1/infopicCardio.jpg" alt="equipments Picture">
                        <h3>Cardio</h3>
                        <p>Cardio trainingplays a crucial role in helping individuals 
                            achieve their fitness goals, whether it’s building strength or 
                            improving endurance.</p>
                            <br><br>
                            
                    </div>
                    <div class="explore-col1">
                        <img src="images1/infopicStrength.jpg" alt="Training Picture">
                        <h3>Strength Training</h3>
                        <p>With strength training, you get a workout experience that’s 
                            both efficient and effective, designed specifically for you.</p>
                            <br><br>
                            
                    </div>
                    <div class="explore-col1">
                        <img src="images1/infopicYoga.jpg" alt="Yoga Picture">
                        <h3>Yoga</h3>
                        <p>Yoga is Fun and motivating way to work out with others while following 
                            a structured routine led by a professional instructor.</p>
                            <br><br>
                            
                    </div>
                </div>
            </section>
            


           












        <section class="end-page">
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4>CUSTOMER SERVICE</h4>
                            <ul>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="sign-in.html">Account Login</a></li>
                                <li><a href="">Track Your Order</a></li>
                                <li><a href="">Returns & Exchanges</a></li>
                                
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>GET HELP</h4>
                            <ul>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Payment Options</a></li>
                                
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>ABOUT</h4>
                            <ul>
                                <li><a href="About.html">About Us</a></li>
                                <li><a href="">Rewards Program</a></li>
                                
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>FOLLOW US ON</h4>
                            <div class="social-links">
                                <a href="#"><i class="fa fa-facebook-official"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                
                            </div>      
                    </div>
                </div>
            </footer>
        </section>
    </body>
</html>

