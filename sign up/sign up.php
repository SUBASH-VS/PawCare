<?php
    require_once "../db.php";
    if(isset($_SESSION["adm"]) || isset($_SESSION["user"]) || isset($_SESSION["shelter"])){
        header("Location: index.php");
    }

    $error = false;

    $username = $email = $password = "";
    function cleanInput($param){
        $data = trim($param);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $username = cleanInput($_POST["username"]);
        $email = cleanInput($_POST["email"]);
        $password = $_POST["password"];

        $password = hash("sha256", $password);
        $sql = "INSERT INTO `user`( `username`, `email`, `password`) VALUES ('$username','$email','$password') ";

        if(mysqli_query($conn, $sql)){
                header("refresh: 1; url = ../sign in/sign in.php");
            } else  {
                    echo   "<div class='alert alert-danger'>
                        <p>Oops! Something went wrong.</p>
                        </div>" ;
                    header("refresh: 1;url = ../sign up/sign up.php");
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
    <form method="POST"autocomplete="off" enctype="multipart/form-data">
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
                <input type="text" placeholder="confirm password" required >
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