<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="./assets/css/aboutpg.css">
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
        <h1>About Us</h1>
      </div>
    </div>
  </section>

  <section class="sec-01">
    <div class="container">
      <h2 class="main-title">Fitness Hub</h2>
      <div class="content">
        <div class="image">
          <img src="./assets/images/about (2).jpg">
        </div>
        <div class="text-box">
          <h3>About Fitness Hub</h3>
          <p>At Fitness Hub, our mission is to inspire and empower individuals on their fitness journeys. Founded with a passion for health and wellness, our team provides evidence-based fitness resources, workouts, nutrition guidance, and expert advice. We champion inclusivity, community, and fitness transformation. Whether you're a beginner or seasoned athlete, Fitness Hub is your trusted partner in achieving your goals, making health and vitality accessible to all.</p>
        </div>
      </div>
    </div>
    </div>
  </section>


  <section class="sec-03">
    <h2 class="title">Meet our trainers</h2>
  </section>

  <section class="sec-02">

    <div class="container2">


      <div class="card">

        <div class="imgBx">
          <img src="./assets/images/Derek.jpg">

        </div>
        <div class="content2">
          <h2>Derek</h2><br>
          <h3>social media:</h3>
          <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="./assets/images/John.jpg">

        </div>
        <div class="content2">
          <h2>John</h2><br>
          <h3>social media:</h3>
          <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="imgBx">
          <img src="./assets/images/Ruja.jpg">

        </div>
        <div class="content2">
          <h2>Ruja</h2><br>
          <h3>social media:</h3>
          <div class="icons">
            <i class="fab fa-facebook-f"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
          </div>
        </div>
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


  <script>
    ScrollReveal({
      reset: true,

      distance: '60px',
      duration: 2500,
      delay: 400

    });
    ScrollReveal().reveal('.main-title', {
      delay: 500,
      origin: 'left'
    });
    ScrollReveal().reveal('.sec-01 .image', {
      delay: 600,
      origin: 'bottom'
    });
    ScrollReveal().reveal('.text-box', {
      delay: 700,
      origin: 'right'
    });
    ScrollReveal().reveal('.title', {
      delay: 600,
      origin: 'bottom'
    });
    ScrollReveal().reveal('.card', {
      delay: 700,
      origin: 'bottom'
    });
  </script>


</body>

</html>