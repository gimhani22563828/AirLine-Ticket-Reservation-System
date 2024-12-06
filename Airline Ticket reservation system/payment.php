<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  // Check if form is submitted
  $con= new mysqli('localhost','root','','airline');
  
  if(!$con){
      die(mysqli_error($con));
  }

  // Check for connection errors
  if ($con->connect_errno) {
    echo 'Failed to connect to MySQL: ' . $con->connect_error;
    exit();
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form input values
    $cardName = $_POST['CardName'];
    $cardNumber = $_POST['CardNO'];
    $expireDate = $_POST['ExpireDate'];
    $cvvNumber = $_POST['CvvNO'];

    // Prepare and bind the SQL statement
    $stmt = $con->prepare("INSERT INTO payments (card_name, card_number, expire_date, cvv_number) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $cardName, $cardNumber, $expireDate, $cvvNumber);

    // Execute the statement
    if ($stmt->execute()) {
      echo 'Payment details stored successfully.';
    } else {
      echo 'Error storing payment details: ' . $stmt->error;
    }

    // Close the statement
    $stmt->close();
  }

  // Close the database connection
  $con->close();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Payment</title>
        <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/payment.css">
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
                  <h2>"Experience convenience at your fingertips with our streamlined payment process. Book your flight confidently and securely, knowing that your payment details are protected."</h2>
                  <br>
                  <h3>-Fly with Confidence, Pay with Easy-</h3>
                <div class="indicator">
                    <span class="active"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
                <div class="right-col">
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                <img src="image/157.jpg">
            </div>
            </div>
        </div>
      </header>
      
<br><br><br><br><br>
<hr>

<center>
    <form method="POST" action="payment.php">
        <h2 class="h1">CARD HOLDER NAME: </h2>
            <br>
        <input type="text" name="CardName" class="f1 f11 f12" placeholder="CARD HOLDER NAME HERE" />

        <h2 class="h1">CARD HOLDER NO: </h2>
            <br>
        <input type="text" name="CardNO" class="f1 f11 f12" placeholder="CARD HOLDER NUMBER HERE" />

        <h2 class="h1">EXPIRE DATE: </h2>
            <br>
        <input type="text" name="ExpireDate" class="f1 f11 f12" placeholder="EXPIRE DATE" />

        <h2 class="h1">CVV NUMBER: </h2>
            <br>
        <input type="text" name="CvvNO" class="f1 f11 f12" placeholder="CVV NUMBER" />

        <p>&nbsp;</p>
            <br>
        <input type="submit" name="insert" value="pay" class="button button1" style="margin-left:150px"/>
    </form>
</center>
<script>
function cardnumber(creditCardNo)
{
  var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
  if(creditCardNo.value.match(cardno))
        {
      return true;
        }
      else
        {
        alert("Not a valid Visa credit card number!");
        return false;
        }
}

function validate_cvv(CVV_Number)
{

         var myRe = /^[0-9]{3,4}$/;
         var myArray = myRe.exec(CVV_Number);
         if(CVV_Number!=myArray)
          {
            alert("Invalid cvv number"); //invalid cvv number
            return false;
         }else
		 {
             return true;  //valid cvv number
         }

}


function validationBooking()
{
	if(cardnumber(creditCardNo) && validate_cvv(CVV_Number))
	{
		alert("Succecfully Booked");
		
		
	}
	alert(" please fill correctly ");	
	
	
} 
</script>
  


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
              <form class="email-form">
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


