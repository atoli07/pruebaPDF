<?php
require('../fpdf.php');
class PDF extends FPDF{
    function Header()
    {
        //Logo
        $this->Image('../img/udb2.jpg',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(30,10,'Curriculum Vitae',0,0,'C');
        // Line break
        $this->Ln(20);
    }
}
    if (isset($_POST['enviar'])) {
        $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : "";
        $pdf = new PDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 12);
        $pdf->Ln();
        $pdf->Cell(40, 10, 'Nombre completo: '.$nombre);
        $pdf->Output();
    } else {
        $str = <<<RESP
        <h3>No ha ingresado datos personales. No se puede generar PDF</h3>
        <p>Para ingresar los datos de clic <a href="formulario.html">aquí</a></p>
    RESP;
        echo $str;
    }
?>