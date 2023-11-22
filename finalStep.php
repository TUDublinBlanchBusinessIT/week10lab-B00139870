<?php
include("finalStepHeader.html");

session_start();

// passenger information
echo "<h4>";
if (isset($_SESSION['passengerFN'])) {
    echo "Firstname: " . $_SESSION['passengerFN'] . "<br>";
}

if (isset($_SESSION['passengerSN'])) {
    echo "Surname: " . $_SESSION['passengerSN'] . "<br>";
}

if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {
    // luggage information if available
    if (isset($_SESSION['subTenKG'])) {
        echo "Bags under 10kg: " . $_SESSION['subTenKG'] . "<br>";
    }

    if (isset($_SESSION['overTenKG'])) {
        echo "Bags between 10kg and 20kg: " . $_SESSION['overTenKG'] . "<br>";
    }
}
echo "</h4>";

?>
</div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</label>
        </div>
    </div>
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</form>
