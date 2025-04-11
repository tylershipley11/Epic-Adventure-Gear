<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Invalid access.";
    exit;
}


$name = strip_tags(trim($_POST['name']));
$email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
$phone = strip_tags(trim($_POST['phone']));
$inquiry = strip_tags(trim($_POST['inquiry']));
$message = strip_tags(trim($_POST['message']));
$contactMethods = isset($_POST['contactMethod']) ? implode(", ", $_POST['contactMethod']) : "None selected";


if (!$name || !$email || !$phone || !$inquiry) {
    echo "Please fill in all required fields.";
    exit;
}


$messageToBusiness = "From: $name\r\n" .
                     "E-mail: $email\r\n" .
                     "Phone: $phone\r\n" .
                     "Inquiry Type: $inquiry\r\n" .
                     "Preferred Contact Method: $contactMethods\r\n" .
                     "Message:\r\n$message\r\n";


$headerToBusiness = "From: $email\r\n";
$subjectToBusiness = "New Contact Form Submission: $inquiry";
mail("tylshipley@mail.mvnu.edu", $subjectToBusiness, $messageToBusiness, $headerToBusiness);


$messageToClient = "Dear $name,\r\n\r\n" .
                   "Thank you for contacting Epic Adventure Gear. We have received your inquiry as detailed below:\r\n\r\n" .
                   $messageToBusiness .
                   "\r\n------------------------\r\n" .
                   "We will get back to you shortly.\r\n" .
                   "Best regards,\r\n" .
                   "Epic Adventure Gear Team";


$headerToClient = "From: tylshipley@mail.mvnu.edu\r\n";
$subjectToClient = "Re: Your Inquiry - $inquiry";
mail($email, $subjectToClient, $messageToClient, $headerToClient);


$display = str_replace("\r\n", "\r\n<br>", $messageToClient);
$display = "<!DOCTYPE html>
    <html lang='en'>
    <head><meta charset='utf-8'><title>Your Message</title></head>
    <body><code>$display</code></body>
    </html>";
echo $display;

//$logEntry = "\n-------------------------------------------------------\n";
//$logEntry .= "Date received: " . date("jS \of F, Y \a\\t H:i:s") . "\n";
//$logEntry .= $messageToBusiness . "\n";

 

$fileVar = fopen("../php/contactLog.txt", "a")
    or die("Error: Could not open the log file.");
fwrite($fileVar,
    "\n-------------------------------------------------------\n")
    or die("Error: Could not write divider to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
    or die("Error: Could not write date to the log file.");
fwrite($fileVar, $messageToBusiness)
    or die("Error: Could not write message to the log file.");
?>
