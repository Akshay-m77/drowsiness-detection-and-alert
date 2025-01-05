<!-- // if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $vno = $_POST['vno'];
//     $to = $_POST['email'];
//     $location = $_POST['ulocation'];
    
//     //$to = "akshaym7033@gmail.com";
//     $subject = "Drowsiness alert";
//     $body = "The Driver at the vechile with Vechile number: $vno\n dectected sleepy at location: $location";
//     $headers = "From: vechile:$vno";

//     if (mail($to, $subject, $body, $headers)) {
        
//         echo "Email sent successfully! to:$to";
//         header("location:index.php");
//     } else {
//         header("location:index.php");
//         echo "Failed to send email. Please try again later.";
//     }
// } -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $vno = $_POST['vno'];
     $to = $_POST['email'];
        $location = $_POST['ulocation'];
        
        $subject = "Drowsiness alert";
        $body = "The Driver at the vechile with Vechile number: $vno\n dectected sleepy at location: $location";
        $headers = "From: vechile:$vno";
    

    $message = "The Driver at the vechile with Vechile number: $vno\n dectected sleepy at location: $location";


    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username ='akshaym7033@gmail.com';
    $mail->Password = 'osxnwznddmbbtbrm';
    $mail->SMTPSecure = 'ssl';
    $mail->Port =465;
    $mail->setFrom('akshaym7033@gmail.com');
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->send();

    echo 
    "
    <script>
    document.location.href = 'index.php';
    </script>
    ";

}

?>

