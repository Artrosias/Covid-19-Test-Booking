<?php
session_start();
require_once('database.php');
$sql = "UPDATE Lab_analisi SET IsConvenzionato=1, costo=0 WHERE nome='$_SESSION[laboratorio]";
if ($conn->query($sql) === TRUE) {
    echo "Il tuo laboratorio è ora convenzionato all'ASL";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  $conn->close();
?>