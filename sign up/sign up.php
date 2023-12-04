
<?php

    session_start();
    include("../db.php");

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Collect form data
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Hash the password (make sure to use a secure hashing algorithm)
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert user data into the database
        

        if (!empty($email) && !empty($password) && !is_numeric($email)) {
            
            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            
            mysqli_query($conn,$sql);

            header("Location: index.php");
        }
        else {
            echo "<script type = 'text/javascript'> alert('Try again!...')</script>";
            header("Location: sign up.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>sign up </title>
    <link rel="style_sheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="stylesheet.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
        <form method="POST">
            <h1>sign up</h1>
    <div class="input-box">

     <input type="text" name = "username" placeholder="username" required  >
     <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
        <input type="email" name = "email" placeholder="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
        <i class='bx bxs-envelope'></i>
    </div>
    <div class="input-box">
        <input type="password" name = "password"placeholder="password" required >
        <i class='bx bxs-lock-open' ></i>
    </div>
    <div class="input-box">
        <input type=" confirm password" placeholder="confirm password" required >
        <i class='bx bxs-lock' ></i>
    </div>
<button type="submit" class="btn">Register</button>

    <div class="acc-link">
        <p>Already have on Account &nbsp;<a href="../sign in/sign in.php"> Sign in</a></p>
     </div>
</div>

</form>
    
    
</body>
</html>