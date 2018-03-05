<?php
require('../FPDF/fpdf.php');
//var_dump($_GET['id']);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(0, 10, "A demain les amis");
$pdf->Output();
?>