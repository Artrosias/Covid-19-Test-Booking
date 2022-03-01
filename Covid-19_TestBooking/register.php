<?php
$servername = "localhost";
$username = "ingegneriaprogetto";
$password = "Wx2CyFuyDasn";
$database = "my_ingegneriaprogetto";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully" ;

$controllo = $_POST['cod_fiscale'];

   /* 
    if (empty($cod_fiscale) || empty($password) || empty($nome) || empty($cognome) || empty($email) || empty($telefono)) {
        $msg = 'Compila tutti i campi %s';
    } 
     else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);*/
               $sql = "SELECT cod_fiscale FROM Utenti";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)) {
            if($row['cod_fiscale']==$controllo){
           exit("Il codice fiscale esiste già");
            }
        }

        $sql = "INSERT INTO Utenti(cod_fiscale,nome,cognome,telefono,email,password)
        VALUES('$_POST[cod_fiscale]' , '$_POST[nome]' , '$_POST[cognome]', '$_POST[telefono]','$_POST[email]', '$_POST[password]' )";
   
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
