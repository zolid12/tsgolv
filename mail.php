<?php
if(isset($_POST['submit'])){
    $to = "info@ts2golv.se"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " Skrev följande:\n\n" . $_POST['message'] . " " . " Mob " . $_POST['phone'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'] . " " . " Mob " . $_POST['phone'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);

	 unset($_POST['submit']);
	 header('Location:index.php');
	 }
?>
