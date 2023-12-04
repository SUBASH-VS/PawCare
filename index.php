<?php
  require_once "navbar.php";
  require_once("footer.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAW CARE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <style>
      body{
      width: 100vw;
      overflow-x: hidden;
      background-image: url(./image/bg.png);
      
    }
    </style>
</head>
<body>
  <?= $nav?>

 
<div class="container1">
    <!-- <img  class="bannerlogo img-fluid" src="./image/watermark.svg" alt="bannerloigo"> -->
</div>


<div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <!-- <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"></use></svg> -->
    <h1 class="text-body-emphasis">PETCARE</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      Helping Finding Home For Every Pet
    </p>
    <div class="d-inline-flex gap-2 mb-5">
      <a href="faq.php" class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill contentbutton" type="button">
        FAQ
        <!-- <svg class="bi ms-2" width="24" height="24"><use xlink:href="#arrow-right-short"></use></svg> -->
      </a>
      <a href="library.php" class="btn btn-outline-secondary btn-lg px-4 rounded-pill contentbutton" type="button">
        Library
      </a>
    </div>
  </div>
</div>

   <div class="container-gallery">
    <div id="demo" class="carousel slide carousel-content" data-bs-ride="carousel">

      <!-- Indicators/dots -->
    
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="img gal-one"></div>
        </div>
        <div class="carousel-item">
          <div class="img gal-two"></div>
        </div>
        <div class="carousel-item">
          <div class="img gal-three"></div>

        </div>
        <div class="carousel-item">
          <div class="img gal-four"></div>
        </div>
        
        <div class="carousel-item">
          <div class="img gal-five"></div>
        </div>
        
        <div class="carousel-item">
          <div class="img gal-six"></div>
        </div>
        
        <div class="carousel-item">
          <div class="img gal-seven"></div>
        </div>

        <div class="carousel-item">
          <div class="img gal-eight"></div>
        </div>

    
      </div>
    
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" ></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    <!-- <p class="gallery-title">gallery</p> -->

   </div>


  
 <?= $footer ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>