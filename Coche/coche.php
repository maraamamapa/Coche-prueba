<?php
class Coche{
	public $marca;
	public $numCaballos;

public function __construct($marca,$numCaballos){
$this->marca=$marca;
$this->numCaballos=$numCaballos;
}

public function getMarca(){
	return $this->marca;
}
public function getNumCaballos(){
	return $this->numCaballos;
}

public function setMarca($marca){
	$this->marca=$marca;
}
public function setNumCaballos($numCaballos){
	$this->numCaballos=$numCaballos;
}
}