<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$subTenKG = isset($_POST['subTenKG']) ? intval($_POST['subTenKG']) : 0;
$overTenKG = isset($_POST['overTenKG']) ? intval($_POST['overTenKG']) : 0;


    $_SESSION['subTenKG'] = $subTenKG;
    $_SESSION['overTenKG'] = $overTenKG;


    header("Location: finalStep.php");
    exit();
} else {

    header("Location: luggage.html");
    exit();
}
?>
