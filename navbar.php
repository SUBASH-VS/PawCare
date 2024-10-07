<?php
session_start();
require_once "db.php";

$userAcc = "";
$log = "<li><a href='logout.php?logout' class='last-btn'>Sign our</a></li>";

// Check if any of the user, admin, or shelter sessions are set
if(isset($_SESSION["user"]) || isset($_SESSION["adm"])) {
    // The user is logged in
    $userAcc = ""; 
    $log = "<li><a href='logout.php?logout' class='last-btn'>Logout</a></li>";
} else {
    $userAcc = "<li><a href='./sign in/sign in.php' class='last-btn'>Sign in</a></li>";
    $log = "";
}

$nav = "
<div>
<nav> 
    <div class='title'> 
        <span>PAWCARE</span> 
    </div> 
</nav> 
<div class='menu-btn'> 
    <div class='material-symbols-outlined'>pets
        <ul class='nav-menu'> 
            <li><a href='index.php' class='btn'>Home</a></li> 
            <li><a href='adoption.php' class='btn'>Adoption</a></li> 
            <li><a href='./donation.php' class='btn'>Donation</a></li> 
            <li><a href='./about.php' class='btn'>About</a></li> 
            <li><a href='notifications.php' class='btn'>Request</a></li> 
            {$log}
            {$userAcc}
        </ul> 
    </div> 
</div>
</div>";
?>
