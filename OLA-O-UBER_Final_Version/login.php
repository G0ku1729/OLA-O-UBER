<?php

// Connect to database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "ola";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check if the user exists in the database
    $sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    // If the query returns a result, the user exists
    if (mysqli_num_rows($result) > 0) {
        // Start a session for the user
        session_start();
        $_SESSION['username'] = $username;
        // Redirect the user to the home page
        header("Location: login2.php");
        echo " success";
    } else {
        // If the query doesn't return a result, the username or password is incorrect
        $error = "Incorrect username or password";
    }
}

?>

 

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ola-O-uber</title>


  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              ola-O-uber
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Services </a>
                </li>
                
                <li class="nav-item active">
                  <a class="nav-link" href="contact.html">Contact Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://raipur.gov.in/helpline/">Help</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php">Driver Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <!-- <h2>
          Any Problems <br>
          Any Questions
        </h2> -->
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5  offset-md-1">
          <div class="contact_form">
            <h4>
              Driver Login
            </h4>
            <form action="" method="post">
            <?php
// If an error was set, display it
if (isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>
            
              <input type="text" id="username" name="username" placeholder="USERNAME" required>
              <br><br>
              <input type="password" id="password" name="password" placeholder="PASSWORD" required>
              <br><br>
              <input type="submit" name="submit" value="Submit" style="-webkit-box-flex: 1;
                  -ms-flex: 1;
                  flex: 1;
                  min-width: 116px;
                  border: none;
                  outline: none;
                  background-color: #f7c621;
                  color: #000000;" >
          </form>
            <form action="register.html">
                <center><button class = "register" type="submit">
                    Sign Up!
                </button>
</center>
              </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box">
            <img src="images/contact-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
  <!-- info section -->

  <section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="box">
        <div class="info_form">
          <h4>
            Subscribe Our Newsletter
          </h4>
          <form action="newsletter.php" method="post">
            <input type="text" placeholder="Enter your email" name="email">
            <input type="submit" name="submit" id="submit" value="Submit" style="-webkit-box-flex: 1;
                  -ms-flex: 1;
                  flex: 1;
                  min-width: 116px;
                  border: none;
                  outline: none;
                  background-color: #f7c621;
                  color: #000000;" >
          </form>
        </div>
        <div class="info_links">
          <ul>
            <li class=" ">
              <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="about.html"> About</a>
            </li>
            <li class="">
              <a class="" href="service.html"> Services </a>
            </li>
            
            <li class="">
              <a class="" href="contact.html">Contact Us</a>
            </li>
            <li class="">
              <a class="" href="login.html">Driver Login</a>
            </li>
          </ul>
        </div>
        <div class="info_social">
          <div>
            <a href="">
              <img src="images/fb.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="images/instagram.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; 2023 All Rights Reserved  by IIIT Naya Raipur 
      </p>
    </div>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>


  <!-- owl carousel script -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 20,
      navText: [],
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 2
        }
      }
    });
  </script>
  <!-- end owl carousel script -->

</body>

</html>
















