<?php
    require_once "footer.php";
    require_once "navbar.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
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
        <h2 class="text-center mt-5" id="welcome">Resource Library</h2>
        <hr class="MLLine" style="width:20vw;">
    </div>

    <div class="container-fluid pt-5">
            <div class="container py-5">
                <div class="row pb-3">
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center  justify-content-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="image/EmergencyDog.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">The emergency checklist all pet parents need</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                            <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" href="emergencyChecklist.php">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow">
                            <p> <img src="image/CatnipCat.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">How catnip affects cats</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                            <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" href="catnip.php">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="image/BloatingDog.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">Bloating in dogs</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                            <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" href="bloating.php">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="image/RingwormsDog.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">Ringworm in dogs</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                            <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" href="ringworm.php">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow" >
                            <p> <img src="image/TailwagCat.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">What do cats' tail wags mean?</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                            <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" href="tailWag.php">Read More</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5 h-100 shadow">
                            <p> <img src="image/SeparationA.png" alt="" class="img-fluid"> </p>
                            <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                            <h3 class="mb-3">Does your pet suffer from separation anxiety?</h3>
                            <!-- <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est magna diam eos, rebum sit vero stet ipsum justo</p> -->
                            <span class="mt-auto">
                            <a class="text-uppercase font-weight-bold mt-auto btn btn-secondary" href="separationA.php">Read More</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <?=$footer ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>