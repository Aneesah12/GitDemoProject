<?php

require("includes/PHPMailer/class.phpmailer.php");

$mail = new PHPMailer;

if (!$mail->ValidateAddress($email)) {
    echo "Invalid Email Address";
    exit;
}





