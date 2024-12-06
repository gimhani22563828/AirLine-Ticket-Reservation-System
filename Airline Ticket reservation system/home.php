<?php
// Check if form is submitted
$con= new mysqli('localhost','root','','airline');

if(!$con){

    die(mysqli_error($con));
}

// Retrieve the form data

if(isset($_POST['submit'])){
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $departureDate = $_POST['departure_date'];
    $returnDate = $_POST['return_date'];
    $passengers = $_POST['passengers'];

    $sql = "INSERT INTO `bookings` (departure, destination, departure_date, return_date, passengers)
        values ('$departure', '$destination', '$departureDate', '$returnDate', '$passengers')";

$result = mysqli_query($con,$sql);

if(!$result){
    die(mysqli_error($con));
}

    }


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <script src="https://kit.fontawesome.com/fb70ce88c3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <header class="header">
        <div class="navbar">
            <div class="logo">
                <img src="image/m.webp" alt="Logo">
            </div>
            <nav class="nav-links">
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
        <div class="text-box">
            <br> <br> <br> <br> <br> <br> <br>
            <h1>"Discover a world of destinations <br>at your fingertips."</h1>
            <p>Welcome to our airline ticket booking web page! Discover a seamless and convenient way to plan your next
                journey with us. Whether you're traveling for business or leisure, our user-friendly platform allows you
                to search, compare, and book flights with ease. Explore a wide selection of domestic and international
                destinations, and find the best deals to suit your budget. With our hassle-free booking process and
                competitive prices, you can save time and money while experiencing top-notch service. Get ready to
                embark on your next adventure and let us take care of your travel needs. Start your journey today and
                soar to new heights with our airline ticket reservation services.</p>
            <a href="login.html" class="vist-btn">visit us to know more</a>

        </div>
    </header>

    <section class="deals">
        <form  method="post" class="booking-form">
            <div class="form-group">
                <label for="departure">Departure:</label>
                <input type="text" id="departure" name="departure" required>
            </div>

            <div class="form-group">
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required>
            </div>

            <div class="form-group">
                <label for="departure-date">Departure Date:</label>
                <input type="date" id="departure-date" name="departure_date" required>
            </div>

            <div class="form-group">
                <label for="return-date">Return Date:</label>
                <input type="date" id="return-date" name="return_date">
            </div>

            <div class="form-group">
                <label for="passengers">Passengers:</label>
                <input type="number" id="passengers" name="passengers" min="1" max="10" required>
            </div>

            <input type="submit" value="Book Now" class="btn-submit" name="submit">
        </form>
        <br>
        <center>
            <hr>
        </center>
        <h2>Latest deals</h2>
        <br> <br>
        <p>"Fly high with unbeatable deals! Discover the world at incredible
            prices and make your dreams take flight. Check out our latest deals
            and embark on an unforgettable journey. Don't miss out on these
            exclusive offers – book your airline tickets now and let adventure
            find you!"</p>

        <div class="row">
            <div class="deal-col">
                <h3>Fly now, pay down the line</h3>
                <p class="paragraph1">"Experience the freedom to fly now and pay
                    later with our exclusive offer! Book your
                    dream trip today and enjoy the convenience
                    of three months of interest-free instalments.
                    No need to worry about upfront costs – simply select
                    our flexible payment option at checkout and spread
                    the cost of your airline tickets over time.
                    Take advantage of this incredible opportunity to
                    explore new destinations without breaking the bank.
                    Start planning your next adventure and let the excitement
                    begin!"</p>
            </div>
            <div class="deal-col">
                <h3>Special fares and extras for students</h3>
                <p class="paragraph1">"Attention all students! Unlock a world of special fares and
                    exciting extras when you book your travels with WingsAirline.
                    We understand the importance of budget-friendly travel for students,
                    which is why we've curated exclusive offers just for you. Whether
                    you're planning a study abroad adventure or a well-deserved break,
                    our special fares will make your journey more affordable. Plus,
                    enjoy additional perks such as extra baggage allowance, flexible
                    ticket changes, and priority boarding. Don't miss out on this
                    fantastic opportunity to make your student travels even more
                    memorable. Grab your wings and take flight with WingsAirline!"</p>
            </div>
            <div class="deal-col">
                <h3>Enjoy rewards faster, together</h3>
                <p class="paragraph1">"Unlock a world of faster rewards and greater benefits with
                    our My Family account feature! Now, you can pool your Miles
                    together with your loved ones and enjoy the rewards together.
                    Whether you're planning a family vacation or a group
                    adventure, pooling Miles allows you to accumulate rewards
                    faster and redeem them for exciting travel perks. Imagine
                    reaching your dream destination sooner than you thought
                    possible! With our My Family account, the joy of earning
                    and redeeming Miles becomes a shared experience,
                    bringing you and your loved ones closer to unforgettable
                    adventures. Start pooling your Miles today and embark
                    on a journey of incredible rewards, together!"</p>
            </div>
            <div class="deal-col">
                <h3>Skywards Give Everyday</h3>
                <p class="paragraph1">"Experience the Skywards Give Everyday program and unlock a world of rewards!
                    With this exclusive offer, you can earn Miles while you shop, dine, unwind, and play.
                    Whether you're indulging in retail therapy, enjoying a delicious meal at partner
                    restaurants, relaxing at luxury spas, or exploring exciting entertainment options,
                    every experience brings you closer to exciting rewards. Simply use your Skywards
                    membership whenever you engage in everyday activities, and watch your Miles accumulate.
                    Start maximizing your daily routine and turn it into an opportunity to earn Miles
                    towards unforgettable travel adventures, upgrades, and more. Join Skywards Give
                    Everyday and let your everyday moments take flight!"</p>
            </div>
            <div class="deal-col">
                <h3>Earn up to 100,000 bonus Miles</h3>
                <p class="paragraph1">"Unlock a sky-high bonus with the ENBD Skywards Credit Card! Apply now and
                    seize the opportunity to earn up to 100,000 bonus Miles. This exclusive offer
                    is designed to enhance your travel experiences and reward your everyday spending.
                    With the ENBD Skywards Credit Card, every swipe brings you closer to your dream
                    destination. Earn bonus Miles on your card activation, first spend, and meeting
                    the spend threshold. Imagine the possibilities as you accumulate Miles towards free
                    flights, cabin upgrades, hotel stays, and more. Don't miss out on this incredible
                    chance to elevate your travel rewards. Apply for the ENBD Skywards Credit Card today
                    and embark on a journey to unforgettable destinations!"</p>
            </div>
        </div>
        <a href="latest deals.html" class="vist-btn1">visit us to know more</a>
        <br>
        <br>
        <center>
            <hr>
        </center>
    </section>

    <section class="video-section">

        <div class="video-container">

            <iframe src="image/Sri Lanka from above - Cinematic aerial film DJI Mavic 2 Pro.mp4" frameborder="0"
                allowfullscreen></iframe>
        </div>
        <div class="video-container">
            <iframe src="image/Sri Lanka - Heart of the Indian Ocean.mp4" frameborder="0" allowfullscreen></iframe>

        </div>
    </section>

    <section class="btn-section">
        <center>
            <br>
            <br>
            <hr>
        </center>
    </section>


    <div class="grid-container">

        <h1>Featured destinations from Colombo</h1>
        <br> This part showcases six destinations from Colombo to various countries around the world, offering diverse
        experiences from pristine beaches to vibrant cities and breathtaking landscapes. Explore the stunning images and
        descriptions and let your wanderlust guide you. Click on the "Learn More" links to discover insider tips and
        must-visit attractions.</p>


        <div>
            <img src="image/cityscape-rome-ancient-centre-italy.jpg" alt="Image 1">
            <p>ITALY<br>

                Milan
                Book Business Class Return until 30 Jun 24<br>

                from LKR 1,364,725*</p>
        </div>
        <div>
            <img src="image/colorful-buildings-near-river-surrounded-by-mountains-lucerne-switzerland.jpg"
                alt="Image 2">
            <p>SWITZERLAND <br>

                Dubai
                Book Business Class Return until 30 Jun 24<br>

                from LKR 484,339*</p>
        </div>
        <div>
            <img src="image/famous-tower-bridge-evening-london-england.jpg" alt="Image 3">
            <p>UNITED KINGDOM<br>

                London
                Book Economy Class Return until 30 Jun 24<br>

                from LKR 335,568*</p>
        </div>
        <div>
            <img src="image/sunset-view-eiffel-tower-from-paris.jpg" alt="Image 4">
            <p>PRANCE<br>

                Paris
                Book Economy Class Return until 30 Jun 24<br>

                from LKR 259,425*</p>
        </div>
        <div>
            <img src="image/toronto-skyline-from-park.jpg" alt="Image 5">
            <p>CANADA<br>

                Toronto
                Book Economy Class Return until 30 Jun 24<br>

                from LKR 438,340*</p>
        </div>
        <div>
            <img src="image/water-famous-architecture-finance-shanghai-tower.jpg" alt="Image 6">
            <p>UNITED ARAB EMIRATES<br>

                Dubai
                Book Business Class Return until 30 Jun 24<br>

                from LKR 484,339*</p>
        </div>
    </div>




    <section class="footer">
        <section class="Contact">
            <h2>Have a question or need assistance? </h2><br>
            <h2>Reach out to our dedicated team
                of experts who are here to provide you with exceptional support and
                ensure your journey is seamless from start to finish."</h2>
            <br>
            <p>We are here to assist you with any inquiries or assistance you may need regarding our airline ticket
                reservation services. Whether you have questions about flight bookings, managing your reservations,
                payment options, or any other travel-related concerns, our dedicated support team is ready to help. We
                value your feedback, and your satisfaction is our top priority.<br>

                You can reach out to us through multiple channels for your convenience. If you prefer direct
                communication, our customer service representatives are available via phone during business hours. You
                can also send us an email with your query, and we will respond promptly to provide the information you
                need.<br>

                For your convenience, we have an online contact form where you can submit your questions or concerns.
                Simply fill out the required fields, and we will get back to you as soon as possible.<br>

                At our airline ticket reservation service, we strive to deliver exceptional customer service and ensure
                a seamless travel experience for our valued customers. We understand that every journey is unique, and
                we are committed to tailoring our services to meet your specific needs. Your satisfaction and peace of
                mind are of utmost importance to us.<br>

                Feel free to get in touch with us today. We look forward to assisting you and making your travel
                experience truly enjoyable."</p>
            <br><br><br>
            <a href="contact.html" class="vist-btn">Contact us</a>
            <Br>
        </section>

        <h2>About us</h2>
        <p>"Fly high with our unbeatable airfare deals and seamless ticket reservation. Discover the world with Air
            Line Ticket Reservation!"</p>

        <div class="container">
            <h1 class="heading">Message</h1>
            <br><br>
            <div class="profiles">
                <div class="profile1">
                    <img src="image/as.png" class="profile1-img">
                    <h3 class="user-name">Palitha Kumara</h3>
                    <h5 class="position">CEO</h5>
                    <p><em>"Welcome aboard our airline! It is my pleasure to personally extend my
                            warmest greetings to each and every one of you. At our airline,
                            we are dedicated to providing you with an exceptional travel experience.
                            Whether you're embarking on a business trip or a leisurely getaway,
                            our team is committed to ensuring your journey is seamless, comfortable,
                            and memorable. Thank you for choosing our airline, and we look forward to
                            serving you on your upcoming flights."</em><br><br>
                        Safe travels,<br>
                        Kapila Perera,<br> CEO</p>
                </div>
                <div class="profile1">
                    <img src="image/Daco_5511364.png" class="profile1-img">
                    <h3 class="user-name">Kasun Perera</h3>
                    <h5 class="position">Administrator</h5>
                    <p><em>"As the Administrator of our airline, I want to express my sincere
                            gratitude for choosing to fly with us. Our priority is to make your
                            travel experience as smooth and hassle-free as possible. From ticketing
                            and check-in to baggage handling and customer service, our dedicated team
                            is here to assist you at every step of your journey. We value your trust
                            in us and strive to exceed your expectations. Thank you for choosing our
                            airline, and we wish you a pleasant and enjoyable flight."</em><br><br>
                        Best regards,<br>
                        Kasun Chaminda, <br>Administrator</p>
                </div>
                <div class="profile1">
                    <img src="image/kindpng_2532351.png" class="profile1-img">
                    <h3 class="user-name">Hasini perera</h3>
                    <h5 class="position">Manager</h5>
                    <p><em>"On behalf of the entire team, I would like to extend a warm welcome to you.
                            As the Manager of our airline, it is my utmost priority to ensure that you
                            receive the highest level of service and comfort during your travels.
                            Our dedicated staff works tirelessly to create a positive and enjoyable
                            experience for you, from the moment you step foot on our aircraft until
                            you reach your destination. We are committed to providing exceptional service,
                            attention to detail, and a personal touch that sets us apart. Thank you for
                            choosing our airline, and we look forward to serving you with excellence."</em><br><br>
                        Sincerely,<br>
                        Hasini Perera,<br> Manager</p>
                </div>
            </div>
        </div>
        <section>
            <div class="icon" align="center">
                <hr>
                <a href="https://www.facebook.com/flysrilankan/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCU_e10UGVQS8JikgDpwvdag"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://twitter.com/flysrilankan?lang=en#:~:text=SriLankan%20Airlines%20(%40flysrilankan)%20%2F%20Twitter"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/srilankanairlinesofficial/?hl=en#:~:text=SriLankan%20Airlines%20(%40srilankanairlinesofficial)%20%E2%80%A2%20Instagram%20photos%20and%20videos"><i class="fa-brands fa-instagram"></i></a>
                <p>WING AIRLINE(MLB_16.01_12) © 2023-All Right Reserved</p>
            </div>
        </section>

    </section>
</body>

</html>
