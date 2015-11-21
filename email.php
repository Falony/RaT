<?php
 / Data variables /
 $sendName  = $_POST['name1'];
 $sendAdres  = $_POST['name1'];
 $sendMail  = $_POST['email1'];
 $sendZIP  = $_POST['name1'];
 $sendWP   = $_POST['message1'];
 $sendTF  = $_POST['message1'];
 $sendMSG   = $_POST['message1'];
 $sendHuur1 = $_POST['message1'];
 $sendHuur2 = $_POST['message1'];
 $sendTent = $_POST['message1'];
 $sendExtra = $_POST['message1'];

 / Configuration /
 $onderwerp = 'Offerte aanvraag';

 $verzendNaar = 'robkegge@hotmail.com';

 $body = "
  <h1>Persoonlijke gegevens</h1><br><br>
  Naam: $sendName<br>
  Adres: $sendAdres<br>
  Postcode: $sendZIP<br>
  Woonplaats: $sendWP<br>
  Telefoonnummer: $sendTF<br>
  E-mail: $sendMail<br><br>

  <h1>Huurperiode</h1><br><br>
  Van: $sendHuur1<br>
  Tot: $sendHuur2<br><br>

  <h1>Tent</h1><br><br>
  Tent: $sendTent<br><br>

  <h1>Extra's</h1><br><br>
  Tent: $sendExtra<br><br>
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