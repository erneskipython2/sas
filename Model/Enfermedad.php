<?php
class Enfermedad extends AppModel{
public $name="Enfermedad";
public $hasMany="Beneficiario";
public $displayField="enfermedad";

}

?>