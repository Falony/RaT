<?php
  ini_set('display_errors', 1);

 // Data variables 
 $sendName  = $_POST['name'];
 $sendMsg  = $_POST['msg'];
 $sendMail  = $_POST['email'];

 $onderwerp = 'Vraag/Opmerking';

 $verzendNaar = 'robkegge@hotmail.com';

 $body = "
  Naam afzender: $sendName<br>
  E-mail afzender: $sendMail<br><br>
  Bericht: $sendMsg
 ";

 $headers = "From: $sendName <$sendMail> \r\n";
 $headers .= "Reply-To: $sendMail \r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 $message = "<html><body>$body</body></html>";

 if (mail($verzendNaar, $onderwerp, $message, $headers)) {
    echo "Het is gelukt";
    
     
 } else {
    echo "Er is iets fout gegaan";
 }




?>