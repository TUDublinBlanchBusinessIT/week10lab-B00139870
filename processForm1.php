<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gathering form data
    $firstname = $_POST['firstname'] ?? '';
    $surname = $_POST['surname'] ?? '';
    $luggage = isset($_POST['luggage']) ? 1 : 0;

    // Storing data in session variables
    $_SESSION['passengerFN'] = $firstname;
    $_SESSION['passengerSN'] = $surname;
    $_SESSION['luggage'] = $luggage;

    if ($luggage == 1) {
        // If luggage checkbox is checked, redirect to luggage.html
        header("Location: luggage.html");
        exit();
    } else {
        // If luggage checkbox is not checked, redirect to finalStep.php
        header("Location: finalStep.php");
        exit();
    }
} else {
    // Redirect to the form if accessed without POST method
    header("Location: flightBooking.html");
    exit();
}
?>
