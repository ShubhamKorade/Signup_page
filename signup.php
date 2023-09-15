<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $otp = mt_rand(100000, 999999);
    

    session_start();
    $_SESSION["otp"] = $otp;
    
    $to = $email;
    $subject = "OTP for Email Verification";
    $message = "Your OTP is: $otp";
    
    header("Location: verify.php");
    exit();
}
?>
