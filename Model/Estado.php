<?php
class Estado extends AppModel{
public $name="Estado";
public $hasMany=array(
        'Titular' => array(
            'className' => 'Titular'),'Establecimiento'=>array('className'=>'Establecimiento'));
public $displayField="estado";

}

?>