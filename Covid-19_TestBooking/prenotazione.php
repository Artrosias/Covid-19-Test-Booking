<?php
require_once('database.php');
$sql = "SELECT * FROM Prenotazioni WHERE data_prenotazione='$_POST[data]'";
$result = $conn->query($sql);
$numero = mysqli_num_rows($result);
if ($numero < 100){
mysqli_free_result($result);


$sql = "INSERT INTO Prenotazioni(cod_fiscale,email,telefono,nome_lab,data_prenotazione)
        VALUES('$_POST[cod_fiscale]' ,'$_POST[email]', '$_POST[telefono]',  '$_POST[lab]' , '$_POST[data]')";
   
        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error";
    }
  }
  else {
    echo "La data da te selezionata non è disponibile, prenota un altro giorno";
  }
?>
<!DOCTYPE HTML>
<html>
<body>
<form method="post" action="form_pagamento.html">
           <p> Clicca qui per pagare il tuo tampone online <p> <br>
            <input type="submit"> <br>
</form>
<form method="post" action="area_utente.html">
           <p> Clicca qui per tornare alla home e pagare direttamente in laboratorio <p> <br>
            <input type="submit">
</form>
    </body>
</html>