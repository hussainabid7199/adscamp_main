<?php

  $server = "sql104.epizy.com";
  $username = "epiz_30830724";
  $password = "UBtXELaw5Nsnaa";
  $dbname = "epiz_30830724_form";

  $conn = mysquli_connect($server, $username, $password, $dbname);

  if(!$conn){
    die("Connection failed :".mysquli_connect_error());
  }


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];


  $email_from = 'adscamponline@gmail.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message".



                            $to = "hussainabid7199@gmail.com";

                            $headers = "From: $email_from \r\n";
                          
                            $headers .= "Reply-To: $visitor_email \r\n";
                          
                            mail($to,$email_subject,$email_body,$headers);


                            $to = "name1@website-name.com, name2@website-name.com,name3@website-name.com";

  mail($to,$email_subject,$email_body,$headers);

?>