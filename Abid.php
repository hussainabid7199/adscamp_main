<?php

//     APNE HTML FORM ME ISKO LINK KRR DIGIYEGA   
$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
// $course = $_POST['class'];
$message = $_POST['message'];  

$to = "adscamponline@gmail.com";

$subject = "SUBJECT LIKH DIGIYEGA";
$txt ="Name   = ". $name . "\r\n  Email = " . $email . "\r\n  Phonenumber = " . $phonenumber . "\r\n  Message = " . $message;
// Class = " . $course . "\r\n
$headers = "From: adscamponline@gmail.com" . "\r\n" .
"CC: hussainabid7199@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    mail($too,$subject,$txt,$headers);
}
//YE CODE H EMAIL;SEND HONE KE BAAD KAHA PE REDIRECT HOGA USS PAGE KA ADDRESS RAHEGA YAHA
header("Location:index.html");
?>
