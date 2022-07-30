<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

</head>
<body>
    <?php include "header.php" ?>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="plumbing.png" alt="">
        <h3 class="name">Johnny</h3>
        <p class="post">Plumber</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">portfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Johnny</span></h1>
    <p>I am a certified plumber by profession with over 10 years of experience. 
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> Name : </span>Johnny Bravo</h3>
        <h3> <span> Email : </span>johnnybravo@gmail.com</h3>
        <h3> <span> Phone no : </span>+2547118761</h3>
        <h3> <span> Profession : </span>Plumber</h3>
        <h3> <span> Address : </span>Nairobi</h3>
        <h3> <span> Work Area : </span>Madaraka</h3>
        <a href="#"><button class="btn"> Download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>5+</span>
            <h3>years of experience</h3>
        </div>

        <div class="box">
            <span>100+</span>
            <h3>works completed</h3>
        </div>

        <div class="box">
            <span>200+</span>
            <h3>happy clients</h3>
        </div>

        <div class="box">
            <span>4</span>
            <h3>star rated</h3>
        </div>

    </div>

</div>

</section>

<!-- about section ends -->

<!-- education section starts  -->

<section class="education" id="education">

<h1 class="heading"> my <span>education</span> </h1>

<div class="box-container">

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2016</span>
        <h3>Plumbing Level 1 – 3</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2017</span>
        <h3>Plumbing and Metal work</h3>
        <p>Received my Certificate in Plumbing and Pipe Fitting from Kenya Institute of Highways & Building Technology in</p>
    </div>

    <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018</span>
        <h3>Plumbing and Pipe Fitting</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quos alias praesentium. Id autem provident laborum quae, distinctio eaque temporibus!</p>
    </div>

</div>

</section>

<!-- education section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="plumbing.png" alt="">
    </div>

    <div class="box">
        <img src="handyjob.jpg" alt="">
    </div>

    <div class="box">
        <img src="otherServices.jpeg" alt="">
    </div>

    <div class="box">
        <img src="electrical.jpeg" alt="">
    </div>

    <div class="box">
        <img src="handyjob.jpg" alt="">
    </div>

    <div class="box">
        <img src="otherServices.jpeg" alt="">
    </div>

</div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> <a href="mailto:vocational.ws@gmail.com">vocational.ws@gmail.com</a></h3>
            <h3> <i class="fas fa-phone"></i> <a href="tel:+2547118761">+2547118761</a></h3>
            <h3> <i class="fas fa-map-marker-alt"></i><address>Nairobi, Kenya - 00100. </address></h3>
        </div>

    </div>

    <form action="contact.php">

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<!-- contact section ends -->

<!-- scroll top button  -->

<a href="#home" class="top">
    <img src="images/scroll-top-img.png" alt="">
</a>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="portfolioScript.js"></script>


</body>
</html>