<?php
echo $this->Html->css('estilo2',array('inline' => false));
?>
<p style="font-family:verdana;color:#08088A;font-size:24px;">Registro de Establecimientos</p>
<?php echo $this->Html->link('Agregar',array('action'=>'add'),array('class' => 'estiloboton','SPAN title'=>"Agregar un registro"));?> <br />
<?php if(empty($establecimientos)):?>
NO HAY ESTABLECIMIENTOS REGISTRADOS
<?php else:?>
 
<table>
	<tr>
		<th>Establecimiento</th>
		<th>Rif</th>
		<th>Direccion</th>
		<th>Telefono</th>
		<th>Acciones</th>
	</tr>
<?php foreach($establecimientos as $establecimiento):?>
	<tr>
		<td><?php echo $establecimiento['Establecimiento']['establecimiento'];?> </td>
		<td><?php echo $establecimiento['Establecimiento']['rif'];?></td>
		<td><?php echo $establecimiento['Establecimiento']['direccion'];?></td>
		<td><?php echo $establecimiento['Establecimiento']['telefono'];?></td>
		<td>
		<?php echo $this->Html->link('Editar', array('action'=>'edit',$establecimiento['Establecimiento']['id']),array('class' => 'estilobotoneditar','SPAN title'=>"Editar el registro"));?>
		<?php echo $this->Form->postLink('Eliminar',array('action'=>'delete', $establecimiento['Establecimiento']['id']),array('class' => 'estilobotoneliminar','SPAN title'=>"Eliminar el registro"), array('confirm'=>'¿Realmente desea eliminar a '.$establecimiento['Establecimiento']['establecimiento'].'?'));?>
		</td>
	</tr>
<?php endforeach;?>
</table>
<?php endif;?><br />

