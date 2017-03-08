<?php
class Especialidad extends AppModel{
public $name="Especialidad";
public $hasMany="OrdenServicio";
public $displayField="especialidad";

}

?>