<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subTenKG = $_POST['subTenKG'] ?? 0;
    $overTenKG = $_POST['overTenKG'] ?? 0;


    $_SESSION['subTenKG'] = $subTenKG;
    $_SESSION['overTenKG'] = $overTenKG;


    header("Location: finalStep.php");
    exit();
} else {

    header("Location: luggage.html");
    exit();
}
?>
