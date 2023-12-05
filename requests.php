<?php 
    require_once "footer.php";
    require_once "navbar.php";
    require_once "db.php";
    if(!isset($_SESSION["user"])){
        header("Location: index.php");
    }
    $id = $_GET["x"];

    $sql = "SELECT * FROM pet_adoptions WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $layout = "";
    $seen = "";
    $sqlA = "SELECT * FROM animals WHERE id = {$row['animal_id_fk']}";
    $resultA = mysqli_query($conn, $sqlA);
    $rowA = mysqli_fetch_assoc($resultA);
    $sqlU = "SELECT * FROM user WHERE id = {$row['user_id_fk']}";
    $resultU = mysqli_query($conn, $sqlU);
    $rowU = mysqli_fetch_assoc($resultU);

    $edit = "UPDATE `pet_adoptions` SET `seen` = '1' WHERE id = $id";
    if(mysqli_query($conn, $edit)){
    }

    $seen = "";
    if($row['seen'] == 0){
        $seen = "<b class='text-danger'> ! </b>";
    }
?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport"  content="width=device-width, initial-scale=1.0" >
    <title>Notifications</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">    <style>
        body{
        width: 100vw;
        overflow-x: hidden;
        background-image: url(./image/bg.png);
        }
    </style>
</head>


<body>
   <?= $nav ?>
   <br><br>

    <div class="container mt-5">
        <div class="myRequest">
            <div class="p-3 bg-light text-dark">
                <b>Date:</b>
            </div>
            <div class="p-3 mb-3 bg-body-secondary">
                <?= $row['request_date'] ?>
            </div>
        </div>
        <div class="myRequest">
            <div class="p-3 bg-light text-dark">
                <b>Animal:</b>
            </div>
            <div class="p-3 mb-3 bg-body-secondary">
                <?= $rowA['name'] ?>
            </div>
        </div>
        <div class="myRequest">
            <div class="p-3 bg-light text-dark">
                <b>Adopter:</b>
            </div>
            <div class="p-3 mb-3 bg-body-secondary">
                <?= $rowU['username']?>
            </div>
        </div>
        <div class="myRequest">
            <div class="p-3 bg-light text-dark">
                <b>Living Condition:</b>
            </div>
            <div class="p-3 mb-3 bg-body-secondary">
            <?= $row['living_condition'] ?>
            </div>
        </div>
        <div class="myRequest">
            <div class="p-3 bg-light text-dark">
                <b>Previous Experience:</b>
            </div>
            <div class="p-3 mb-3 bg-body-secondary">
            <?= $row['previous_experience'] ?>
            </div>
        </div>
        <div class="myRequest">
            <div class="p-3 bg-light text-dark">
                <b>Adoption Reason:</b>
            </div>
            <div class="p-3 mb-3 bg-body-secondary">
            <?= $row['adoption_reason'] ?>
            </div>
        </div>
        <a href='acceptRequest.php?x=<?= $row['id'] ?>' class='btn btn-success'>Accept</a>
        <a href='rejectRequest.php?x=<?= $row['id'] ?>' class='btn btn-danger'>Reject</a>
    </div>
    
    <?= $footer ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>