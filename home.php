<?php
// Start the session at the beginning of the script
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./assets/css/home.css">
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
        <h1>Fitness</h1>
        <p>
          Did you know that regular exercise can boost your mood by releasing endorphins, the body's natural 'feel-good' chemicals? It's not just about physical fitness; working out can also be your daily dose of happiness!
        </p>
      </div>
    </div>
  </section>
  <section>
    <div id="section2">
      <div class="container reveal ">
        <h2>Want to train with us?</h2><br><br>
        <p>
          Welcome to Fitness Hub! 🏋️‍♀️ Ready to transform your life through fitness? Join our community today and embark on a journey to a healthier, happier you. Explore our resources, connect with like-minded individuals, and let's achieve your fitness goals together. Get started now!
        </p>
        <br><br>
        <a href="about.php"><button class="button button2">See More...</button></a>
      </div>
    </div>
  </section>

  <section>
    <div id="section4">
      <div class="container">
        <div class="row">
          <div class="col">
            <p>
              Fitness Hub is committed to your well-being. We're here to support your fitness journey every step of the way. Explore our resources, join our community, and let's work together to achieve your fitness goals. Thank you for choosing Fitness Hub as your trusted fitness partner.
            </p>
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
            <h3> Social media <div class="underline"><span></span></div>
            </h3>
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
<script type="text/javascript">
  window.addEventListener('scroll', reveal);

  function reveal() {
    var reveals = document.querySelectorAll('.reveal');

    for (var i = 0; i < reveals.length; i++) {
      var windowheight = window.innerHeight;
      var revealtop = reveals[i].getBoundingClientRect().top;
      var revealpoint = 150;

      if (revealtop < windowheight - revealpoint) {
        reveals[i].classList.add('active');
      } else {
        reveals[i].classList.remove('active');
      }
    }
  }
</script>
<script>
  let subMenu = document.getElementById("subMenu");

  function toggleMenu() {
    var subMenu = document.getElementById("subMenu");
    subMenu.classList.toggle("openmenu");
  }
  const inputFile = document.getElementById('input-file');
  const updatedImageDataInput = document.getElementById('updated-image-data');

  inputFile.addEventListener('change', function() {
    const selectedFile = inputFile.files[0];

    if (selectedFile) {
      const reader = new FileReader();
      reader.onload = function(e) {
        // Store the selected image's data in the hidden input
        updatedImageDataInput.value = e.target.result;
      };
      reader.readAsDataURL(selectedFile);
    }
  });
</script>

</html>