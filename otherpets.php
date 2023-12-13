<?php
    require_once "db.php";
    require_once "navbar.php";
    require_once "footer.php";

    
    $sqlAnimals = "SELECT * FROM animals";
    $resultAnimals = mysqli_query($conn, $sqlAnimals);

    $layout = "";

    if(mysqli_num_rows($resultAnimals) > 0){
        while($rowAnimal = mysqli_fetch_assoc($resultAnimals))
        {
            if($rowAnimal["breed"] == "other"){
                $adoptBtn = "";
                if($rowAnimal["status"] == 0 ||  $rowAnimal["status"] == 2){
                    $adoptBtn = "<button href='adoption form.php?x={$rowAnimal["id"]}' class='btn text-white' disabled id='upBtn'>Take me home</button>";
                }
                else {
                    $adoptBtn = "<button  class='btn text-white' id='upBtn'> <a class='text-decoration-none text-white' href='adoption form.php?x={$rowAnimal["id"]}'>Take me home </a> </button>";
                }
                if(isset($_SESSION["adm"])){
                    $upBtn = "<a href='edit.php?x={$rowAnimal["id"]}' class='btn btn-dark'>Edit</a>";
                }

                $bttn ="
                <div class='buttons text-center'> 
                    <a href='details.php?x={$rowAnimal["id"]}' class='btn btn-dark'>Details</a>
                    {$adoptBtn}
                    {$upBtn}
                </div>";
                $layout .= "<div>
                <div class='card gap-2 mt-5 mb-5 shadow align-items-center' style='width: 17rem;'>
                    <img src='image/pet_imgs_db/{$rowAnimal["picture"]}' class='card-img-top' alt='...' style='width: 100%;'>
                    <div class='card-body '>
                    <h3 class='card-title text-center d-flex align-items-center justify-content-center' style='height: 8vh;' >{$rowAnimal["name"]}</h3>
                    <hr class='TitleHR'>
                    <p class='card-text ps-3 mt-4'><b>Age:</b> <br> {$rowAnimal["age"]} Years</p>
                    <p class='card-text mb-4 ps-3'><b>Size:</b><br> {$rowAnimal["size"]} Kg</p>
                    {$bttn}
                    </div>
                    </div>
              </div>";
            }

        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>petcare</title>
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
        .container h1{
            text-align: center;
            margin-top: 30px;
        }
        #upLine {
            margin-left: 35%;
        }
        #upBtn {
            background-color: #44c4bd;  
        }
        .mybtn{
            width: auto;
            height: auto;
            text-align: center;

        }
        </style>
</head>
<body>
<?= $nav?>
<div>    
    <div class="container">
        <br><br>
        <h1>Available pets</h1>

        <div class="container">
            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-xs-1">
                <?= $layout ?>
            </div>
        </div>
    </div>
</div>


<?= $footer ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>