<?php

class Titular extends AppModel {
public $name="Titular"; 

	public $validate=array('cedula'=>array('Numeric'=>array('rule'=>'Numeric','required'=>true,
	'message'=>'Campo requerido, solo números'),'between'=>array('rule'=>array('between',1,9),'message'=>'Entre 1 a 9 digitos')),'nombres'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),
	'apellidos'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),
	'nro_hijos'=>array('Numeric'=>array('rule'=>'Numeric','required'=>true,
	'message'=>'Campo requerido, solo números')),'email' => 'email','born' => array('rule'=>'date','message'=>'Enter a valid date','allowEmpty' => true));
	/*public $belongsTo ='Sexo';*/
	public $hasMany=array(
        'OrdenServicio' => array(
            'className' => 'OrdenServicio'),'Beneficiario'=>array('className'=>'Beneficiario'));
	public $displayField="cedula";
	
    public $belongsTo = array(
        'Sexo' => array(
            'className' => 'Sexo',
            'order' => 'Sexo.id DESC'
        ),
		 'Edocivil' => array(
            'className' => 'Edocivil',
            'order' => 'Edocivil.id DESC'
        ),
		 'Insai' => array(
            'className' => 'Insai',
            'order' => 'Insai.id DESC'
        ),
		 'SedeInsai' => array(
            'className' => 'SedeInsai',
            'order' => 'SedeInsai.id DESC'
        ),
		 'Departamento' => array(
            'className' => 'Departamento',
            'order' => 'Departamento.id DESC'
        ),
		 'Unidad' => array(
            'className' => 'Unidad',
            'order' => 'Unidad.id DESC'
        ),
		 'Cargo' => array(
            'className' => 'Cargo',
            'order' => 'Cargo.id DESC'
        ),
		 'Tipo' => array(
            'className' => 'Tipo',
            'order' => 'Tipo.id DESC'
        ),
		 'Estado' => array(
            'className' => 'Estado',
            'order' => 'Estado.id DESC'
        ),
		 'Municipio' => array(
            'className' => 'Municipio',
            'order' => 'Municipio.id DESC'
        ),
		 'Parroquia' => array(
            'className' => 'Parroquia',
            'order' => 'Parroquia.id DESC'
        )
    );
}


