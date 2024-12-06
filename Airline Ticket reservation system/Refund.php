<?php
$con = new mysqli('localhost', 'root', '', 'airline');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Handle form submission
if (isset($_POST['submit'])) {
  $bookingNumber = $_POST['bookingNumber'];
  $reason = $_POST['reason'];

  // Insert refund request into database
  $sql = "INSERT INTO refund_requests (bookingNumber, reason) VALUES ('$bookingNumber', '$reason')";
  if ($con->query($sql) === TRUE) {
    echo "Refund request submitted successfully";
  } else {
    echo "Error submitting refund request: " . $con->error;
  }
}

$con->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Online Refund Request</title>
        <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/Refund.css">

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
            <div class="content-row">
                <div class="left-col">
                <hr1>
                  <br><br><br><br><br>
                <h2>"Refunds are not merely transactions; they symbolize our commitment to customer satisfaction. Each refund request represents an opportunity to rectify disappointments and restore trust, turning an unhappy experience into an opportunity for redemption and delight."</h2>
                <div class="indicator">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
                <div class="right-col">
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                <img src="image/nh.jpg">
            </div>
            </div>
        </div>
      </header>
      <br><br><br><br>
      <div class="container2">
        <h1>Online Refund Request</h1>
        <form method="post" action="refund.php">

    <form method="post" action="Refund.php">
        <div class="refund-form">
          <form>
            <label for="booking-number">Booking Number:</label>
            <input type="text" id="booking-number" name="booking-number" placeholder="Enter your booking number" required><br>
    
            <label for="passenger-name">Passenger Name:</label>
            <input type="text" id="passenger-name" name="passenger-name" placeholder="Enter your name" required><br>
    
            <label for="refund-amount">Refund Amount:</label>
            <input type="text" id="refund-amount" name="refund-amount" placeholder="Enter refund amount" required><br>
    
            <label for="refund-reason">Reason for Refund:</label><br>
            <textarea id="refund-reason" name="refund-reason" placeholder="Enter reason for refund" required></textarea><br>
    
            <input type="submit" value="Submit Request">
          </form>
        </div>
      </div>
    
    
    

        <footer>
          <hr>
          <div class="row"> 
            <div class="col">
                <img src="image/m.webp"class=" logo">
                <br>
                <b><p1>"Fly high with our unbeatable airfare deals and seamless ticket reservation. Discover the world with Air Line Ticket Reservation!"</p1></b>
            </div>
            <div class="col">
                <b><h3> WING AIRLINE <div class="underline"><span></span></div></h3>
                <p1>No.123,Kandy Road</p1>
                <p1>Malabe,Srilanka</p1>
                <p1 class="email-id">wingairlineairline@gmail.com</p1>
                <p1>+94-112564285</p1></b>
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
                <form>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Enter your email-id" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                           
                    <a href="https://www.facebook.com/flysrilankan/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.youtube.com/channel/UCU_e10UGVQS8JikgDpwvdag"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://twitter.com/flysrilankan?lang=en#:~:text=SriLankan%20Airlines%20(%40flysrilankan)%20%2F%20Twitter"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.instagram.com/srilankanairlinesofficial/?hl=en#:~:text=SriLankan%20Airlines%20(%40srilankanairlinesofficial)%20%E2%80%A2%20Instagram%20photos%20and%20videos"><i class="fa-brands fa-instagram"></i></a>
                </div>    
            </div>
        </div>
        <hr>
        <b><p class="copyright">WING AIRLINE(MLB_16.01_12)  © 2023-All Right Reserved</p></b>
        </footer>
      </body>
  </html>