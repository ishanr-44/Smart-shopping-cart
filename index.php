<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="Style1.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <!-- fontawesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
    crossorigin="anonymous">

</head>
<body>
  <nav>
    <ul class="sidebar">
      <li onclick="hideSidebar"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="login.php">Start Shopping</a></li>
      <li><a href="login.php">Login/signup</a></li>
    </ul>
    <ul>
      <li><a href="#" class="name"><img src="images/r3.jpg" class="img">DQ MART</a></li>
      <li class="hideOnMobile"><a href="index.php">Home</a></li>
      <li class="hideOnMobile"><a href="aboutus.php">About Us</a></li>
      <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
      <li class="hideOnMobile"><a href="login.php">Start Shopping</a></li>
      <li class="hideOnMobile">
        <a href="login.php"><button class="sign-btn">Log In / Sign Up</button></a></li>
      <li class="menu-button" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
    </ul>
    <div></div>
  </nav>
  
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
 
      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li> 
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active"> <img class="d-block mx-auto img-fluid" src="images/r12.jpg" alt="First slide">
        
      </div>
      
    </div>

  <section class="product"> 
    <h2 class="product-category">best selling</h2>
    <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
    <div class="product-container">
        <div class="product-card">
            <div class="product-image">
                <span class="discount-tag">50% off</span>
                <img src="images/r5.webp" class="product-thumb" alt="">
                <button class="card-btn">add to wishlist</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Coca-Cola</h2>
                <p class="product-short-description">200ml Bottle</p>
                <span class="price">Rs. 120.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r6.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Samaposha</h2>
                <p class="product-short-description">700g Packet</p>
                <span class="price">Rs. 565.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r7.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Fresh Milk</h2>
                <p class="product-short-description">Ambewela 180ml Packet</p>
                <span class="price">Rs. 120.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r8.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Salmon</h2>
                <p class="product-short-description">Jack Brand 425g Tin</p>
                <span class="price">Rs. 850.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r9.jpeg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Kiri The</h2>
                <p class="product-short-description">Raththi 200g Packet</p>
                <span class="price">Rs. 440.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r13.jpeg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Red Onion</h2>
                <p class="product-short-description">100g Price</p>
                <span class="price">Rs. 100.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r14.jpg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Garlic</h2>
                <p class="product-short-description">100g Price</p>
                <span class="price">Rs. 120.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r15.jpeg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Carrot</h2>
                <p class="product-short-description">100g Price</p>
                <span class="price">Rs. 150.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r16.jpeg" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Keeri Samba</h2>
                <p class="product-short-description">5kg Pack Price</p>
                <span class="price">Rs. 1300.00</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="images/r17.webp" class="product-thumb" alt="">
            </div>
            <div class="product-info">
                <h2 class="product-brand">Tomato</h2>
                <p class="product-short-description">100g Price</p>
                <span class="price">Rs. 80.00</span>
            </div>
        </div>
    </div>
</section>
<br>

<center><a href="login.php"><button class="start-btn">Start Shopping</button></a></center>

<br><br>

  <!-- ==============header carousel section starts here============== -->
  
	
	
  <!-- ==============header carousel section starts here============== -->
 
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="register.php">Sign Up</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Online Shop</h4>
          <ul>
            <li><a href="#">Groceries</a></li>
            <li><a href="#">Diary items</a></li>
            <li><a href="#">Meats</a></li>
            <li><a href="#">Furnitures</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
 </footer>
  <script>
    function showSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display='flex'

    }
    function hideSidebar(){
      const sidebar = document.querySelector('.sidebar')
      sidebar.style.display='none'

    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
  crossorigin="anonymous"></script>





  <!--script link---->
	<script type="text/javascript" src="ns/js/Un.js"></script>
  <script type="text/javascript" src="script.js"></script>


</body>
</html>