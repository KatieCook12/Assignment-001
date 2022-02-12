<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    <link rel="stylesheet" href="..\..\css\main pages\public-login-page.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<! -- adds navigation bar -- >
<nav>
    <div class="logo">
        <a href="home-page.html"><img src= "..\..\assets\gloucestershire-constabulary-white-logo.png" width="250" height="83.333" alt="Gloucestershire Constabulary Logo"/></a>
    </div>
    <ul class="nav-links">
        <li><a href="police-login-page.html">Police Login</a></li>
        <li><a href="public-login-page.php">Public Login</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div> 
</nav>

<! -- creates navigation bar background, so the navigation bar doesn't overlap page contents-- >
<div class="navigation-bar-placeholder"></div>

<! -- creates login form content -- >
<section class = "login-form-section">
    <?php include('errors.php'); ?>
    <div class="login-form">
        <h1>Login Form</h1>
        <form method="post" action="login.php">
            <p>Email :</p>
            <input type = "email" name="email" >
            <p>Password :</p>
            <input type = "password" name="password" > 
            <button type="submit" class="btn" name="login_user">Login</button>
            <p>Don't have an account? <a href="registration-page.php">Create an account</a></p>
        </form>
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
            <li><a href="home-page.html">Home</a></li>
            <li><a href="contact-us-page.html">Contact Us</a></li>
            <li><a href="cookies-page.html">Cookies</a></li>
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