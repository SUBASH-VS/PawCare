<?php
  require_once "navbar.php";
  require_once "footer.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adoption</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

<div class="adoptionpic">
    <!-- <img  class="bannerlogo img-fluid" src="./image/watermark.svg" alt="bannerloigo"> -->

</div>
<div class="adoptcard_collection">
    <a  class=adopt_link href="dog.php"><div class="adoption_card">
        <i class='bx bxs-dog adoptlogo'></i>
        <br>
        <p class="adopt_text"><b>DOG</b></p>
    </div> </a>
   <a class=adopt_link href="cat.php"> <div class="adoption_card">
        <i class='bx bxs-cat adoptlogo'></i>
        <br>
        <p class="adopt_text"><b>CAT</b></p>
    </div></a>
    <a class=adopt_link href="otherpets.php"><div class="adoption_card">
        <span class="material-symbols-outlined adoptlogo">pets</span>
        <br>
        <p class="adopt_text"><b>OTHERS</b></p> 
    </div> </a>
</div>

<div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
    <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"></use></svg>
    <h1 class="text-body-emphasis">Adopt A Friend</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted adoptpara" style="color: #9f5311;">
      At PetCare, we believe that every pet deserves a loving and forever home. Our adoption program is dedicated to connecting animals in need with compassionate individuals and families looking to provide a secure and caring environment. When you choose to adopt a pet through us, you're not just adding a new member to your family; you're giving a second chance to a furry friend who needs it the most.

      Our adoption process is designed to ensure a perfect match between you and your future pet. We carefully assess each animal's needs, behavior, and temperament to help you find the perfect companion. Whether you're interested in a playful kitten, a loyal canine friend, or a more exotic addition to your family, PetCare has a variety of animals awaiting loving homes. Browse our adoptable pets today and start your journey to enrich your life by giving a pet a loving home.
    </p>
  </div>
</div>

  

<?= $footer?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

