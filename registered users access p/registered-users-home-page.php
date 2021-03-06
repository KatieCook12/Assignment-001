<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="..\..\css\registered users access pages\registered-users-home-page.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<! -- adds navigation bar -- >
<nav>
    <div class="logo">
        <a href="registered-users-home-page.html"><img src= "..\..\assets\gloucestershire-constabulary-white-logo.png" width="250" height="83.333" alt="Gloucestershire Constabulary Logo"/></a>
    </div>
    <ul class="nav-links">
        <li><a href="#">Past Reports</a></li>
        <li><a href="#">Register Bike</a></li>
        <li><a href="#">Report Bike</a></li>
        <li><a href="..\main pages\home-page.html">Log Out</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div> 
</nav>

<! -- creates navigation bar background, so the navigation bar doesn't overlap page contents-- >
<div class="navigation-bar-placeholder"></div>

<! -- creates a banner -- >
<a href="registered-users-report-bicycle-page.html">
    <span class="link"></span>
    <div class = "hero-image">
        <div class = "header-contents">
            <h1> Stolen Bicycle? </h1>
            <p>Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. 
                Nisl condimentum id venenatis a condimentum. </p>
            <button> Report Online </button>
        </div> 
    </div></a>

<! -- creates about us section -- >
    <section class = "about">
        <div class ="main">
            <img src="..\..\assets\happy-police-men-talking-and-smiling.jpg"> 
            <div class="about-text"> 
                <h1>About Us</h1>
                <p>Lorem ipsum dolor sit amet, consectetur 
                    adipiscing elit, sed do eiusmod tempor 
                    incididunt ut labore et dolore magna aliqua. 
                    Nisl condimentum id venenatis a condimentum. 
                    Mauris commodo quis imperdiet massa. Neque viverra 
                    justo nec ultrices dui sapien eget mi proin. 
                    Tellus mauris a diam maecenas sed. Diam vulputate 
                    ut pharetra sit amet aliquam id. Ac tortor 
                    dignissim convallis aenean. Pretium viverra 
                    suspendisse potenti nullam ac. Sodales ut etiam 
                    sit amet nisl purus. Id faucibus nisl tincidunt eget.</p>
            </div>
        </div> 
    </section> 

<! -- creates footer -- >
    <section class = "footer">
        <div class="social">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>

        <ul class="list">
            <li><a href="registered-users-home-page.html">Home</a></li>
            <li><a href="registered-users-contact-us-page.html">Contact Us</a></li>
            <li><a href="registered-users-cookies-page.html">Cookies</a></li>
        </ul>
        <p class="copyright"> @ 2022 </p>
    </section>

<! -- creates the scroll to the top button --> 
<button id = "btnScrollToTop">
    <i class = "material-icons">arrow_upward</i>
</button>

<! -- links javascript file -- > 
<script src="..\..\javascript\javascript.js"></script>

</body>
</html>

