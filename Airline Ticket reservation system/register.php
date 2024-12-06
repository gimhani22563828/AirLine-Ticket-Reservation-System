<?php
$con = new mysqli('localhost', 'root', '', 'airline');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $accountType = $_POST["account_type"];
    $title = $_POST["Title"];
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $addressLine1 = $_POST["address_line1"];
    $addressLine2 = $_POST["address_line2"];
    $phoneNumber = $_POST["phone_number"];
    $gender = $_POST["gender"];
    $dateOfBirth = $_POST["date_of_birth"];
    $nationality = $_POST["nationality"];
    $passportNo = $_POST["passport_no"];

    // Insert the data into the database
    $sql = "INSERT INTO registration (account_type, title, first_name, last_name, address_line1, address_line2, phone_number, gender, date_of_birth, nationality, passport_no)
            VALUES ('$accountType', '$title', '$firstName', '$lastName', '$addressLine1', '$addressLine2', '$phoneNumber', '$gender', '$dateOfBirth', '$nationality', '$passportNo')";

    if (mysqli_query($con, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>

<html>
    <head>
        <link rel = "stylesheet" href ="style/RegisterForm.css">
        <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
        <form class="reg_form" action="register.php" method="POST">

        <title>
            Registration
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

        <!-- head section -->

        <img src = "image/iosa.webp" alt = "register">

        <form class  = "reg_form1">
            <h1>
                JOIN NOW
            </h1>
            
        <table border = "1">

            <tr>
                <th>Select account type : </th>
                <th><input type = "radio" name = "account type" checked>FlySmilesAccount</th>
                <th><input type = "radio" name = "account type" >StudentAccount</th>
            </tr>

        </table>

        <hr>

        
        <h2 class = "h2">Personal Information</h2>

        

            <label>Title</label>
            <select name = "Title" autofocus>
                <option> choose Title</option>
                <option value="Mr"> Mr</option>
                <option value="Mrs"> Mrs</option>
                <option value="Miss"> Miss</option>
                <option value="Dr"> Dr</option>
                <option value="PROF"> PROF</option>
                <option value="Major"> Major</option>
            </select>
            <br><br>

            <label>First Name  <br> </label>
            <input type = "text" name = "first Name" placeholder = "First Name" required >
            <br> <br>

            <label>Last Name <br> </label>
            <input type = "text" name = "Last Name" placeholder = "Last Name" required>
            <br> <br>

            <label>Address Line 1 </label>
            <input type = "text" name = "Address Line 1 " placeholder = "Address Line 1" required>
            <br><br>

            <label>Address Line 2 </label>
            <input type = "text" name = "Address Line 2 " placeholder = "Address Line 2" required>
            <br><br>
             
            <label>Phone Number </label>
            <input type = "phone" name = "Phone Number " placeholder = "Phone Number" pattern ="[0-9]{10}" required>
            <br><br>

            <label>Gender </label>
            <input type = "radio" name = "gender" checked> Male
            <input type = "radio" name = "gender" > Female
            <br><br>

            <label>Date of Birthday</label>
            <input type = "date" name = "date of birth" >
            <br><br>

            <label>Nationality</label>
            <select name = "nationality">
                <option>Select Nationality</option>
                <option value="SriLankan">SriLankan</option>
                <option value="Australian">Australian</option>
                <option value="Colombian">Colombian</option>
                <option value="Chinese">Chinese</option>
                <option value="Egyptian">Egyptian</option>
                <option value="French">French</option>
                <option value="German">German</option>
                <option value="Indian">Indian</option>
                <option value="Indonesian">Indonesian</option>
                <option value="Japanese">Japanese</option>
            </select>

            <br><br>

            <label>Passport No</label>
            <input type = "number" name = "passport no" placeholder = "passport number">
            <br><br>

            <input type ="checkbox" > I confirm that above informations are correct <br><br>

            <input type = "submit" value = "submit" id = "submit">
            
        </form>

        <hr>

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