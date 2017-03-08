<?php
App::import('Vendor','tcpdf/xtcpdf'); 
$tcpdf = new XTCPDF();
$textfont = 'freesans';

$tcpdf->SetAuthor("");
$tcpdf->SetAutoPageBreak( false );
$tcpdf->setHeaderFont(array($textfont,'',10));
$tcpdf->xheadercolor = array(255,255,255);
$tcpdf->xheadertext = 'Fecha: '. date('d-m-Y',time());
$tcpdf->xfootertext = 'www.example.cl';

$tcpdf->AddPage();
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'B',10);
$tcpdf->Cell(10,20,'Nombre:', 0, 0);

// more info

echo $tcpdf->Output('mi_archivo.pdf', 'D'); //D or I
?>