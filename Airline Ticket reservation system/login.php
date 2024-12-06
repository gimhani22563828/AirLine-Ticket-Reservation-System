<?php

$con = new mysqli('localhost', 'root', '', 'airline');

if (!$con) {
    die(mysqli_error($con));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $membershipNumber = $_POST["Membership_number"];
    $password = $_POST["Password"];

    // Query to check if the login credentials are valid
    $sql = "SELECT * FROM your_table_name WHERE membership_number = '$membershipNumber' AND password = '$password'";
    $result = mysqli_query($con, $sql); // Replace $conn with $con

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        echo "Login successful!";
    } else {
        // Invalid login credentials
        echo "Invalid login credentials!";
    }
}

// Close the connection
mysqli_close($con);
?>


<html>
    <head>
        <link rel = "stylesheet" href = "style/login.css">
        <script src = "login.js"></script>
        <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
        <form class="reg_form" action="login.php" method="POST">
        


        <title>
            Login
        </title>
    </head>

    <body>

        <header>
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <img src="image/m.webp">
                    </div>
                    <nav>
                    <a href="home.php"><b>Home</b></a>

<div class="dropdown">
    <button class="dropbtn"><b>Plan & Book</b>
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="manage my booking.php">Manage My Booking </a>
        <a href="ticket details.html">Ticket Details</a>
        <a href="latest deals.html">Latest Deals</a>
        <a href="payment.php">Payment</a>
        <a href="Refund.php">Online Refund request</a>
    </div>
</div>

<div class="dropdown">
    <button class="dropbtn"><b>Travel Information</b>
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="covid 19 update.html">Covid 19 Updates </a>
        <a href="baggage.html">Baggage Allowance</a>
        <a href="requirement.php">Special Requirment</a>
        <a href="visa  & passport.html">Visa & passport Requirment</a>
    </div>
</div>


<div class="dropdown">
    <button class="dropbtn"><b>Experience</b>
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="economy class.html">Economy class </a>
        <a href="bussiness class.html">Business Class</a>
        <a href="entertaintment.html">Entertainment</a>
        <a href="feedback.html">Feedback</a>
    </div>
</div>

<div class="dropdown">
    <button class="dropbtn"><b>Flysmiles</b>
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
        <a href="contact.html">Contact</a>
        <a href="privacy policy.html">Privacy Policy</a>
        <a href="recommandation.html">Recommendation</a>
    </div>
</div>

<a href="login.php"><i class="fa fa-fw fa-user"></i> Login </a>
                    </nav>
                </div>
                
          </header>

          <br>
        <center>
            <button class = "button1" type = "button" id = "btn1" onclick = "loadData ('btn1')"> MEMBER </button>
            <button class = "button1" type = "button" id = "btn2" onclick = "loadData ('btn2')" > GUEST </button>

            <h1 id = "topic"> Member Login</h1>
        </center>

        <form class = "login-form">
            <label id = "label1">Membership Number</label><br>
            <input type = "number" name = "Membership number" placeholder = "Enter your membership number">

            <br><br>

            <label> Password </label> <br>
            <input type = "text" name = "Password" placeholder = "Enter your password">

            </form>

            <center>
            <button class = "btn" type = "button" > LOG IN </button>
        <form class="reg_form" action="login.php" method="POST">

            </center>

            <br>

            <div class = "footer1">
            Not a member? <a href = "register.html">join now!</a>
            </div><br>

            <footer>
                <div class="row"> 
                  <div class="col">
                      <img src="image/m.webp"class=" logo">
                      <br>
                      <p1>"Fly high with our unbeatable airfare deals and seamless ticket reservation. Discover the world with Air Line Ticket Reservation!"</p1>
                  </div>
                  <div class="col">
                      <h3> WING AIRLINE <div class="underline"><span></span></div></h3>
                      <p1>No.123,Kandy Road</p1>
                      <p1>Malabe,Srilanka</p1>
                      <p1 class="email-id">wingairlineairline@gmail.com</p1>
                      <p1>+94-112564285</p1>
                  </div>
                  <div class="col">
                      <h3>Links<div class="underline"><span></span></div></h3>
                      <ul>
                      <b><li><a href="home.php">Home</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="privacy policy.html">Privacy Policy</a></li>
            <li><a href="feedback.html">Feedback</a></li></b>
                      </ul>
                  </div>
                  <div class="col">
                      <h3>Newsletter<div class="underline"><span></span></div></h3>
                      <form class = "emailform">
                          <i class="formi"></i>
                          <input type="email" placeholder="Enter your email-id" required>
                          <button type="submit"><i class="fa-solid"></i></button>
                      </form>
                      <div class="social-icons">
                                 
                          <a href="https://www.facebook.com/flysrilankan/"><i class="fa-brands fa-facebook"></i></a>
                          <a href="https://www.youtube.com/channel/UCU_e10UGVQS8JikgDpwvdag"><i class="fa-brands fa-youtube"></i></a>
                          <a href="https://twitter.com/flysrilankan?lang=en#:~:text=SriLankan%20Airlines%20(%40flysrilankan)%20%2F%20Twitter"><i class="fa-brands fa-twitter"></i></a>
                          <a href="https://www.instagram.com/srilankanairlinesofficial/?hl=en#:~:text=SriLankan%20Airlines%20(%40srilankanairlinesofficial)%20%E2%80%A2%20Instagram%20photos%20and%20videos"><i class="fa-brands fa-instagram"></i></a>
                      </div>    
                  </div>
              </div>
              <hr class = "hr1">
              <p class="copyright">WING AIRLINE(MLB_16.01_12)  © 2023-All Right Reserved</p>
              </footer>
              
    </body>
</html>
