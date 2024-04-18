<!DOCTYPE html>
<html lang="en">
  <head>
        <!--Initial Meta Tags-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Author">

        <!--Meta OG Tags-->
        <meta property="og:title" content="A Basic HTML5 Template">
        <meta property="og:type" content="website">
        <meta property="og:url" content="#">
        <meta property="og:description" content="A simple HTML5 Template for new projects.">
        <meta property="og:image" content="image.png">
        <link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
        <style>
            <!-- Custom Font URL -->
            @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Dosis:wght@200..800&display=swap')
        </style>
        <title>Contact</title>
  </head>
  <body>
    <section class="gridContainer">
        <div class="Header">
            <h2 id="logo">Business Logo</h2>
            <div class="navContainer">
                <ul>
                    <!-- Adjust this "current" class for each page-->
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li class="current"><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="Showcase">
            <!--Below element for testing only-->
            <h2>Contact Showcase</h2>
        </div>
        <div class="Midline">
            <!--Below element for testing only-->
            <h2>Contact MidLine Part</h2>
        </div>
        <div class="contactBody">
            <!--Below element for testing only-->
            <h2>Contact Body Part</h2>
            <div class="contactBoxContainer">
                <div class="contactBox">
                    <!--<img src="./img/headhsotpic.png" alt="#">-->
                    <h3>For general questions:</h3>
                    <p> If you have any specific questions about how our Professional services can aid your business,
                    <br>
                    <p>Please click below to Email Us at:</p>
                    <a href="mailto:support@professional-website.com">support@proffesional-website.com</a>
                    Or call: (000) 125-4567</p>
                    <br>
                    <h3>To request service:</h3>
                    <p>Otherwise, please fill out the following form and submit
                    <br>if you wish to discuss further business matters with us!</p>
                    <br>
                    <p>(All Fields Required)</p>
                    <br>
                    <form method="POST" action="#">
                        <label for="fname">First name:</label>
                        <br>
                        <input type="text" id="fname" name="fname" required>
                        <br>
                        <br>
                        <label for="lname">Last name:</label>
                        <br>
                        <input type="text" id="lname" name="lname" required>
                        <br>
                        <br>
                        <label for="hstate">Your state of residence:</label>
                        <br>
                        <input type="text" id="hstate" name="hstate" required>
                        <br>
                        <br>
                        <label for="email">Your email:</label>
                        <br>
                        <input type="email" id="email" name="email" required>
                        <br>
                        <br>
                        <label for="phone">Best phone number to reach you:<br>
                        <small>Enter in this Format: 123-456-7890</small><br>
                        </label>
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required />
                        <br>
                        <br>
                        <p>Which Services are you interested in?</p>
                        <br>
                        <input type="checkbox" id="service1" name="service1" value="service1">
                        <label for="service1"> Service 1</label><br>
                        <input type="checkbox" id="service2" name="service2" value="service2">
                        <label for="service2"> Service 2</label>
                        <input type="checkbox" id="service3" name="service3" value="service3">
                        <label for="service3"> Service 3</label><br>
                        <input type="checkbox" id="service4" name="service4" value="service4">
                        <label for="service4"> Service 4</label>
                        <input type="checkbox" id="service5" name="service5" value="service5">
                        <label for="service5"> Service 5</label><br>
                        <br>
                        <br>
                        <p>Once you press Submit,
                        <br> we will contact you within the next 24 hours.
                        <br>
                        <br>
                        <input id="button" type="submit" value="Submit">

                    </form>
                </div>
            </div>
        </div>
        <div class="Footer">
            <!--Below element for testing only-->
            <h2>About Footer Part</h2>
            <p>Proudly serving the Local area community since 20xx</p>
        </div>
    </section>
	<script src="index.js"></script>
  </body>
</html>
