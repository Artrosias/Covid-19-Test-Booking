<?php
require_once('database.php');

$controllo = $_POST['cod_fiscale'];

  
               $sql = "SELECT cod_fiscale FROM Datore_Di_Lavoro";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if($row['cod_fiscale']==$controllo){
           exit("Il codice fiscale esiste già");
            }
        }

        $sql = "INSERT INTO Datore_Di_Lavoro(cod_fiscale,nome,cognome,telefono,email,password,Nome_Impresa,Numero_Dipendenti,Ambito_impresa)
        VALUES('$_POST[cod_fiscale]' , '$_POST[nome]' , '$_POST[cognome]', '$_POST[telefono]','$_POST[email]', '$_POST[password]', '$_POST[nome_impresa]', '$_POST[n_dipendenti]', '$_POST[a_impresa]' )";
   
        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error";
    }
        