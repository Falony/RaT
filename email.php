<?php
 / Data variables /
 $sendName  = $_POST['name'];
 $sendAdres  = $_POST['adres'];
 $sendMail  = $_POST['email'];
 $sendZIP  = $_POST['zip'];
 $sendWP   = $_POST['wp'];
 $sendTF  = $_POST['tele'];
 $sendMSG   = $_POST['comment'];
 $sendHuur1 = $_POST['vdate'];
 $sendHuur2 = $_POST['tdate'];
 $sendTent = $_POST['tent'];
 $sendExtra = $_POST['extra'];
 $sendinva = $_POST['inva'];
 $sendbagw = $_POST['bagw'];


echo $sendName;
echo $sendAdres;
echo $sendMail;
echo $sendZIP;
echo $sendWP;
echo $sendTF;
echo $sendMSG;
echo $sendHuur1;
echo $sendHuur2;
echo $sendTent;
echo $sendExtra;
echo $sendinva;
echo $sendbagw;

?>
/*
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

*/