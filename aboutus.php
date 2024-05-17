<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="style4.css">
	<link rel="stylesheet" type="text/css" href="Style1.css">
</head>	
<body>
	<nav>
		<ul class="sidebar">
		  <li onclick="hideSidebar"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="aboutus.php">About Us</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="index1.php">Start Shopping</a></li>
		  <li><a href="login.php">Login/signup</a></li>
		</ul>
		<ul>
		  <li><a href="#" class="name"><img src="images/r3.jpg" class="img">DQ MART</a></li>
		  <li class="hideOnMobile"><a href="index.php">Home</a></li>
		  <li class="hideOnMobile"><a href="aboutus.php">About Us</a></li>
		  <li class="hideOnMobile"><a href="contact.php">Contact</a></li>
		  <li class="hideOnMobile"><a href="index1.php">Start Shopping</a></li>
		  <li class="hideOnMobile">
			<a href="login.php"><button class="sign-btn">Log In / Sign Up</button></a></li>
		  <li class="menu-button" onclick="showSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
		</ul>
		<div></div>
	  </nav>

	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1 class="h1">About Us</h1>
				</div>
				<div class="content">
					<h3>"To simplify the shopping experience for everyone<br> by offering a one-stop platform with intelligent<br>
						 product suggestions, automated comparisons,<br> and seamless checkout processes."</h3>
						 <br><br>
					<p>DQ Mart was born out of a simple frustration: the 
						endless search for the perfect product, the sifting through 
						countless options, and the constant uncertainty of getting the
						best deal. We believe shopping should be an enjoyable, efficient
						experience. That's why we created a platform that leverages the 
						power of AI to make you a smarter shopper.  DQ Mart 
						learns your preferences, analyzes vast amounts of data, and 
						delivers personalized recommendations that fit your needs and 
						budget.</p>
					
				</div>
				<div class="social">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="images/r2.jpg">
			</div>
		</div>
	</div>
	<footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
				<h4>Company</h4>
				<ul>
				  <li><a href="index.php">Home</a></li>
				  <li><a href="aboutus.php">About us</a></li>
				  <li><a href="contact.php">Contact us</a></li>
				  <li><a href="signup.php">Sign Up</a></li>
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
    
    <script src="script.js"></script>	
</body>
</html>