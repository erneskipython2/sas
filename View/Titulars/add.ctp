
<p style="font-family:verdana;color:#08088A;font-size:24px;">Agregar Titulares</p>

<?php
    echo $this->Form->create('Titular');
    echo $this->Form->input('cedula');
    echo $this->Form->input('nombres');
    echo $this->Form->input('apellidos');
	echo $this->Form->input('sexo_id', array('type'=>'select','options' => $sexos,'empty'   => false));
	echo $this->Form->input('fecha_de_nacimiento');
	echo $this->Form->input('edocivil_id', array('type'=>'select','options'=>$civils,'empty'=>false,'label'=>'Estado civil'));
	echo $this->Form->input('nro_hijos',array('label'=>'Número de hijos'));
	echo $this->Form->input('direccion',array('label'=>'Dirección'));
	echo $this->Form->input('estado_id', array('type'=>'select','options' => $estados,'empty'=>false));
	echo $this->Form->input('municipio_id', array('type'=>'select','options' => $municipios,'empty'=>false));
	echo $this->Form->input('parroquia_id', array('type'=>'select','options' => $parroquias,'empty'=>false));
	echo $this->Form->input('telefono',array('label'=>'Teléfono'));
	echo $this->Form->input('email',array('label'=>'Email'));
	echo $this->Form->input('fecha_ingreso',array('label'=>'Fecha de Ingreso'));
	echo $this->Form->input('tiempo_otros',array('label'=>'Tiempo de servicio en otros entes'));
	echo $this->Form->input('insai_id', array('type'=>'select','options' => $insais,'empty'=>false,'label'=>'Adscrito a:'));
	echo $this->Form->input('sede_id', array('type'=>'select','options' => $sedes,'empty'=>false,'label'=>'Sede'));
	echo $this->Form->input('departamento_id', array('type'=>'select','options' => $departamentos,'empty'=>false,'label'=>'Departamento'));
    echo $this->Form->input('unidad_id', array('type'=>'select','options' => $unidads,'empty'=>false,'label'=>'Unidad'));
	echo $this->Form->input('cargo_id', array('type'=>'select','options' => $cargos,'empty'=>false,'label'=>'Cargo'));
	echo $this->Form->input('tipo_id', array('type'=>'select','options' => $tipos,'empty'=>false,'label'=>'Tipo de Personal'));
	echo $this->Form->input('funcion_actual',array('label'=>'Función actual'));
	echo $this->Form->input('sueldo_base',array('label'=>'Sueldo'));
	echo $this->Form->input('foto_titular', array('type' => 'file','label'=>'Foto digital'));
	echo $this->Form->input('partida_nacimiento', array('type' => 'file','label'=>'Partida de nacimiento digital'));
	echo $this->Form->input('cedula_digital', array('type' => 'file','label'=>'Cedula digital'));
	echo $this->Form->input('titulo_digital', array('type' => 'file','label'=>'Titulo digital'));
	echo $this->Form->end('Guardar titular');
	
?>
