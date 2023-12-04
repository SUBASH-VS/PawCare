<?php
    require_once "footer.php";
    require_once "navbar.php";
    require_once "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css"> 
    <style>
        body{
        width: 100vw;
        overflow-x: hidden;
        background-image: url(./image/bg.png);
        
        }
        .MLLine {
            display: inline-flex;
            justify-self: center;
            align-self: center;
            color: #44c4bd;
            opacity: 100%;
        }
        #welcome {
        font-family: "marvin-round", sans-serif;
        font-weight: 600;
        font-style: normal;
        font-size: 2.5vw;
        }
    </style>

</head>
<body>
   <?= $nav ?>
   <br>


    <div class="text-center">
        <h2 class="text-center mt-5" id="welcome">FAQs</h2>
        <hr class="MLLine" style="width:20vw;">
    </div>

    <div class="container d-flex flex-row justify-content-evenly flex-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap flex-xl-nowrap flex-xxl-nowrap gap-5">
        <div class="mt-5 ">
            <div class="mb-3 mt-5">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1" >
                    What is Pawcare? 
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq1">
                    <div class="card card-body faqCard shadow"  style="width: 30vw;">
                        The goal of Pawcare is to connect animal shelters with potential adopters and help our pet friends to find a new home. 
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq1" >
                    How does an adoption process work? 
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq2">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        Our pet adoption platform aims to connect animal shelters with potential pet adopters seamlessly. The process begins when you find a furry friend you'd like to welcome into your home. Simply click on the "Take Me Home" button on the pet's profile to initiate the adoption process.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq1" >
                    What happens after I click the "Take Me Home" button? 
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq3">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        After clicking the button, you'll be guided to fill out an adoption request form. This form helps us gather information about you and your living situation to ensure that you and the pet are a good match. The information you provide helps the animal shelters make informed decisions.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq1" >
                    What information is required in the adoption request form?
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq4">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        The adoption request form will ask you for details about your living situation, experience with pets, daily routine, and your reasons for wanting to adopt. This information helps the shelters assess if the pet's needs align with your lifestyle.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq1" >
                    What happens once I submit the adoption request?
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq5">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        Once you submit the adoption request, the animal shelter will review your information and application. They'll consider factors like the pet's specific needs and your ability to provide a loving and suitable home.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq1" >
                    How long does it take to hear back from the shelter?
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq6">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        The response time may vary depending on the shelter's workload and the number of applications they receive. Typically, shelters aim to respond within a few business days. Your patience during this process is appreciated.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false" aria-controls="faq1" >
                    What if my adoption request is accepted?
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq7">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        Congratulations! If your adoption request is accepted, the shelter will contact you with further instructions. This may involve scheduling a meet-and-greet with the pet or discussing adoption logistics.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false" aria-controls="faq1" >
                    Can my adoption request be declined?
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq8">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        Yes, there might be instances where your adoption request is declined. Shelters prioritize the well-being of the animals and strive to ensure a suitable match. If your request is declined, it's not a reflection on you personally but rather a decision made to ensure the best outcome for the pet.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false" aria-controls="faq1" >
                    What if I'm not selected for adoption?
                    <img src="image/arrow_down.png" class="ms-3" style="height: 2vh;">
                </button>
                <div class="collapse" id="faq9">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        If your adoption request is not selected, don't be disheartened. Our platform hosts a variety of wonderful pets, and there might be another furry companion that's the perfect fit for your home. You're encouraged to explore other pet profiles and submit adoption requests for those that match your lifestyle.
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary p-3 text-start d-flex justify-content-between mb-3 shadow" style="width: 30vw;" type="button" data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false" aria-controls="faq1">
                    Can I visit the shelter in person?
                    <img src="image/arrow_down.png" class="ms-3 arrow" style="height: 2vh; order: 2;">
                </button>  
                <div class="collapse" id="faq10">
                    <div class="card card-body faqCard shadow" style="width: 30vw;">
                        Many shelters do offer in-person visits, but availability might vary. We recommend checking the specific shelter's policies or contacting them directly to inquire about visiting arrangements.
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="card card-body mt-5 rounded-4 faqCard shadow" style="width: 25vw;">
                <div class="card-title ms-3">About us</div>
                <div class="card-body">
                    <p>At Pawcare, our purpose is crystal clear: we are a passionate team of animal-loving Web Developers and Designers who have come together to create a meaningful bridge between animal shelters and those seeking to open their hearts and homes to a new furry friend.</p>
                    <p>If you want to know more about us click <a href="about.php">here</a>.</p>
                </div>
            </div>
        </div>
    </div>


    <?=$footer ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> 