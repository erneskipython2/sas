<?php
echo $this->Html->css('estilo2',array('inline' => false));
?>
<p style="font-family:verdana;color:#08088A;font-size:24px;">Registro de Titulares</p>


<?php echo $this->Html->link('Agregar',array('action'=>'add'),array('class' => 'estiloboton','SPAN title'=>"Agregar un registro"));?> <br />

<?php if(empty($titulares)):?>
NO HAY TITULARES REGISTRADOS
<?php else:?>

<table>
	<tr>
		<th>Cedula</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Sexo</th>
		<th>Acciones</th>
	</tr>
<?php foreach($titulares as $titulare):?>
	<tr>
		<td><?php echo $titulare['Titular']['cedula'];?> </td>
		<td><?php echo $titulare['Titular']['nombres'];?></td>
		<td><?php echo $titulare['Titular']['apellidos'];?></td>
		<td><?php echo $titulare['Sexo']['sexo'];?></td>
		<td>
		<?php echo $this->Html->link('Editar', array('action'=>'edit',$titulare['Titular']['id']),array('class' => 'estilobotoneditar','SPAN title'=>"Editar el registro"));?>
		<?php echo $this->Form->postLink('Eliminar',array('action'=>'delete', $titulare['Titular']['id']),array('class' => 'estilobotoneliminar','SPAN title'=>"Eliminar el registro"), array('confirm'=>'¿Realmente desea eliminar a '.$titulare['Titular']['nombres'].'?'));?>
		</td>
	</tr>
<?php endforeach;?>
</table>
<?php endif;?><br />