<?php
    require_once "db.php";

    session_start();

    if(!isset($_SESSION["user"])){
        header("Location: index.php");
    }

    $id = $_GET["x"];

    $sql = "SELECT * FROM `pet_adoptions` WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $sqlA = "SELECT * FROM animals WHERE id = {$row['animal_id_fk']}";
    $resultA = mysqli_query($conn, $sqlA);
    $rowA = mysqli_fetch_assoc($resultA);
    $xy = $rowA['id'];
    $edit = "UPDATE `animals` SET `status` = '0' WHERE id = $xy";

    $delete = "DELETE FROM `pet_adoptions` WHERE id = {$id}";
    if(mysqli_query($conn, $edit) && mysqli_query($conn, $delete)){
        header("Location: notifications.php");
    }else {
        echo "Oops! Something went wrong!";
    }

?>