<?php
session_start();
require_once('database.php');

  $sql = "SELECT num_prenotazione, cod_fiscale, data_prenotazione FROM Prenotazioni WHERE nome_lab='$_SESSION[laboratorio]'";
  $result = mysqli_query($conn, $sql);
  echo "<br>";
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "num_prenotazione: " . $row["num_prenotazione"]. " - codice fiscale: " . $row["cod_fiscale"]. "- data : " . $row["data_prenotazione"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>