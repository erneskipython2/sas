<?php

class OrdenServicio extends AppModel {
public $name="OrdenServicio"; 

	public $validate=array('fecha'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),
	'servicio'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),'titular_id'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),'beneficiario_id'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),'establecimiento_id'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),'especialidad_id'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'));
	/*public $belongsTo ='Sexo';*/
	
	
    public $belongsTo = array(
        'Titular' => array(
            'className' => 'Titular',
            'order' => 'Titular.id DESC'
        ),
		 'Beneficiario' => array(
            'className' => 'Beneficiario',
            'order' => 'Beneficiario.id DESC'
        ),
		 'Establecimiento' => array(
            'className' => 'Establecimiento',
            'order' => 'Establecimiento.id DESC'
        ),
		 'Especialidad' => array(
            'className' => 'Especialidad',
            'order' => 'Especialidad.id DESC'
        )
    );
}


