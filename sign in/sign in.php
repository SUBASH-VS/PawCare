

<?php
    session_start();
    include("../db.php");
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        // Collect form data
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password) && !is_numeric($email)) {
            $sql = "SELECT * FROM user WHERE email = '$email' limit 1";
            $result = mysqli_query($conn, $sql);
            
            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location: ..\index.php");
                        die;
                    }
                }
            }
            echo "<script type = 'text/javascript'> alert('Wrong email id or Password')</script>";
        }
        else
        {
            echo "<script type = 'text/javascript'> alert('Wrong email id or Password')</script>";
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
        <a href="#"> forgot password?</a>
    </div>

     
     <button type="submit" class="btn"> SIGN IN  </button>
    

    <div class="register-link">
        <p>Don't have an account? <a href="../sign up/sign up.php"> register</a></p>
     </div>
</div>

</form>
    
    
</body>
</html>