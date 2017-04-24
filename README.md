# fpdf-password-protected
How to create password protected PDF Document using PHP?

Today we tell you how to create password protected pdf document using PHP. We can use FPDF class to create passwrod protected pdf file. You may download FPDF pacakge from http://www.fpdf.org/. You may also use below code to create your password protected pdf.

# example-code

<?php
require('FPDF_Protection.php'); 
$pdf = new FPDF_Protection(); 
$pdf->SetProtection(array('print'),'password'); //in place of password user your own password
$pdf->AddPage(); 
$pdf->SetFont('Arial'); 
$pdf->Write(10,'You can print me but not copy my text.'); 
$pdf->Output();
?>
