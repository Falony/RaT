<?php
 / Data variables /
 $sendName  = $_POST['name1'];
 $sendMail  = $_POST['email1'];
 $sendMSG   = $_POST['message1'];

 / Configuration /
 $onderwerp = 'Bericht Gestuurd';

 // $verzendNaar = 'info@rv-websites.nl';
 $verzendNaar = 'info@rv-websites.nl';

 $body = "
  <h1>Afzender: $sendName</h1><br>
  Afzender Email: $sendMail<br><br><br>
  Bericht: $sendMSG<br>
 ";

 $headers = "From: $sendName <$sendMail> \r\n";
 $headers .= "Reply-To: $sendMail \r\n";
 $headers .= "MIME-Version: 1.0\r\n";
 $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

 $message = "<html><body>$body</body></html>";

 if (mail($verzendNaar, $onderwerp, $message, $headers)) {
    echo "Suck mah cock please";
     
 } else {
    echo "kom hier";
 }

?>