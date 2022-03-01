<?php
session_start();
require_once('database.php');

if (isset($_SESSION['session_id'])) {
    header('Location: dashboard.php');
    exit;
}

$controllocod = $_POST['cod_fiscale'];
$controllopass = $_POST['password'];

$sql = "SELECT cod_fiscale,password FROM Medico_Curante";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    if(($row["cod_fiscale"]==$controllocod) && ($row["password"]==$controllopass)){
        header('Location: area_medico.html');
    } 
}
exit("Credenziali errate");
