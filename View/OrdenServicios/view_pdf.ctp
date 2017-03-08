<?php

$id = $property['OrdenServicio']['id'];
$fecha = $property['OrdenServicio']['fecha'];
$servicio = $property['OrdenServicio']['servicio'];
$titularnom =$property['Titular']['nombres'];
$titularape =$property['Titular']['apellidos'];
$titularced =$property['Titular']['cedula'];
$titulartel =$property['Titular']['telefono'];
$beneficiarionom =$property['Beneficiario']['nombres'];
$beneficiarioape =$property['Beneficiario']['apellidos'];
$beneficiarioced =$property['Beneficiario']['cedula'];
$beneficiariopar ="Hijo(a)";
$establecimientorif =$property['Establecimiento']['rif'];
$establecimientoesta =$property['Establecimiento']['establecimiento'];
$establecimientodir =$property['Establecimiento']['direccion'];
$establecimientotel =$property['Establecimiento']['telefono'];
$especialidad =$property['Especialidad']['especialidad'];

//$sex =$property['Empleado']['SEXO'];
//$fecn =$property['Empleado']['FECHANAC'];
//$edad=$property['Empleado']['EDAD'];
//$edoc=$property['Empleado']['EDOCIVIL'];
//$tele=$property['Empleado']['TELEMERGENCIA'];

$html = '<style>
div.student {
         color: #777;
         background-color: #F9F9F9;
         font-family: helvetica;
         font-size: 9pt;
      text-align: left;
   border:1px solid #DDD;
     }
h2{
     color: #F09A2E;
     font-weight: bold;
     padding: 10px 0;
}
.field_data{
       background-color: #F4F4F4;
     border: 1px solid #AAAAAA;
    padding-top: 10px;
padding-bottom: 5px;
padding-left: 5px;
height: 5px;
margin-left: 10px;
     }
</style>';

$html .='Fecha: '. date('d-m-Y',time());

			$html=$html.'<div align="center">
			<br />
			<h1>Orden de Servicio Medico - Sistema Autogestionado de Salud</h1> 
			<br />
			<h3>Datos del Titular Afiliado</h3> 
			<br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';
			$html=$html.'<tr bgcolor="#FF0000"><td><font color="#FFFFFF">Cedula</font></td><td><font color="#FFFFFF">Nombres</font></td><td><font color="#FFFFFF">Apellidos</font></td><td><font color="#FFFFFF">Telefono</font></td></tr>';
			$html=  $html.'<tr bgcolor="#95B1CE">';
			
				$html = $html.'<td>';
				$html = $html. $titularced;
				$html = $html.'</td><td>';
				$html = $html. $titularnom;
				$html = $html.'</td><td>';
				$html = $html. $titularape;
				$html = $html.'</td><td>';
				$html = $html. $titulartel;
				$html = $html.'</td></tr>';
				$html=$html.'</table></div>';
				$html=$html.'<br/>';
			
				
				
			$html=$html.'<div align="center">
			<h3>Datos del Beneficiario</h3> 
			<br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';
			$html=$html.'<tr bgcolor="#FF0000"><td><font color="#FFFFFF">Cedula</font></td><td><font color="#FFFFFF">Nombres</font></td><td><font color="#FFFFFF">Apellidos</font></td><td><font color="#FFFFFF">Parentesco</font></td></tr>';
			$html=  $html.'<tr bgcolor="#95B1CE">';
			
				$html = $html.'<td>';
				$html = $html. $beneficiarioced;
				$html = $html.'</td><td>';
				$html = $html. $beneficiarionom;
				$html = $html.'</td><td>';
				$html = $html. $beneficiarioape;
				$html = $html.'</td><td>';
				$html = $html. $beneficiariopar;
				$html = $html.'</td></tr>';
				$html=$html.'</table></div>';
				$html=$html.'<br/>';
				

			$html=$html.'<div align="center">
			<h3>Datos del Establecimiento Medico</h3> 
			<br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';
						$html=$html.'<tr bgcolor="#FF0000"><td><font color="#FFFFFF">Rif</font></td><td><font color="#FFFFFF">Establecimiento</font></td><td><font color="#FFFFFF">Direccion</font></td><td><font color="#FFFFFF">Telefono</font></td></tr>';
			$html=  $html.'<tr bgcolor="#95B1CE">';
			
				$html = $html.'<td>';
				$html = $html. $establecimientorif;
				$html = $html.'</td><td>';
				$html = $html. $establecimientoesta;
				$html = $html.'</td><td>';
				$html = $html. $establecimientodir;
				$html = $html.'</td><td>';
				$html = $html. $establecimientotel;
				$html = $html.'</td></tr>';
				$html=$html.'</table></div>';
				$html=$html.'<br/>';
				
			$html=$html.'<div align="center">
			<h3>Datos del Servicio</h3> 
			<br />			
			<table border="0" bordercolor="#0000CC" bordercolordark="#FF0000">';
						$html=$html.'<tr bgcolor="#FF0000"><td><font color="#FFFFFF">Especialidad</font></td><td><font color="#FFFFFF">Servicio</font></td><td><font color="#FFFFFF">Aprobado por</font></td><td><font color="#FFFFFF">Observaciones</font></td></tr>';
			$html=  $html.'<tr bgcolor="#95B1CE">';
			
				$html = $html.'<td>';
				$html = $html. $especialidad;
				$html = $html.'</td><td>';
				$html = $html. $servicio;
				$html = $html.'</td><td>';
				$html = $html.'</td><td>';
				$html = $html.'</td></tr>';
				$html=$html.'</table></div>';
				$html=$html.'<br/>';
				
				
			
			


App::import('Vendor','tcpdf/xtcpdf');


ob_clean();
$tcpdf = new XTCPDF();
$textfont = 'freesans';

$tcpdf->SetAuthor("SAS");
$tcpdf->SetAutoPageBreak( false );
$tcpdf->xheadertext = ( false );
$tcpdf->setHeaderFont(array($textfont,'',10));
$tcpdf->xheadercolor = array(255,255,255);

$tcpdf->xfootertext = 'Instituto Nacional de Salud Agricola Integral - Oficina de Bienestar Social';
$tcpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


$tcpdf->AddPage();

$tcpdf->SetMargins(15, 5, 5);

$tcpdf->SetTitle($property['OrdenServicio']['id']);
$tcpdf->SetTextColor(0, 0, 0);
$tcpdf->SetFont($textfont,'B',10);
// configuramos la calidad de JPEG
$tcpdf->setJPEGQuality(100);

$tcpdf->writeHTMLCell($w=0, $h=0, $x='', $y='', $html, $border=0, $ln=1, $fill=0, $reseth=true, $align='', $autopadding=true);
//$tcpdf->writeHTML($html, true, false, true, false, '');
$tcpdf->Output('Orden.pdf','I');
$tcpdf->Output();

// se pueden asignar mas datos, ver la documentación de TCPDF

//echo $tcpdf->Output('mi_archivo.pdf', 'I'); //el pdf se muestra en el navegador
//$tcpdf->Output("ejemplo.pdf", "I");
//echo $tcpdf->Output "mi_archivo.pdf", "I"; //el pdf se descarga

?>