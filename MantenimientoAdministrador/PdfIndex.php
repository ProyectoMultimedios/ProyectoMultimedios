<?php
include_once('Pdf.php');
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B', 10);
//Margen decorativo iniciando en 0, 0

//Texto de Título
$pdf->SetXY(60, 25);
$pdf->MultiCell(65, 5, utf8_decode('Proyecto Multimedios 2015'), 0, 'C');


//De aqui en adelante se colocan distintos métodos
//para diseñar el formato.



$pdf->SetXY(25, 70);
$pdf->Cell(20, 8, 'Integrantes:', 0, 'L');

$pdf->SetXY(25, 80);
$pdf->Cell(20, 8, 'Alex Andrey Barahona Gutierrez B10779', 0, 'L');

//*****
$pdf->SetXY(25,90);
$pdf->Cell(19, 8, 'Caleb Delgado Mejias B12196', 0, 'L');

//*****
$pdf->SetXY(25, 100);
$pdf->Cell(10, 8, 'Priscilla Salas Alvarado B15923', 0, 'L');


//LICENCIATURA  //CARGO   //CÓDIGO POSTAL
$pdf->SetXY(25, 110);
$pdf->Cell(10, 8, 'Celina Rosales B25966', 0, 'L');

$pdf->Output(); //Salida al navegador

?>
