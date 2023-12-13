
<?php
    
    require_once "../db.php";

    if((isset($_SESSION["adm"])) || isset($_SESSION["user"])){
        header("Location: ../index.php");
    }
    session_start();

    $email = $passError = $emailError = "";
    $error = false;

    function cleanInputs($input){
        $data = trim($input); 
        $data = strip_tags($data); 
        $data = htmlspecialchars($data); 
 
         return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = cleanInputs($_POST["email"]);
        $password = $_POST["password"];

        if(!$error){
            $password = hash("sha256", $password);

            $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            
            if(mysqli_num_rows($result) == 1){ 
                if($row["status"] == "user"){
                    $_SESSION["user"] = $row["id"];
                    header("Location: ../index.php");
                } 
                else {
                    $_SESSION["adm"] = $row["id"];
                    header("Location: ../index.php");
                }
            }

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>sign in </title>
    <link href="stylesheet.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<div class="wrapper">
        <form method = "POST">
            <h1>SIGN IN</h1>
    <div class="input-box">

     <input type="text" name ="email" placeholder="username" required  >
     <i class='bx bxs-user'></i>
    </div>
    <div class="input-box">
        <input type="password" name ="password" placeholder="password" required >
        <i class='bx bxs-lock-alt' ></i>
    </div>

    <div class="remember-forgot">
        <label ><input type="checkbox">Remember me</label>
        <a href="../index.php"> return Home</a>
    </div>

     
     <button type="submit" class="btn"> SIGN IN  </button>
    

    <div class="register-link">
        <p>Don't have an account? <a href="../sign up/sign up.php"> register</a></p>
     </div>
</div>

</form>
    
    
</body>
</html>