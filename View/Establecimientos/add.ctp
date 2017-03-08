
<p style="font-family:verdana;color:#08088A;font-size:24px;">Agregar Establecimiento</p>

<?php
    echo $this->Form->create('Establecimiento');
    echo $this->Form->input('rif');
    echo $this->Form->input('establecimiento');
	echo $this->Form->input('estatip_id', array('type'=>'select','options' => $estatips,'empty'   => false, 'label'=>'Tipo de establecimiento'));
	echo $this->Form->input('estado_id', array('type'=>'select','options' => $estados,'empty'   => false));
	echo $this->Form->input('direccion');	
	echo $this->Form->input('telefono',array('label'=>'Teléfono'));
	echo $this->Form->end('Guardar Establecimiento');
	
?>

