<?php
require('./fpdf/fpdf.php');
require('../connect.php');

class PDF extends FPDF
{
function Header()
{
    $this->Image('../image/logo2.png',8,3,25);

    $this->SetFont('Arial','B',15);
    $this->Cell(40);
    $this->Cell(105,15,'Reporte de Libros',1,0,'C');
    $this->Ln(20);

    $this->Cell(15, 10,'id', 1, 0, 'C', 0);
    $this->Cell(50, 10,'Titulo', 1, 0, 'C', 0);
    $this->Cell(35, 10,'ISBN', 1, 0, 'C', 0);
    $this->Cell(40, 10,'Categoria', 1, 0, 'C', 0);
    $this->Cell(35, 10,'Autor', 1, 0, 'C', 0);
    $this->Cell(20, 10,utf8_decode('Año'), 1, 1, 'C', 0);
}
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,utf8_decode ('Pagína '.$this->PageNo().'/{nb}'),0,0,'C');
}
}


$consulta = "SELECT * FROM libro";
$resultado =  $conexion->query ($consulta);

$fpdf =new PDF();
$fpdf->AliasNbPages();
$fpdf->Addpage();
$fpdf->SetFont('Arial','', 12);

while($row = $resultado->fetch_assoc()){
$fpdf->Cell(15, 10, $row['idlibro'], 1, 0, 'C', 0);
$fpdf->Cell(50, 10, utf8_decode($row['titulo']), 1, 0, 'C', 0);
$fpdf->Cell(35, 10, $row['isbn'],1, 0, 'C');
$fpdf->Cell(40, 10, utf8_decode($row['categoria']), 1, 0, 'C', 0);
$fpdf->Cell(35, 10, utf8_decode($row['autor']), 1, 0, 'C', 0);
$fpdf->Cell(20, 10, $row['year'], 1, 1, 'C', 0);
}

$fpdf->Output();