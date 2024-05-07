<?php 
  session_start(); 

//    if (!isset($_SESSION['username'])) {
//    	$_SESSION['msg'] = "You must log in first";
//    	header('location: login.php');
//    }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- swiper css link -->
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awosome cdn link-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- custom css file link-->
    <link rel = "stylesheet" href = "css/style.css">

</head>
<body>
<!-- header section starts  -->
 <section class = "header">
<a href = "home.php" class = "logo">travel.</a>

<nav class = "navbar">
    <a href = "home.php">home</a>
    <a href = "about.php">about</a>
    <a href = "package.php">package</a>
    <a href = "book.php">book</a>
    <a href="login.php?logout='1'" style="color: red;">logout</a>
</nav>

<div id = "menu-btn" class = "fas fa-bars"></div>
</section>
<!-- header section ends  -->

<!-- home section starts -->
<section class = "home">

<div class="swiper home-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide slide" style = "background:url(images/hs1.jpg) no-repeat">
           <div class="content">
             <span>explore, discover, travel</span>
             <h3>travel around the world</h3>
             <a href = "package.php" class = "btn">discover more</a>
           </div>
        </div>

        <div class="swiper-slide slide" style = "background:url(images/hs2.jpg) no-repeat">
           <div class="content">
             <span>explore, discover, travel</span>
             <h3>discover new places</h3>
             <a href = "package.php" class = "btn">discover more</a>
           </div>
        </div>

        <div class="swiper-slide slide" style = "background:url(images/hs3.jpg) no-repeat">
           <div class="content">
             <span>explore, discover, travel</span>
             <h3>make your tour worthwhile</h3>
             <a href = "package.php" class = "btn">discover more</a>
           </div>
        </div>



    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

</div>

</section>
<!--home section ends-->

<!-- services section starts -->

<section class = "services">
<h1 class = "heading-title">our services </h1>
<div class="box-container">
    <div class="box">
        <img src = "images/icon-1.jpg"  width = "150" height = "150">
        <h3>adventure</h3>
    </div>

    <div class="box">
        <img src = "images/icon-2.jpg" width = "150" height = "150">
        <h3>tour guide</h3>
    </div>

    <div class="box">
        <img src = "images/icon-3.jpg"  width = "150" height = "150">
        <h3>trekking</h3>
    </div>

    <div class="box">
        <img src = "images/icon-4.jpg"  width = "150" height = "150">
        <h3>camp fire</h3>
    </div>

    <div class="box">
        <img src = "images/icon.jpg"   width = "150" height = "150">
        <h3>off road</h3>
    </div>

    <div class="box">
        <img src = "images/icon-6.jpg"   width = "150" height = "150">
        <h3>camping</h3>
    </div>




</div>
</section>


<!-- services section ends -->

<!-- home about section starts -->

<section class = "home-about">
    <div class="image">
        <img src = "images/about-img.jpg">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>In 2004, fellow MIT graduate students Brian Halligan 
        and Dharmesh Shah noticed a major shift in the way people shop and purchase products. 
        Buyers didn’t want to be interrupted by ads, they wanted helpful information. In 2006, they 
        founded HubSpot to help companies use that shift to grow better with inbound marketing.</p>

        <a href = "about.php" class = "btn">read more</a>
    </div>

</section>

<!-- home about section ends -->

<!-- home packags section starts -->

<section class = "home-packages">
    <h1 class = "heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src = "images/img-1.jpg">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Adventure travel is a type of tourism, involving exploration or travel with a certain degree
                 of risk (real or perceived), and which may require special skills and physical exertion.</p>

                 <a href = "book.php" class = "btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src = "images/img-2.jpg">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Adventure travel is a type of tourism, involving exploration or travel with a certain degree
                 of risk (real or perceived), and which may require special skills and physical exertion.</p>

                 <a href = "book.php" class = "btn">book now</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src = "images/img-3.jpg">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Adventure travel is a type of tourism, involving exploration or travel with a certain degree
                 of risk (real or perceived), and which may require special skills and physical exertion.</p>

                 <a href = "book.php" class = "btn">book now</a>
            </div>
        </div>

    </div>

    <div class="load-more"><a href = "package.php" class = "btn">load more</a></div>
</section>

<!-- home packags section ends -->

<!-- home offer section starts -->

<section class = "home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Embark on your dream getaway with our exclusive tour offers, now at up to 50% off! 
        Explore exotic destinations, indulge in cultural delights, and create unforgettable memories
        without breaking the bank.</p>
    </div>
    <a href = "book.php" class = "btn">book now</a>
</section>

<!-- home offer section ends -->

<!-- footer section starts here -->
<section class = "footer">
    <div class = "box-container">

    <div class="box">
        <h3>quick links</h3>
    <a href = "home.php"><i class = "fas fa-angle-right"></i>home</a>
    <a href = "about.php"><i class = "fas fa-angle-right"></i>about</a>
    <a href = "package.php"><i class = "fas fa-angle-right"></i>package</a>
    <a href = "book.php"><i class = "fas fa-angle-right"></i>book</a>
    </div>

    <div class="box">
        <h3>extra links</h3>
        
        <a href = "#"><i class = "fas fa-angle-right"></i> +123-456-7890 </a>
        <a href = "#"><i class = "fas fa-angle-right"></i> +111-222-3333 </a>
        <a href = "#"><i class = "fas fa-angle-right"></i> company@gmail.com</a>
        <a href = "#"><i class = "fas fa-angle-right"></i> mumbai, India - 400104</a>
    </div>

    <div class="box">
        <h3>contct info</h3>
        
        <a href = "#"><i class = "fas fa-angle-phone"></i>ask questions</a>
        <a href = "#"><i class = "fas fa-angle-phone"></i>about us</a>
        <a href = "#"><i class = "fas fa-angle-envelope"></i>privacy policy</a>
        <a href = "#"><i class = "fas fa-angle-map"></i>terms of use</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href = "#"><i class = "fab fa-facebook-f"></i> facebook</a>
        <a href = "#"><i class = "fab fa-twitter"></i> twitter</a>
        <a href = "#"><i class = "fab fa-instagram"></i> instagram</a>
        <a href = "#"><i class = "fab fa-linkedin"></i> linkedin</a>
    </div>

    </div>

    <div class="credit">created by <span>Shraddha Nakum</span> | all rights reserved! </div>
</section>

<!-- footer section ends here -->


   <!-- swiper js link  -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- custom js file link -->
    <script src = "js/script.js" ></script>
</body>
</html>