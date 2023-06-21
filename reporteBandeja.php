<?php
require('fpdf.php');

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "54321";
$dbname = "BDTEST";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$pdf = new FPDF('P','pt','A4');
$pdf->AddPage(); 
$pdf->Image('logoTODOIST.PNG',190,10,200,100);
$pdf->SetFont('helvetica','B',14);
$pdf->Cell(400,200,'REPORTE DE TAREAS REALIZADAS',0,2,'R');
$pdf->SetFont('helvetica','',6);
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(2);
$pdf->Line(5,150,590,150);


// Consulta a la base de datos
$query = "SELECT * FROM tablabandeja1";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $pdf->Cell(80, 20, $row['id'], 1); // campo1 es el nombre de una columna en tu tabla
        $pdf->Cell(80, 20, $row['nombre_tarea'], 1); 
        $pdf ->cell(80, 20, $row['nombre_tarea'], 1);
        $pdf->Cell(80, 20, $row['Encargado'], 1);
        $pdf->Cell(80, 20, $row['fecha'], 1);
        $pdf->Cell(80, 20, $row['telefono'], 1);

        $pdf->Ln();




        // Aquí puedes agregar el código para mostrar los datos en el PDF
        // Por ejemplo:
        // $pdf->Cell(0, 10, $row['nombre'], 0, 1);
    }
}

$pdf->Output();

// Cerrar la conexión a la base de datos
$conn->close();


?>

