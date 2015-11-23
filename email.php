<?php
  ini_set('display_errors', 1);

 // Data variables 
 $sendName  = $_POST['name'];
 $sendAdres  = $_POST['adres'];
 $sendMail  = $_POST['email'];
 $sendZIP  = $_POST['zip'];
 $sendWP   = $_POST['wp'];
 $sendTF  = $_POST['tele'];
 $sendMSG   = $_POST['messa'];
 $sendHuur1 = $_POST['vdate'];
 $sendHuur2 = $_POST['tdate'];
 $sendTent = $_POST['dropdown-selection'];
 $sendExtra = $_POST['extra'];
 $sendinva = $_POST['inva'];
 $sendbagw = $_POST['bagw'];

 if($sendExtra[0] == "inv" || $sendExtra[0] == "bagw"){
  $sendExtra[0] = "";
 }

 if($sendExtra[1] == "bagw"){
  $sendExtra[1] = "";
 }

$onderwerp = 'Offerte aanvraag';

 $verzendNaar = 'robkegge@hotmail.com';

 $body = "
  <h3>Persoonlijke gegevens</h3><br>
  Naam: $sendName<br>
  Adres: $sendAdres<br>
  Postcode: $sendZIP<br>
  Woonplaats: $sendWP<br>
  Telefoonnummer: $sendTF<br>
  E-mail: $sendMail<br><br>

  <h3>Huurperiode</h3><br>
  Van: $sendHuur1<br>
  Tot: $sendHuur2<br><br>

  <h3>Tent</h3><br>
  Tent: $sendTent<br><br>

  <h3>Extra's</h3><br>
  Gekozen Extra's:<br>
  $sendExtra[0]<br>
  $sendExtra[1]<br>
  $sendExtra[2]<br>
  $sendExtra[3]<br>
  $sendExtra[4]<br>
  
  Inventaris voor $sendinva personen.<br>

  Bagagewagen: $sendbagw <br> <br>

  Extra vragen / opmerkingen: $sendMSG <br>

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

<!--
echo $sendName;
echo "<br>";
echo $sendAdres;
echo "<br>";
echo $sendMail;
echo "<br>";
echo $sendZIP;
echo "<br>";
echo $sendWP;
echo "<br>";
echo $sendTF;
echo "<br>";
echo htmlspecialchars($sendMSG);
echo "<br>";
echo $sendHuur1;
echo "<br>";
echo $sendHuur2;
echo "<br>";
echo $sendTent;
echo "<br>";
echo $sendinva;
echo "<br>";
echo $sendbagw;


 if(isset($_POST['extra']))
{
  if (is_array($_POST['extra']))
  {
    foreach ($_POST['extra'] as $value) {
       echo $value;
     }
  }
   else
  {
    $value = $_POST['extra'];
    echo $value;
  }
}






-->