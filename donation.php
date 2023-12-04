<?php
    require_once "db.php";
    require_once "file_uplode.php";
    require_once "navbar.php";
    require_once "footer.php";
    
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $sql ="";
        $name = $_POST["petName"];
        $description = $_POST["petDescription"];
        $size = $_POST["size"];
        $age = $_POST["petAge"];
        $vaccinated = $_POST["vaccinated"];
        $breed = $_POST["petType"];
        $picture = fileUpload($_FILES["picture"], "animal");
        $donee_name = $_POST["donorName"];
        $donee_email = $_POST["donorEmail"];
        $phone = $_POST["contactNumber"];
        $gender = $_POST["petGender"];
        $trained = $_POST["trained"];
        $state = $_POST["state"];
        $city = $_POST["city"];

        $status = 1;
        $donee_id = 9;

        echo "$gender";
        

        $sql = "INSERT INTO `animals`(`name`, `picture`, `description`, `size`, `age`, `gender`, `vaccinated`, `trained`, `breed`, `status`, `donor_name`, `donor_email`, `donor_phone`, `state`, `city`,`donee_id_fk`) VALUES ('$name','{$picture[0]}','$description','$size','$age', '$gender', '$vaccinated', '$trained', '$breed','$status','$donee_name','$donee_email', '$phone', '$state', '$city','$donee_id')";
        
        mysqli_query($conn,$sql);
        echo " New entry has been created.";
        header("location: index.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Pet Adoption</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">
    <style>
        body{
        width: 100vw;
        overflow-x: hidden;
        background-image: url(./image/bg.png);
        
        }
      .form_container {
            max-width: 80%;
            margin: 20px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .label_classes {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius:10px;
            cursor:pointer;
        }

        input, select, textarea :hover{
            border: 1px solid #9f5311;
        }


        .button1 {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

    </style>
</head>
<body> 
<div>
    <?= $nav?>
</div>
        
        <br><br><br>


<div class="container">
<div class="form_container">
    <h1 style="text-align: center; color: #4c2a2a;">DONATION PAGE</h1><br>
    <p>Thank you for considering adopting a furry friend!</p><br>

    <form method="POST" enctype="multipart/form-data">
        <label class="label_classes" for="donorName">Donor Name:</label>
        <input type="text" id="donorName" name="donorName" required>

        <label class="label_classes" for="donorEmail">Donor Email:</label>
        <input type="email" id="donorEmail" name="donorEmail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">

        <label class="label_classes" for="contactNumber">Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" required pattern="[0-9]{10}">

        <label class="label_classes" for="petName">Pet Name:</label>
        <input type="text" id="petName" name="petName" required>

        <label class="label_classes" for="petType">Type of Pet:</label>
        <select id="petType" name="petType" required>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="other">Other</option>
        </select>

        <!-- <label class="label_classes" for="petBreed">Pet Breed:</label>
        <input type="text" id="petBreed" name="petBreed" required> -->
        
        <label class="label_classes" for="size">size:</label>
        <input type="number" id="size" name="size" required>

        <label class="label_classes" for="petAge">Pet Age:</label>
        <input type="number" id="petAge" name="petAge" min="0" required>

        <label class="label_classes" for="petGender">Pet Gender:</label>
        <select id="petGender" name="petGender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <label class="label_classes" for="vaccinated">Vaccinated:</label>
        <select id="vaccinated" name="vaccinated" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label class="label_classes" for="trained">Trained:</label>
        <select id="trained" name="trained" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label for="state">State:</label>
        <select id="state" name="state" required>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Assam">Assam</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Andra Pradhesh">Andra Pradhesh</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
        </select>

        <label for="city">City:</label>
        <select id="city" name="city" required>
            <option value="Coidbatore">Coimbatore</option>
            <option value="Selam">Selam</option>
            <option value="Villupuran">Villupuran</option>
            <option value="Chennai">Chennai</option>
            <option value="Madurai">Madurai</option>
            <option value="Vellore">Vellore</option>
            <option value="Tirupur">Tirupur</option>
            <option value="Thiruvallur">Thiruvallur</option>
            <option value="Erode">Erode</option>
            <option value="Kanchipuram">Kanchipuram</option>
        </select>

        <label class="label_classes" for="petDescription">Pet Description:</label>
        <textarea id="petDescription" name="petDescription" rows="4" required></textarea>

        <label class="label_classes" for="picture">Upload Pet Image:</label>
        <input type="file" id="picture" name="picture" accept="image/*" required>

        <br> <br>

        <button class="button1" type="submit">Donate Now</button>
    </form>
</div>
</div>

<?= $footer ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>