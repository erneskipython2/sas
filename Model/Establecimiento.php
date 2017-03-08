<?php

class Establecimiento extends AppModel {
public $name="Establecimiento"; 

	public $validate=array('establecimiento'=>array('rule'=>'notEmpty',
	'message'=>'Este campo no puede estar vacio'),
	'rif'=>array('rule'=>array('between',1,15),'message'=>'Entre 1 a 9 digitos'));
	/*public $belongsTo ='Sexo';*/
	
	public $hasMany="OrdenServicio";
	public $displayField="establecimiento";
    public $belongsTo = array(
        'Estado' => array(
            'className' => 'Estado',
            'order' => 'Estado.id DESC'
        ),
		 'Estatip' => array(
            'className' => 'Estatip',
            'order' => 'Estatip.id DESC'
        )
    );
}


