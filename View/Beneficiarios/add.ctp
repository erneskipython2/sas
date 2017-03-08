
<p style="font-family:verdana;color:#08088A;font-size:24px;">Agregar Beneficiario</p>

<?php
    echo $this->Form->create('Beneficiario');
    echo $this->Form->input('titular_id', array('type'=>'select','options'=>$titulars,'empty'=>false,'empty' => '(Seleccione)','label'=>'Titular Afiliado al SAS'));
	echo $this->Form->input('parentesco_id', array('type'=>'select','options' => $parentescos,'empty'   => false));
	echo $this->Form->input('cedula');
    echo $this->Form->input('nombres');
    echo $this->Form->input('apellidos');
	echo $this->Form->input('sexo_id', array('type'=>'select','options' => $sexos,'empty'   => false));
	echo $this->Form->input('fecha_de_nacimiento');	
	echo $this->Form->input('telefono',array('label'=>'Teléfono'));
	echo $this->Form->input('email',array('label'=>'Email'));
	echo $this->Form->input('es_embarazada', array('options' => array('Si', 'No'),'values' => array('Si','No'),'empty' => '(Seleccione)','label'=>'Esta embarazada?'));
	echo $this->Form->input('es_recurrente', array('options' => array('Si', 'No'),'values' => array('Si','No'),'empty' => '(Seleccione)','label'=>'Es recurrente?'));
	echo $this->Form->input('enfermedad_id', array('type'=>'select','options'=>$enfermedads,'empty'=>'(Seleccione)','label'=>'Enfermedad recurrente'));
	echo $this->Form->input('es_discapacidad', array('options' => array('Si', 'No'),'values' => array('Si','No'),'empty' => '(Seleccione)','label'=>'Presenta discapacidad?'));
    echo $this->Form->input('discapacidad_id', array('type'=>'select','options'=>$discapacidads,'empty'=>'(Seleccione)','label'=>'Discapacidad'));	
	echo $this->Form->end('Guardar Beneficiario');
	
?>
