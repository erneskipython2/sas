
<p style="font-family:verdana;color:#08088A;font-size:24px;">Nueva Orden de Servicio</p>

<?php
    echo $this->Form->create('OrdenServicio');
    echo $this->Form->input('fecha');
	echo $this->Form->input('titular_id', array('type'=>'select','options' => $titulars,'empty'   => false, 'label'=>'Titular'));
    echo $this->Form->input('beneficiario_id', array('type'=>'select','options' => $beneficiarios,'empty'   => false, 'label'=>'Beneficiario'));
	echo $this->Form->input('establecimiento_id', array('type'=>'select','options' => $establecimientos,'empty'   => false, 'label'=>'Establecimiento'));
	echo $this->Form->input('especialidad_id', array('type'=>'select','options' => $especialidads,'empty'   => false, 'label'=>'Especialidad'));
	echo $this->Form->input('servicio');
	echo $this->Form->end('Guardar Orden');
	
?>

