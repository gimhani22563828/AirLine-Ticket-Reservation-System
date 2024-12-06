<?php
  include_once'config.php';
  ?>
  <!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Ticket Details</title>
        <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style/TicketDetails.css">
    </head>
    <body>
      <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="image/m.webp">
                </div>
                <nav>
                    
                        <a href="#"><b>Home</b></a>

                        <div class="dropdown">
                        <button class="dropbtn"><b>Plan & Book</b>
                            <i class="fa fa-caret-down"></i> 
                          </button>
                          <div class="dropdown-content">
                            <a href="#">Manage My Booking </a>
                            <a href="#">Ticket Details</a>
                            <a href="#">Latest Deals</a>
                            <a href="#">Payment</a>
                            <a href="#">Online Refund request</a>
                          </div>
                        </div>

                        <div class="dropdown">
                           <button class="dropbtn"><b>Travel Information</b>
                              <i class="fa fa-caret-down"></i> 
                            </button>
                            <div class="dropdown-content">
                              <a href="#">Covid 19 Updates </a>
                              <a href="#">Baggage Allowance</a>
                              <a href="#">Special Requirment</a>
                              <a href="#">Visa & passport Requirment</a>
                            </div>
                        </div> 


                        <div class="dropdown">
                            <button class="dropbtn"><b>Experience</b>
                              <i class="fa fa-caret-down"></i> 
                            </button>
                            <div class="dropdown-content">
                              <a href="#">Economy class </a>
                              <a href="#">Business Class</a>
                              <a href="#">Entertainment</a>
                              <a href="#">Feedback</a>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="dropbtn"><b>Flysmiles</b>
                              <i class="fa fa-caret-down"></i> 
                            </button>
                            <div class="dropdown-content">
                              <a href="#">Contact</a>
                              <a href="#">Privacy Policy</a>
                              <a href="#">Recommendation</a>
                            </div>
                        </div>

                        <a href="#"><i class="fa fa-fw fa-user"></i> Login </a>
                </nav>
            </div>

      <div class="main">
        <hr>
        <table>
            <tr>
                <th>Ticket ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Phone Number</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th>Total Amount</th>
            </tr>
       
        </table>
        <?php
          $sql  = "select * from  TicketDetails";
          $result=$conn->query($sql);

          if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo"<tr>td>".$row["V_ID"]."</td><td>".$row["First Name"]."</td><td>".$row["Last Name"]."</td><td>".$row["Email Address"]."</td><td>".$row["Phone Number"]."</td><td>".$row["Arrival"]."</td><td>".$row["Departure"]."</td><td>".$row["Total Amount"]."</td><td>";
            }
          }
          else{
            echo"Empty Rows";
          }
          mysqli_close($conn);
        ?>


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
                <li><a href="">Home</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Feedback</a></li>
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
