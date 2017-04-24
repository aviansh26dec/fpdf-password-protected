<?php
require('FPDF_Protection.php');

$pdf = new FPDF_Protection();
$pdf->SetProtection(array('print'),'password'); //in place of password user your password
$pdf->AddPage();
$pdf->SetFont('Arial');
$pdf->Write(10,'You can print me but not copy my text.');
$pdf->Output();
?>