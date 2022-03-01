<?php 
require_once('database.php');
session_start();
$sql="SELECT risultato FROM Prenotazioni where cod_fiscale='$_SESSION[tamponato]'";
$result = $conn->query($sql);
$row = mysqli_fetch_assoc($result);

if($row["risultato"] == true){
    mysqli_free_result($result);

    $sql="SELECT email FROM Prenotazioni where cod_fiscale='$_SESSION[tamponato]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    $to_email = $row["email"];
    $subject = 'Esito tampone';
    $message = 'Il tuo tampone è positivo';
    $headers = 'From: noreply @ lab . com';
    mail($to_email,$subject,$message,$headers);
    mysqli_free_result($result);
    $conn->close();

}
else
{
    mysqli_free_result($result);

    $sql="SELECT email FROM Prenotazioni where cod_fiscale='$_SESSION[tamponato]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);

    $to_email = $row["email"];
    $subject = 'Esito tampone';
    $message = 'Il tuo tampone è negativo';
    $headers = 'From: noreply @ lab . com';
    mail($to_email,$subject,$message,$headers);
    mysqli_free_result($result);
    $conn->close();
}
?>