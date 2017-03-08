<?php

class Beneficiario extends AppModel {
public $name="Beneficiario"; 

	public $validate=array('cedula'=>array('Numeric'=>array('rule'=>'Numeric','required'=>true,
	'message'=>'Campo requerido, solo números'),'between'=>array('rule'=>array('between',1,9),'message'=>'Entre 1 a 9 digitos')),'nombres'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),
	'apellidos'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),
	'email' => 'email','born' => array('rule'=>'date','message'=>'Enter a valid date','allowEmpty' => true),'titular_id'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'));
	/*public $belongsTo ='Sexo';*/
	public $hasMany="OrdenServicio";
	public $displayField="cedula";
	
    public $belongsTo = array(
        'Sexo' => array(
            'className' => 'Sexo',
            'order' => 'Sexo.id DESC'
        ),
		 'Enfermedad' => array(
            'className' => 'Enfermedad',
            'order' => 'Enfermedad.id DESC'
        ),
		 'Discapacidad' => array(
            'className' => 'Discapacidad',
            'order' => 'Discapacidad.id DESC'
        ),
		 'Titular' => array(
            'className' => 'Titular',
            'order' => 'Titular.id DESC'
        )
    );
}


