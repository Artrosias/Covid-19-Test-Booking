<?php 
require_once('database.php');
require('fpdf.php');

$select = "SELECT * FROM Prenotazioni";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
while($row = $result->fetch_object()){
  $num_prenotazione = $row->num_prenotazione;
  $cod_fiscale = $row->cod_fiscale;
  $nome_lab = $row->nome_lab;
  $risultato = $row->risultato;
  $pdf->Cell(20,10,$num_prenotazione,1);
  $pdf->Cell(80,10,$cod_fiscale,1);
  $pdf->Cell(80,10,$nome_lab,1);
  $pdf->Cell(40,10,$risultato,1);
  $pdf->Ln();
}
$pdf->Output();
?>
