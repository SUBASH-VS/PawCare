<?php
    require_once "navbar.php";
    require_once "footer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style.css">

    <style>
        body{
            width: 100vw;
            overflow-x: hidden;
            background-image: url(./image/bg.png);
            
            }
        .container2 {
            max-width: 80%;
            margin: 20px auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border-radius: 10px;
        }

        input, select, textarea :hover{
            border: 3px solid #4c2a2a;
        }


        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        @media only screen and (max-width: 800px) {
            .container2 {
                width: 90%;
            }
        }
    </style>
</head>
<body>
        <?= $nav?>

        <br><br>

<div class="container">
    <div class="container2"> 
    <h1 style="text-align: center; color: #4c2a2a;">PET ADOPTION FORM</h1>
    <br>
    <p>Thank you for considering adopting a furry friend!</p>
    <br>

    <form action="process_adoption.php" method="post">
        <label for="adopterName">Adopter's Name:</label>
        <input type="text" id="adopterName" name="adopterName" required>

        <label for="adopterEmail">Adopter's Email:</label>
        <input type="email" id="adopterEmail" name="adopterEmail" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">

        <label for="contactNumber">Contact Number:</label>
        <input type="tel" id="contactNumber" name="contactNumber" required pattern="[0-9]{10}">

        <label for="ownPets">Do you own any pets?</label>
        <select id="ownPets" name="ownPets" required>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <div id="petTypeSection" style="display: none;">
            <label for="petType">Type of Pet:</label>
            <input type="text" id="petType" name="petType">
        </div>
        

        <label for="state">State:</label>
        <select id="state" name="state" required>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Assam">Assam</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Punjab">Punjab</option>
            <option value="Rajasthan">Rajasthan</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
        </select>

        <label for="city">City:</label>
        <select id="city" name="city" required>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Chennai">Chennai</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Pune">Pune</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Lucknow">Lucknow</option>
        </select>
        <br><br>

        <button type="submit">Adoption Now</button>
    </form>
</div>
</div>
<script>
    document.getElementById('ownPets').addEventListener('change', function () {
        var petTypeSection = document.getElementById('petTypeSection');
        petTypeSection.style.display = (this.value === 'yes') ? 'block' : 'none';
    });
</script>
<div>
<?= $footer?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
