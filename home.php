<?php
   include 'PHP/session.php';
   $_SESSION['login']=$login_session;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Choclate Shop</title>
	<link rel="stylesheet" type="text/css" href="CSS/Stylesheet.css">
</head>
<body>
	
<div class="header" id="myHeader">
  <h2 align="center" style="color: red;font-family: veranda;font-size: 45px">Chocolate Shop</h2>
  
  <a href="pages/chocsearching.html" class="button button1">Search Chocolates</a>  
  <a href="pages/customer.html" class="button button1">Customer Details</a>    
  <div align="right">
    <?php echo $login_session; ?>
    <a href = "PHP/logout.php">Sign Out</a>
   
  </div>
</div>

<div class="content">
<img id="homeimg" src="images/home.jpg" alt="home" width="100%" height="300">
  <h3>Tour Our Factory</h3>
<p id="p1"></p>

<p id="p2"></p>

<p id="p3"></p>


<div>
	<img src="images/1.jpg" height="250" width="250">	<img src="images/2.jpg" height="250" width="250"> <img src="images/3.jpg" height="250" width="250">
</div>
<h5>WANT TO LEARN EVEN MORE? HAVE A LARGE GROUP? CONSIDER A PRIVATE TOUR!</h5>
<p>We can create a unique chocolate experience for you and your private group. We’re not shy about the fact that our factory is a pretty sweet spot to bring almost anyone whether it’s your book club, your class, your friends, your out-of-town family, we do it all. We can talk to you about your needs and design a chocolate-focused event that includes our basic tour plus other optional add-ons. Want to deep dive into pairings? Desire to learn more about a specific origin? Let us know and we can structure your tour around your needs and interests. Email us <mark>info@askinosie.com</mark> to discuss options.</p>


</div>
<script type="text/javascript" src="JS/Java.js"></script>
<div class="footer"class="link1">
	<a  href="pages/product.html">Products</a> | <a href="#">Contact</a> | <a href="#">About</a> | <a href="index.html">Signin</a>
</div>
</body>
</html>