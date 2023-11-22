<?php
session_start();
if (!isset($_POST['confirm'])) {
    header("Location: flightBooking.html");
}
$fn = $_SESSION['passengerFN'];
$sn = $_SESSION['passengerSN'];
if ($_SESSION['luggage']=='1') {
    $subTenKG = $_SESSION['subTenKG'];
    $overTenKG = $_SESSION['overTenKG'];
}
else {
    $subTenKG = 0;
    $overTenKG = 0;
}
    
include("dbcon.php");
$sql = "insert into flightbooking(firstname,surname,bagsUnderTenKG,bagsOverTenKG) values ";

$sql .= "('$fn','$sn','1','1')";

//echo $sql;


if (mysqli_query($conn, $sql)) {
  echo "Your flight booking was created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

session_destroy();

?>