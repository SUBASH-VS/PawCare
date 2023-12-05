
<?php
require_once "db.php";

session_start();

if(!isset($_SESSION["user"])){
    header("Location: index.php");
}

$id = $_GET["x"];


$delete = "DELETE FROM `pet_adoptions` WHERE id = {$id}";
if(mysqli_query($conn, $delete)){
    header("Location: notifications.php");
}else {
    echo "Oops! Something went wrong!";
}
?>