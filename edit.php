<?php
    require_once "footer.php";
    require_once "navbar.php";
    require_once "db.php";
    
    if(!isset($_SESSION["adm"])){
        header("Location: sign in/sing in.php");
    }


 

    $id = $_GET["x"];
    // $id = 21;
    $sql = "SELECT * FROM animals WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST["update"])){
        $name = $_POST["name"];
        $address = $_POST["address"];
        $description = $_POST["description"];
        $size = $_POST["size"];
        $age = $_POST["age"];
        $vaccinated = $_POST["vaccinated"];
        $breed = $_POST["breed"];
        $status = $_POST["status"];
        
        $sql = "UPDATE `animals` SET `name` = '$name', `city`= '$address', `description`='$description', `size`='$size', `age`='$age', `vaccinated`='$vaccinated', `breed`='$breed', `status`='$status'  WHERE id = $id";
        
        if(mysqli_query($conn, $sql)){
            echo "<div class='alert alert-success' role='alert'>
                Entry has been updated.
                </div>";
                header("refresh: 1; url = index.php");
        }else {
            echo "<div class='alert alert-danger' role='alert'>
                Oops! Something went wrong.
                </div>";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?= $nav ?>
    <br><br>
    <div class="text-center mt-5 mb-5">
        <h2 class="text-center " id="welcome">Edit Entry:</h2>
        <hr class="MLLine" style="width:20vw;">
    </div>
    <div class="container mt-5">
       <form method="POST" enctype="multipart/form-data"> 
           <div class="mb-4 mt-5">
               <label for="name" class= "form-label">Name: </label>
               <input  type="text" class="form-control" id="name" aria-describedby="name" name="name" value="<?= $row["name"] ?>">
            </div>
            <div class="mb-4">
                <label for="address" class="form-label">Address:</label>
                <input type="text" class="form-control"  id="address"  aria-describedby="address"  name="address" value="<?= $row["city"] ?>">
            </div>
            <div class="mb-4">
                <label for="description" class="form-label">Description:</label>
                <textarea type="text" style="height: 20vh;" class="form-control"  id="description"  aria-describedby="description"  name="description"><?= $row['description']?></textarea>
            </div>
            <div class="mb-4">
                <label for="size" class="form-label">Size:</label>
                <input type="text" class="form-control"  id="size"  aria-describedby="size"  name="size" value="<?= $row["size"] ?>">
            </div>
            <div class="mb-4">
                <label for="age" class="form-label">Age:</label>
                <input type="text" class="form-control"  id="age"  aria-describedby="age"  name="age" value="<?= $row["age"] ?>">
            </div>
            <div class="mb-4">
                <label for="vaccinated" class="form-label">Vaccinated:</label>
                <select class="form-select form-select mb-3" aria-label="vaccinated" name="vaccinated" id="vaccinated" >
                    <option selected value="Yes">Yes</option>
                    <option value="No">No</option>
                </select> 
            </div>
            <div class="mb-4">
                <label for="breed" class="form-label">Breed:</label>
                <select class="form-select form-select mb-3" aria-label="breed" name="breed" id="breed" >
                    <option selected value="cat">Cat</option>
                    <option value="dog">Dog</option>
                    <option value="other">Other</option>
                </select> 
            </div>
            <div class="mb-4">
                <label for="status" class="form-label">Status:</label>
                <select class="form-select form-select mb-3" aria-label="status" name="status" id="status" >
                    <option selected value="1">Available</option>
                    <option value="0">Adopted</option>
                </select> 
            </div>
            <button name="update" type="submit" class="btn  btn-dark mb-5" id="upBtn">Update entry</button>
            <a href="index.php" class="btn btn-dark mb-5">Back to Admin</a>
        </form>
    </div>
    <?= $footer ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>