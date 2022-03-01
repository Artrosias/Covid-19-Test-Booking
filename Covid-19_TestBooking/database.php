<?php
$username = "ingegneriaprogetto";
$password = "Wx2CyFuyDasn";
$database = "my_ingegneriaprogetto";
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "" ;
  ?>
