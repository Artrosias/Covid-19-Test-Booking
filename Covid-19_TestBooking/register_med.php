<?php
require_once('database.php');

$controllo = $_POST['cod_fiscale'];

  
               $sql = "SELECT cod_fiscale FROM Medico_Curante";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if($row['cod_fiscale']==$controllo){
           exit("Il codice fiscale esiste già");
            }
        }

        $sql = "INSERT INTO Medico_Curante(cod_fiscale,nome,cognome,telefono,email,password)
        VALUES('$_POST[cod_fiscale]' , '$_POST[nome]' , '$_POST[cognome]', '$_POST[telefono]','$_POST[email]', '$_POST[password]' )";
   
        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error";
    }