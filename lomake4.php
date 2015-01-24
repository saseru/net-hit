<html>
<body>
  <head>
    <meta charset= "UTF-8">
  </head>
  <?php
  echo "Nimi: {$_REQUEST['etunimi']} {$_REQUEST['sukunimi']}<br>";
  echo "Osoite: {$_REQUEST['osoite']} {$_REQUEST['postinumero']} {$_REQUEST['postitoimipaikka']}<br>";
  echo "Sukupuoli: {$_REQUEST['sukupuoli']}<br>";
  if($_REQUEST['vastaus'] == "kylla") {
    echo "Sähkopostiosoite: {$_REQUEST['spostiosoite']}<br>";
  }
  else {
    echo "Sähkopostiosoite: <i>{$_REQUEST['spostiosoite']}</i><br>";
  }

  echo "Haluan vastaanottaa ilmoituksia: {$_REQUEST['vastaus']}";
  ?>
</body>
</html>
