<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />

    
    <link rel="stylesheet" href="css\stylesheet.css" />
    <link rel="stylesheet" href="css\nav.css"/>
  
    <title>Home Page</title>
    <link rel="stylesheet" href="">
        <link rel="stylesheet" type="text/css" href="">
        <link rel="stylesheet" type="text/css" href="">

  <!-- Navbar -->
    <?php
     
     include 'navbar.php';
   ?>
     
  </head>
  <body>

  <!-- Container -->
   

   <main class="container">
        <section class="hero__container">
          <div class="hero__image__container">
            <img class="hero__image" src="img\bank_PNG15.png" alt="hero image" />
          </div>
          <div class="hero__description">
            <h1 class="hero__text">
              Welcome To The Sparks </h1> 
            <h1 class="hero__text1">Foundation Bank</h1>
          </div>
        </section>
        <section class="hero2_container">
          <div class="hero2_container_text">
            <p class="hero2_text">Easiest Way To Transfer Money!!!</p>
            <a href="viewcustomers.php"><button class="hero2_button">Let's Get Started!!!</button></a>
</div>
</section>

<!-- Footer -->
<?php
   include'footer.php'
?>
           
</body>
</html>