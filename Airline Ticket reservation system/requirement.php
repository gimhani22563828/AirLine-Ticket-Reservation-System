<?php
$con = new mysqli('localhost', 'root', '', 'airline');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$tid = isset($_POST['T_ID']) ? $_POST['T_ID'] : '';
$fname = isset($_POST['F_Name']) ? $_POST['F_Name'] : '';
$lname = isset($_POST['L_Name']) ? $_POST['L_Name'] : '';
$email = isset($_POST['E_Address']) ? $_POST['E_Address'] : '';
$pno = isset($_POST['P_Number']) ? $_POST['P_Number'] : '';
$req = isset($_POST['massage']) ? $_POST['massage'] : '';

// Make sure to input table names 'requirement' in the database table
$sql = "INSERT INTO requirement (Ticket_ID, First_Name, Last_Name, Email_address, Phone_Number, Requirment)
        VALUES ('$tid', '$fname', '$lname', '$email', '$pno', '$req')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Record saved successfully')</script>";
    header("location: requi.php");
} else {
    echo "<script>alert('Record saved unsuccessfully!')</script>";
}
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Ticket Details</title>
        <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="srequest.css">
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

      <div class="main">

    

      <h1>Special Requirment</h1>
      <br><br> 

      <div class="form1">
      <form  action="requirement.php" method="post" >
       
        
           Ticket ID:<br><br>
           <input type="text" id="T_ID" name="T_ID" placeholder="99817227" required><br><br>

           First Name:<br><br>
           <input type="text" id="F_Name" name="F_Name" placeholder="tharindu" required><br><br>
  
           Last Name:<br><br>
           <input type="text" id="L_Name" name="L_Name" placeholder="malinga" required><br><br>
  
           Email Address:<br><br>
           <input type="text" id="E_Address" name="E_Address" placeholder="wingairlineairline@gmail.com"required><br><br>
  
           Phone Number:<br><br>
           <input type="text" id="P_Number" name="P_Number" placeholder="+94-112564285" required><br><br>
  
           Requirment:<br><br>
           <textarea name="massage" row="100" cols="75" >what are the Requirment</textarea>
           
           <br><br><br><br>


           <input type="submit" value="submit"><br><br>
      
      </form>

      </div>

  
    </div>
   
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
      <p class="copyright">WING AIRLINE(MLB_16.01_12)  © 2023-All Right Reserved</p>
      </footer>
    </body>
</html>           