<?php
session_start();
require_once('database.php');
$_SESSION["laboratorio"]=$_POST['nome'];

$controllonome = $_POST['nome'];
$controllopass = $_POST['password'];

$sql = "SELECT nome,password FROM Lab_analisi";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    if(($row["nome"]==$controllonome) && ($row["password"]==$controllopass)){
        header('Location: area_laboratorio.html');
    } 
}
exit("Credenziali errate");
