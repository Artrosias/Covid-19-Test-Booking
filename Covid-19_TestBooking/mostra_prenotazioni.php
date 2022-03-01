<?php
require_once('database.php');

  $sql = "SELECT num_prenotazione, cod_fiscale, Data_prenotazione FROM Prenotazioni";
  $result = mysqli_query($conn, $sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "num_prenotazione: " . $row["num_prenotazione"]. " - costo: " . $row["cod_fiscale"]. " " . $row["data_prenotazione"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>