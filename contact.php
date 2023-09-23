<?php
// Include your configuration file and establish a database connection
@include './logic/config.php';

// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get form data
  $senderName = mysqli_real_escape_string($conn, $_POST['fullName']);
  $senderEmail = mysqli_real_escape_string($conn, $_POST['email']);
  $messageContent = mysqli_real_escape_string($conn, $_POST['message']);

  // Insert the message into the database
  $insertQuery = "INSERT INTO messages (sender_name, sender_email, message_content) 
                    VALUES ('$senderName', '$senderEmail', '$messageContent')";

  if (mysqli_query($conn, $insertQuery)) {
    // Message inserted successfully
    echo '<script>alert("Message sent successfully.");</script>';
  } else {
    // Error occurred while inserting the message
    echo '<script>alert("Error sending message. Please try again later.");</script>';
  }
}


// Close the database connection
mysqli_close($conn);
?>








<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./assets/css/contact.css">
  <title>Fitness Hub</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,400;9..40,700&display=swap" rel="stylesheet">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://kit.fontawesome.com/c4254e24a8.js"></script>
</head>

<body>
  <section>
    <div class="header">
      <nav>
        <h2 class="logo">Fitness Hub</h2>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="plan.php">Plan</a></li>
          <li><a href="product-catalogue.php">Shop</a></li>
          <li><a href="contact.php">Contact</a></li>


        </ul>
        <a href="login.php">
          <button class="nav-button">Log in</button>
        </a>
      </nav>


      <div class="description">
        <h1>Contact Us</h1>

      </div>

    </div>
  </section>

  <section class="contact">
    <div class="container">
      <div class="contactInfo">
        <div class="box">
          <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
          <div class="text">
            <h3>Address</h3>
            <p>Starlight Avenue</p>
            <p>Astoria Springs, Serenova</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
          <div class="text">
            <h3>Phone</h3>
            <p>+95 1234567</p>
          </div>
        </div>
        <div class="box">
          <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
          <div class="text">
            <h3>Email</h3>
            <p>fitnesshub.gmail.com</p>
          </div>
        </div>

      </div>

      <div class="contactForm">
        <div class="box">
          <form method="post" action="contact.php"> <!-- Add action attribute with the PHP file name -->
            <h2>Send Message</h2>
            <div class="inputBox">
              <input type="text" name="fullName" required="required">
              <span>Full Name</span>
            </div>
            <div class="inputBox">
              <input type="text" name="email" required="required">
              <span>Email</span>
            </div>
            <div class="inputBox">
              <textarea name="message" required="required"></textarea>
              <span>Enter Message</span>
            </div>
            <div class="inputBox">
              <input type="submit" name="submit" value="Send">
            </div>
          </form>
        </div>
      </div>


      </form>
    </div>
    </div>

  </section>

  <div id="section4">
    <div class="container1">

      <div class="row">
        <div class="col">
          <p>Fitness Hub is committed to your well-being. We're here to support your fitness journey every step of the way. Explore our resources, join our community, and let's work together to achieve your fitness goals. Thank you for choosing Fitness Hub as your trusted fitness partner.</p>

        </div>
        <div class="col">
          <h3>Office <div class="underline"><span></span></div>
          </h3>
          <p>Starlight Avenue</p>
          <p>Astoria Springs, Serenova</p>
          <p>Fitness Hub Center</p>
          <p class="email-id">fitnesshub@gmail.com</p>
          <h4>+95-1234567</h4>

        </div>
        <div class="col">
          <h3>Links <div class="underline"><span></span></div>
          </h3>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="plan.php">Plan</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
        <div class="col">
          <h3>Social media <div class="underline"><span></span></div>
          </h3>
          <?php include('./logic/newsletter.php'); ?>
          <div class="social-icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
      </div>

      <hr>
      <p class="copyright">Fitness Hub &copy; 2023 - All Rights Reserved</p>


    </div>
  </div>
  </section>



</body>

</html>
<?php
