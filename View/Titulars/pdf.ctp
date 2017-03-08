<?php
App::import('Vendor','tcpdf');
$tcpdf = new TCPDF();
//$textfont = 'freesans';
$tcpdf->SetCreator(PDF_CREATOR);
$tcpdf->SetAuthor("autor");
$tcpdf->SetTitle("Título");
$tcpdf->SetSubject("Tutorial TCPDF en cakePHP");
$tcpdf->SetKeywords("TCPDF, PDF, cakePHP, ejemplo");
$tcpdf->setPrintHeader(true);
$tcpdf->setPrintFooter(true);
$tcpdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$tcpdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
$tcpdf->setLanguageArray($l);
$tcpdf->AliasNbPages();
$tcpdf->AddPage();
$tcpdf->SetFont("freesans", "BI", 20);
//$tcpdf->Cell(0,10,$contenido,1,1,'C');
//$tcpdf->writeHTML();
$this->log($contenido, LOG_DEBUG);
$tcpdf->writeHTML($contenido, true, 0, true, 0);
$tcpdf->Output($nombreArchivo.".pdf", "F");
?>