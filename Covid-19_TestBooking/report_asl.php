<?php 
require_once('database.php');

$sql = "SELECT * FROM Prenotazioni WHERE risultato=1 ";
$result = $conn->query($sql);

$num_positivi= mysqli_num_rows($result);
mysqli_free_result($result);

$sql = "SELECT * FROM Prenotazioni";
$result = $conn->query($sql);

$num_tamponi= mysqli_num_rows($result);
mysqli_free_result($result);

echo "il numero di positivi è $num_positivi"; echo"<br>";
echo "il numero di tamponi è $num_tamponi";
$conn->close();
?>
