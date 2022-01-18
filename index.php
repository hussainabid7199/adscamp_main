
<?php

// Connecting to database
 $servername = "localhost";
 $username = "root";
 $password = "";

//  cereting a connection 

$conn =mysqli_connect($servername, $username, $password);

echo "connection was sucessful";

// $name = $_POST['name'];
// $email = $_POST['email'];
// $number = $_POST['number'];
// $message = $_POST['message'];

// $email_from = 'adscamponline@gmail.com';

// $email_subject = 'New Enquiry Subbmited !'; 

// $email_body = "Name :- $name. \n".
//               "Email :- $email. \n". 
//               "Contact No :- $number. \n". 
//               "Message :- $message. \n";

//     $to = "hussainabid7199@gmail.com";
//     $headers = "From :- $email_from \r\n";
//     $headers = "Reply-To :- $email \r\n";

//     mail($to,$email_subject,$email_body,$headers);

?>


<!-- 
INSERT INTO `enquiry_form` (`S.No`, `Name`, `Email`, `Contact No.`, `Massage`, `Date/Time`) VALUES ('01', 'Testing_name', 'testing@testing.com', '0178989899', 'Display_mst_testing', current_timestamp()); -->