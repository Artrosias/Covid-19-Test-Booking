<?php
require_once('database.php');

  $sql = "SELECT data_prenotazione FROM Prenotazioni Where cod_fiscale ='$_POST[cod_fiscale]' ";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "La data della tua prenotazione è : " . $row["data_prenotazione"]. "<br>";
    }
  } else {
    echo "Non hai prenotazioni";
  }
  ?>