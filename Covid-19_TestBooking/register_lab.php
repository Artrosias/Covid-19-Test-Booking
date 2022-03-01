<?php
require_once('database.php');

$controllo = $_POST['nome'];

   /* 
    if (empty($cod_fiscale) || empty($password) || empty($nome) || empty($cognome) || empty($email) || empty($telefono)) {
        $msg = 'Compila tutti i campi %s';
    } 
     else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);*/
               $sql = "SELECT cod_fiscale FROM Utenti";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if($row['nome']==$controllo){
           exit("Il Laboratorio f esiste già");
            }
        }

        $sql = "INSERT INTO Lab_analisi(nome,indirizzo,isConvenzionato,password)
        VALUES('$_POST[nome]' , '$_POST[indirizzo]','0', '$_POST[password]' )";
   
        if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error";
    }
         /*   $check = $pdo->prepare($sql);
            $check->bindParam(':cod_fiscale', $cod_fiscale, PDO::PARAM_STR);
            $check->bindParam(':nome', $nome, PDO::PARAM_STR);
            $check->bindParam(':cognome', $cognome, PDO::PARAM_STR);
            $check->bindParam(':telefono', $telefono, PDO::PARAM_STR);
            $check->bindParam(':email', $email, PDO::PARAM_STR);
            $check->bindParam(':password', $password_hash, PDO::PARAM_STR);
            $check->execute();
            
            if ($check->rowCount() > 0) {
                $msg = 'Registrazione eseguita con successo';
            } else {
                $msg = 'Problemi con l\'inserimento dei dati %s';
            } */
    

   
    //printf($msg, '<a href="../register.html">torna indietro</a>');
