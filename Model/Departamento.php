<?php

class Departamento extends AppModel{
public $name="Departamento";
public $hasMany="Titular";
public $displayField="departamento";

}

?>