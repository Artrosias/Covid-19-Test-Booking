<?php
require_once('database.php');

  $sql = "SELECT risultato FROM Prenotazioni WHERE cod_fiscale = '$_POST[cod_fiscale]'";
  $result = $conn->query($sql);
  $row = mysqli_fetch_assoc($result);

  if($row["risultato"] == true){
      echo "Il tampone è positivo :(";
  }
  else 
  {
      echo "il tampone è negativo :)";
  }
  mysqli_free_result($result);
  $conn->close();
  ?>