<?php
$con = new mysqli('localhost', 'root', '', 'airline');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Add booking functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add-booking'])) {
    // Retrieve form data
    $bookingReference = $_POST['booking_reference'];
    $lastName = $_POST['last_name'];

    // Insert the booking into the database
    $sql = "INSERT INTO bookings (booking_reference, last_name) VALUES ('$bookingReference', '$lastName')";
    if ($con->query($sql) === TRUE) {
        echo "Booking added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Remove booking functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove-booking'])) {
    // Retrieve form data
    $bookingId = $_POST['booking-id'];

    // Remove the booking from the database
    $sql = "DELETE FROM bookings WHERE id = $bookingId";
    if ($con->query($sql) === TRUE) {
        echo "Booking removed successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Update booking functionality
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update-booking'])) {
    // Retrieve form data
    $bookingId = $_POST['booking-id'];
    $newLastName = $_POST['last_name'];

    // Update the booking in the database
    $sql = "UPDATE bookings SET last_name = '$newLastName' WHERE id = $bookingId";
    if ($con->query($sql) === TRUE) {
        echo "Booking updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Retrieve and display existing bookings
$sql = "SELECT booking_reference, last_name FROM bookings";
$result = $con->query($sql);

if ($result && $result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Booking Reference: " . $row["booking_reference"] . "<br>";
        echo "Last Name: " . $row["last_name"] . "<br>";
        echo "<br>";
    }
} else {
    echo "No bookings found.";
}

// Close the database connection
$con->close();
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Manage My Booking</title>
    <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/manage my booking.css">
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
              <br>
              <h2>"Take control of your travel plans with our easy-to-use 'Manage My Booking' feature. Modify your itinerary, select seats, update personal details, and view important information all in one place."</h2>
            <div class="indicator">
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
            <div class="right-col">
                <br><br><br><br><br><br><br><br><br><br><br><br>
            <img src="image/z_piv-SriLankan-01.jpg">
        </div>
        </div>
    </div>
    
    </header>
    <br><br><br><br><br><hr><br><br><br><br>
    <b><p>Welcome to our convenient and user-friendly "Manage My Booking" web page, 
      where you have full control over your travel plans. We understand that flexibility is crucial,
       which is why our intuitive platform empowers you to customize and manage your journey effortlessly.
        Whether you need to modify your flight dates, select preferred seats, update personal details, 
        or add extra services, our comprehensive tool puts you in the driver's seat.
         Stay organized and informed as you make adjustments to your itinerary, request special meals, 
         and keep track of important travel information—all in one place. We believe in providing you with the
          freedom to tailor your travel experience to your preferences, ensuring a seamless and personalized 
          journey from start to finish. With our "Manage My Booking" feature, travel planning becomes a breeze,
           allowing you to enjoy peace of mind and ultimate convenience every step of the way.</p></b>


<br><br><br><br><br>

    <div class="container1">
        <h1>Manage My Booking</h1>
        <br><br>
        <form id="manage-booking-form" action="manage my booking.php" method="POST">
            <label1 for="booking-reference">Booking Reference:</label1>
            <input type="text1" id="booking-reference" name="booking_reference" required>

            <label1 for="last-name">Last Name:</label1>
            <input type="text1" id="last-name" name="last-name" required>

            <button class="button2" type="submit" name="add-booking">Submit</button>
        </form>

        <form id="manage-booking-form" action="booking.php" method="POST">
            <label1 for="booking-id">Booking ID:</label1>
            <input type="text1" id="booking-id" name="booking_id" required>

            <button class="button2" type="submit" name="remove-booking">Remove Booking</button>
        </form>

        <form id="manage-booking-form" action="booking.php" method="POST">
            <label1 for="booking-id">Booking ID:</label1>
            <input type="text1" id="booking-id" name="booking-id" required>

            <label1 for="new-last-name">New Last Name:</label1>
            <input type="text1" id="new-last-name" name="last_name" required>

            <button class="button2" type="submit" name="update-booking">Update Booking</button>
        </form>
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

