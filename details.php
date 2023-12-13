<?php
    require_once "db.php";
    require_once "footer.php";
    require_once "navbar.php";
    $id = $_GET["x"];
    // $id = 21;
    $sql = "SELECT * FROM animals WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $status = $row["status"];
    if($status == 0){ 
        $message = "Adopted";
        $colorClass = "red-text";
    }else if($status == 2){ 
        $message = "Requested";
        $colorClass = "red-text";
    } else {
        $message = "Available";
        $colorClass = "green-text";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
        <style>
        body{
            width: 100vw;
            overflow-x: hidden;
            background-image: url(./image/bg.png);
            
            }
            .d-flex{
                gap: 5%;
                margin-top: 5%;
                margin-bottom: 5%;
                margin-left: 3%;
                margin-right: 3%;
            }
            .d-flex img {
                max-width: 100%;
                height: auto;
                background-position: center;
                background-size: cover;
            }

            .green-text {
                color: green;
            }

            .red-text {
                color: red;
            }
            #txSize {
                font-size: larger;
            }


    </style>
</head>
<body>

    <?= $nav ?>
    <br><br>
    <div class="text-center" >
        <h1 id="welcome">Details</h1>
        <hr class="MLLine" style="width:20vw;">
    </div>

    <div class="d-flex flex-row gap-5 flex-wrap justify-content-start align-items-center p-5">
        <div class="w-40"><img src="image/pet_imgs_db/<?= $row["picture"] ?>" width="100%"></div>
        <div class="w-40 ps-0">
            <div class="mb-3"><b id="txSize">Name:</b> <br> <?= $row["name"] ?></div>
            <div class="mb-3"><b id="txSize">Age:</b> <br><?= $row["age"]?></div>
            <div class="mb-3"><b id="txSize">Wight:</b> <br><?= $row["size"]?> Kg</div>
            <div class="mb-3"><b id="txSize">Vaccinated:</b> <br><?= $row["vaccinated"] ?></div>
            <div class="mb-3"><b id="txSize">Breed:</b> <br><?= $row["breed"] ?></div>


            <div >
                <b id="txSize">Status:</b> 
                <span class="<?php echo $colorClass; ?>"> <?php echo $message; ?> </span>
            </div>
        </div>
        <div class="w-100"> <b id="txSize">Description:</b> <br>  <?= $row["description"] ?></div>

    </div>
    <?= $footer?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
