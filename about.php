<?php
    require_once "footer.php";
    require_once "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Paw Care</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">


    <style>
        body{
            width: 100vw;
            overflow-x: hidden;
            background-image: url(./image/bg.png);
            
        }
    .about_container {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    h1 {
        color: #4CAF50;
        text-align: center;
    }

    h2 {
        color: #4CAF50;
        margin-bottom: 10px;
    }

    p {
        line-height: 1.6;
        margin-bottom: 16px;
    }

    ul {
        margin-bottom: 16px;
        padding-left: 20px;
    }

    .bullet {
        list-style-type: disc;
        margin-bottom: 8px;
    }

    @media only screen and (max-width: 600px) {
        .container {
            width: 90%;
        }
    }
    </style>
</head>
<body>

        <?= $nav ?>
        
    <br><br><br><br>

<div class="about_container">
    <h1>About Paw Care</h1>

    <p>"Paw Care" is a web-based adoption platform dedicated to connecting potential pet adopters with animals in need of loving homes. Our mission is to facilitate easier pet adoption, provide valuable information about pet care, and promote responsible pet ownership.</p>

    <h2>Key Features:</h2>
    <ul>
        <li class="bullet">User Registration: Register to access a list of animals available for adoption.</li>
        <li class="bullet">Animal Listings: Comprehensive details about each adoptable animal, including age, gender, breed, and description.</li>
        <li class="bullet">User Authorization: Administrators can manage user roles for adding, editing, updating, and deleting information.</li>
        <li class="bullet">Promoting Responsible Pet Ownership: Educating users about responsible pet ownership and providing essential pet care information.</li>
        <li class="bullet">Search Functionality: Users can easily search for a pet partner based on their preferences.</li>
        <li class="bullet">Public Awareness: Highlighting the availability of adoptable pets to reduce euthanasia and connect pets with caring families.</li>
        <li class="bullet">Family Integration: Elevating the status of pets to that of family members.</li>
    </ul>

    <h2>Goals:</h2>
    <ul>
        <li class="bullet">Easier Pet Adoption: Simplify the pet adoption process for potential adopters.</li>
        <li class="bullet">Educational Resource: Serve as an educational resource on responsible pet ownership.</li>
        <li class="bullet">Community Building: Foster a community of pet lovers and responsible pet owners.</li>
        <li class="bullet">Reducing Euthanasia: Contribute to the reduction of euthanasia by promoting pet adoption.</li>
        <li class="bullet">User Empowerment: Empower administrators and authorized users to manage and update information.</li>
    </ul>

    <p>"Paw Care" envisions a world where pet adoption is accessible, educational resources are readily available, and pets are cherished as integral members of families. Through its features and goals, the platform aims to make a positive impact on the lives of both pets and their adopters.</p>
</div>


<?= $footer?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
