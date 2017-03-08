<!DOCTYPE html>
<html>
<body style="background-color:#CEE3F6;">
<?php echo $this->Html->image('LOGO.png', array('alt' => 'CakePHP'));?>
<p style="font-family:verdana;color:#08088A;font-size:24px;">Pagina Principal - Solicitud de Ordenes del SAS</p>
<?php if(empty($ordenservicios)):?>
NO HAY ORDENES REGISTRADAS
<?php else:?>
 
<table>
	<tr>
		<th>Nro de Orden</th>
		<th>Fecha</th>
		<th>Titular</th>
		<th>Beneficiario</th>
		<th>Establecimiento</th>
		<th>Especialidad</th>
		<th>Servicio</th>
	</tr>
<?php foreach($ordenservicios as $ordenservicio):?>
	<tr>
		<td><?php echo $ordenservicio['OrdenServicio']['id'];?> </td>
		<td><?php echo $ordenservicio['OrdenServicio']['fecha'];?> </td>
		<td><?php echo $ordenservicio['Titular']['cedula'];?></td>
		<td><?php echo $ordenservicio['Beneficiario']['cedula'];?></td>
		<td><?php echo $ordenservicio['Establecimiento']['establecimiento'];?></td>
		<td><?php echo $ordenservicio['Especialidad']['especialidad'];?></td>
		<td><?php echo $ordenservicio['OrdenServicio']['servicio'];?></td>

	</tr>
<?php endforeach;?>
</table>
<?php endif;?><br />

</body>
</html>