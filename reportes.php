<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{  
    // Arial bold 15
    $this->SetFont('Arial','B',15);
	$this->SetFillColor(45, 16, 26);
	
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reportes de Apartamentos',0,0,'C',0);
	
	$this->Ln(5);
	$this->SetFont('Arial','',12);
	$this->Cell(60);
	$this->Cell(70,10,utf8_decode('Información de los apartamentos'),0,0,'C');
    $this->SetFont('Arial','',10);
	$this -> Text(160, 20, utf8_decode('Fecha: ' . date("Y-m-d")), 0, 0, 'C');
	  
    $this->Ln(20);
	$this->SetTextColor(255,255,255);
	$this->Cell(40, 10, 'Apartamento',1, 0, 'C', 1);
	$this->Cell(75, 10, 'Nombre',1, 0, 'C', 1);
	$this->Cell(75, 10, 'Apellido',1, 1, 'C', 1);


}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'coneccionReporte.php';
$consulta = "SELECT * FROM apartamentos";
$resultado = $mysqli->query($consulta);



$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12,);
$pdf->SetFillColor(255, 207, 207);
	$alternal = false;
while($row = $resultado->fetch_assoc()){
	
	$pdf->Cell(40, 10, $row['NumApartamento'],1, 0, 'C', $alternal);
	$pdf->Cell(75, 10, $row['NombreDueno'],1, 0, 'C', $alternal);
	$pdf->Cell(75, 10, $row['ApellidoDueno'],1, 1, 'C', $alternal);
	$alternal = !$alternal;
}




$pdf->Output();
?>