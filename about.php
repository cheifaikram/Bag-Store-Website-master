<?php
include 'config.php';
session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];

  echo "Welcome, User!";
} else {
  echo "Welcome, Anonymous User!";
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'header.php'; ?>
    <h1>about page</h1>
    <section class="about-section">
      <div class="container">
        <h1>About Us</h1>
        <p>Welcome to our luxury bag e-commerce site. We are dedicated to providing the finest selection 
          of luxury bags to our esteemed customers.</p>
      </div>
    </section>
<section class="history-section">
  <div class="container">
    <h2 class="history-title">Our Journey</h2>
    <p class="history-description">Discover the remarkable story of our company</p>
  
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-year">2005</div>
        <div class="timeline-content">
          <h3 class="timeline-title">Company Founding</h3>
          <p class="hidden">Founded with a passion for elegance, our luxury bag online store curated an exquisite collection
             that captivated discerning connoisseurs from the very beginning.</p>
        </div>
      </div>
  
      <div class="timeline-item">
        <div class="timeline-year">2010</div>
        <div class="timeline-content">
          <h3 class="timeline-title">Expansion and Growth</h3>
          <p class="hidden">Our small boutique venture flourished into an iconic destination, delivering unparalleled service 
            and exceptional products that captivated fashion enthusiasts worldwide.</p>
        </div>
      </div>
  
      <div class="timeline-item">
        <div class="timeline-year">2015</div>
        <div class="timeline-content">
          <h3 class="timeline-title">International Presence</h3>
          <p class="hidden">Embracing international markets, our timeless designs transcended cultural boundaries, making our luxury
             bags a statement of global style.</p>
        </div>
      </div>
  
      <div class="timeline-item">
        <div class="timeline-year">2022</div>
        <div class="timeline-content">
          <h3 class="timeline-title">Innovation and Success</h3>
          <p class="hidden">By blending craftsmanship and modern technology, we revolutionized luxury e-commerce, garnering unprecedented
             success and customer satisfaction.</p>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="philosophy-section">
      <div class="container">
        <h2 class="history-title">Our Philosophy</h2>
        <p>At Kim's Shop, we believe that true luxury lies in the art of simplicity 
          and timeless elegance. Our philosophy centers around the idea that a chic bag is 
          more than just a fashion accessory; it's a statement of sophistication and 
          individuality. Each bag is meticulously designed with an unwavering commitment 
          to quality, craftsmanship, and ethical practices.</p>
      </div>
      <div class="about-cont">
        <div class="box">
          <h2 class="title">Elegance</h2>
          <p>We strive to redefine elegance, combining classic designs with contemporary elements 
            to create bags that exude refined charm and everlasting allure.</p>
        </div>

        <div class="box">
          <h2 class="title">Sustainability</h2>
          <p> Our dedication to sustainability drives us to source the finest materials
             ethically, ensuring that our bags leave a positive impact on both fashion and the environment.</p>
        </div>

        <div class="box">
          <h2 class="title">Artistry</h2>
          <p>Our bags are the result of the passion and expertise of skilled artisans who pour 
            their heart into every stitch, making each piece a work of art.</p>
        </div>

        <div class="box">
          <h2 class="title">Individuality</h2>
          <p>We celebrate the uniqueness of each customer, crafting limited-edition 
            collections that reflect diverse styles and personalities.</p>
        </div>
      </div>

    </section>

    <section class="experience-section">
      <div class="container">
        <h2>Customer Experience</h2>
        <p>Mention easy online shopping, secure payment options, and fast shipping, fast return.</p>
      </div>
    </section>

    <section class="testimonials-section">
      <div class="container">
        <h2>Testimonials</h2>
        <p>Include testimonials or reviews from satisfied customers to build trust and credibility. Showcase positive feedback about your luxury bags and customer service.</p>
      </div>
    </section>

    <br><br><br>
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>quick links</h3>
          <a href="home.php">Home</a>
          <a href="about.php">About</a>
          <a href="shop.php">Shop</a>
          <a href="contact.php">Contact</a>
        </div>
        <div class="box">
          <h3>extra links</h3>
          <a href="index.html">Login / Register</a>
          <?php if (isset($_SESSION['user_id'])) {?>
            <a href="cart.php">Cart</a>
            <a href="order.php">Orders</a>
           <?php
          } ?>
        </div>
        
        <div class="box">
          <h3>contact info</h3>
          <p> <i class='bx bx-phone'></i> 055557836 </p>
          <p> <i class='bx bx-phone'></i> 06634273542 </p>
          <p> <i class='bx bx-envelope'></i> ikramch@gmail.com   </p>
          <p> <i class='bx bx-map' ></i> Tipaza, Algeria </p>
        </div>
        
        <div class="box">
          <h3>follow us</h3>
          <a href="#"> <i class='bx bxl-facebook'></i> Facebook </a>
          <a href="#"> <i class="bx bxl-twitter"></i> Twitter </a>
          <a href="#"> <i class="bx bxl-instagram"></i> Instagram </a>
          <a href="#"> <i class="bx bxl-linkedin"></i> Linkedin </a>
        </div>
      </div>
    </section>
</body>
</html>