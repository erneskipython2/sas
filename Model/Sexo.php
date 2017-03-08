<?php
class Sexo extends AppModel{
public $name="Sexo";
public $hasMany=array(
        'Titular' => array(
            'className' => 'Titular'),'Beneficiario'=>array('className'=>'Beneficiario'));
public $displayField="sexo";

}

?>