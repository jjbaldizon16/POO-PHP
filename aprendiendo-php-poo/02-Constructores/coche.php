<?php

// Programacion Orientada a Objetos en PHP (POO)

// Definir una clase(molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche {

  // Atributos o propiedades(variables)

  public $color;
  public $modelo;
  public $velocidad;
  public $marca;
  public $caballaje;
  public $plazas;

  public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {

   $this->color = $color;
   $this->marca = $marca;
   $this->modelo = $modelo;
   $this->velocidad = $velocidad;
   $this->caballaje = $caballaje;
   $this->plazas = $plazas;

  }

  // Metodos, son acciones que hace el objeto(antes funciones)

  public function getColor() {

     // $this-> significa busca en esta clase el valor de la propiedad X

     return $this->color;

  }

  public function setColor($color) {
 
   $this->color = $color;
  }

  public function setModelo($modelo) {

   $this->modelo = $modelo;

  }

  public function getModelo() {

     return $this->modelo;

  }



public function acelerar() {

  $this->velocidad++;

}

public function frenar() {

$this->velocidad--;

}

public function getVelocidad() {

 return $this->velocidad;

} 


} //Fin definicion de la clase



?>