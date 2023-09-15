<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredOTP = $_POST["otp"];
    
    $storedOTP = $_SESSION["otp"];
    
    if ($enteredOTP == $storedOTP) {
       
        unset($_SESSION["otp"]);
        
        echo "Email verified successfully. You can now complete your registration.";
    } else {
        echo "Incorrect OTP. Please try again.";
    }
}
?>
