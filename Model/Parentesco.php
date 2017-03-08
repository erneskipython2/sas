<?php
class Parentesco extends AppModel{
public $name="Parentesco";
//public $hasMany="Beneficiario";
public $hasMany=array(
        'Beneficiario' => array(
            'className' => 'Beneficiario'),'OrdenServicio'=>array('className'=>'OrdenServicio'));



public $displayField="parentesco";

}

?>