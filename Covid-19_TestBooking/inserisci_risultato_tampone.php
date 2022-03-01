<?php 
session_start();

require_once('database.php');
$_SESSION["tamponato"]=$_POST['cod_fiscale'];
$risultato = $_POST['risultato'];

if($risultato == 'positivo'){

    $sql = "UPDATE Prenotazioni SET risultato=1 WHERE cod_fiscale ='$_POST[cod_fiscale]'";
if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error updating record: " . $conn->error;
  }
  $conn->close();
     }
   
else {

    $sql = "UPDATE Prenotazioni SET risultato=0 WHERE cod_fiscale ='$_POST[cod_fiscale]'";
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  $conn->close();
     }

?>

<!DOCTYPE HTML>
<html>
<body>
<form method="post" action="mail.php">
           <p> Clicca qui per inviare la mail con i risultati, se la mail non dovesse essere presente nel database verrà effettuata una chiamata <p> <br>
            <input type="submit"> <br>
</form>
    </body>
</html>