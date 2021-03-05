<?php

echo "<h1>Prueba</h1>";

// Programacion Orientada a Objetos en PHP (POO)

// Definir una clase(molde para crear mas objetos de tipo coche con caracteristicas parecidas)

class Coche {

  // Atributos o propiedades(variables)

  public $color = "rojo";
  public $modelo ="Aventador";
  public $velocidad = 300;
  public $marca = "Ferrari";
  public $caballaje = 500;
  public $plazas = 2;

  // Metodos, son acciones que hace el objeto(antes funciones)

  public function getColor() {

     // $this-> significa busca en esta clase el valor de la propiedad X

     return $this->color;

  }

  public function setColor($color) {
 
   $this->color = $color;
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