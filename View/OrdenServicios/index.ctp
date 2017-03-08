<?php
echo $this->Html->css('estilo2',array('inline' => false));
?>

<p style="font-family:verdana;color:#08088A;font-size:24px;">Pagina Principal - Solicitud de Ordenes del SAS</p>
<?php echo $this->Html->link('Agregar',array('action'=>'add'),array('class' => 'estiloboton','SPAN title'=>"Agregar un registro"));?> <br />

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
		<th>Acciones</th>
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
		<td>
		<?php echo $this->Html->link('Ver', array('action'=>'viewPdf',$ordenservicio['OrdenServicio']['id']),array('class' => 'estiloboton','SPAN title'=>"Ver el registro"));?>
		<?php echo $this->Html->link('Editar', array('action'=>'edit',$ordenservicio['OrdenServicio']['id']),array('class' => 'estilobotoneditar','SPAN title'=>"Editar el registro"));?>
		<?php echo $this->Form->postLink('Eliminar',array('action'=>'delete', $ordenservicio['OrdenServicio']['id']),array('class' => 'estilobotoneliminar','SPAN title'=>"Eliminar el registro"), array('confirm'=>'¿Realmente desea eliminar a '.$ordenservicio['OrdenServicio']['id'].'?'));?>
		</td>
	</tr>
<?php endforeach;?>
</table>
<?php endif;?><br />

