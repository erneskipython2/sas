<?php
echo $this->Html->css('estilo2',array('inline' => false));
?>
<p style="font-family:verdana;color:#08088A;font-size:24px;">Registro de Beneficiarios</p>

<?php echo $this->Html->link('Agregar',array('action'=>'add'),array('class' => 'estiloboton','SPAN title'=>"Agregar un registro"));?> <br />
<?php if(empty($beneficiarios)):?>
NO HAY BENEFICIARIOS REGISTRADOS
<?php else:?>
 
<table>
	<tr>
		<th>Cedula</th>
		<th>Nombres</th>
		<th>Apellidos</th>
		<th>Titular</th>
		<th>Acciones</th>
	</tr>
<?php foreach($beneficiarios as $beneficiario):?>
	<tr>
		<td><?php echo $beneficiario['Beneficiario']['cedula'];?> </td>
		<td><?php echo $beneficiario['Beneficiario']['nombres'];?></td>
		<td><?php echo $beneficiario['Beneficiario']['apellidos'];?></td>
		<td><?php echo $beneficiario['Titular']['cedula'];?></td>
		<td>
		<?php echo $this->Html->link('Editar', array('action'=>'edit',$beneficiario['Beneficiario']['id']),array('class' => 'estilobotoneditar','SPAN title'=>"Editar el registro"));?>
		<?php echo $this->Form->postLink('Eliminar',array('action'=>'delete', $beneficiario['Beneficiario']['id']),array('class' => 'estilobotoneliminar','SPAN title'=>"Eliminar el registro"), array('confirm'=>'¿Realmente desea eliminar a '.$beneficiario['Beneficiario']['nombres'].'?'));?>
		</td>
	</tr>
<?php endforeach;?>
</table>
<?php endif;?><br />

