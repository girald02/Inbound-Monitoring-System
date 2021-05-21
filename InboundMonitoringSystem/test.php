<?php 

require('fpdf.php'); 

// New object created and constructor invoked 
$pdf = new FPDF(); 

$pdf->SetTitle("ServicePartsMonitoringSystem");

// Add new pages. By default no pages available. 
$pdf->AddPage(); 

// Set font format and font-size 
$pdf->SetFont('arial', 'B', 20); 

// Framed rectangular area 
$pdf->Cell(176, 10, 'EXPORT SUMMARY LIST', 0, 0, 'C'); 

// Set it new line 
$pdf->Ln(); 

$pdf->SetTitle("ServicePartsMonitoringSystem");

// Set font format and font-size 
$pdf->SetFont('arial', 'B', 12); 

// Framed rectangular area 
$pdf->Cell(176, 10, 'RECEIVING REPORT', 0, 0, 'C'); 

// Set it new line 
$pdf->Ln(); 


// Set font format and font-size 
$pdf->SetFont('arial', 'BI', 12); 

// Framed rectangular area 
$pdf->Cell(176, 10, '02-11-2020', 0, 0, 'L'); 

$pdf->Ln(); 

$pdf->SetFont('arial', 'B', 12); 

$pdf->Cell(63,5,'RRNO#',1,0,'L',0);
$pdf->Cell(63,5,'SUPPLIER',1,0,'L',0);
$pdf->Cell(63,5,'DR NUMBER',1,0,'c',0);

$pdf->Ln(); 

// =====================================
// Set font format and font-size 
$pdf->SetFont('arial', '', 8); 
$pdf->Cell(63,5,'1',1,0,'L',0);
$pdf->Cell(63,5,'DENSO',1,0,'L',0);
$pdf->Cell(63,5,'DR41125465',1,0,'c',0);
$pdf->Ln(); 
// =====================================

// =====================================
// Set font format and font-size 
$pdf->SetFont('arial', '', 8); 
$pdf->Cell(63,5,'1',1,0,'L',0);
$pdf->Cell(63,5,'DENSO',1,0,'L',0);
$pdf->Cell(63,5,'DR41125465',1,0,'c',0);
$pdf->Ln(); 
// =====================================
// =====================================
// Set font format and font-size 
$pdf->SetFont('arial', '', 8); 
$pdf->Cell(63,5,'1',1,0,'L',0);
$pdf->Cell(63,5,'DENSO',1,0,'L',0);
$pdf->Cell(63,5,'DR41125465',1,0,'c',0);
$pdf->Ln(); 
// =====================================
// =====================================
// Set font format and font-size 
$pdf->SetFont('arial', '', 8); 
$pdf->Cell(63,5,'1',1,0,'L',0);
$pdf->Cell(63,5,'DENSO',1,0,'L',0);
$pdf->Cell(63,5,'DR41125465',1,0,'c',0);
$pdf->Ln(); 
// =====================================
// =============================================================================================================


// Footer
// Set font format and font-size 
$pdf->SetFont('arial', 'BU', 10); 
// Framed rectangular area 
$pdf->Cell(63, 30, 'B.ENCINARES', 0, 0, 'L'); 
$pdf->Cell(63, 30, 'J.TANALEON', 0, 0, 'L'); 
$pdf->Cell(63, 30, '                                                              ', 0, 0, 'L'); 

// =====================================
 
// Close document and sent to the browser 

$a = mt_rand(100000,999999); 

$pdf->Output('I',$a);

?> 
