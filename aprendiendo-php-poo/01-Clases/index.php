<?php

echo "<h1>POO PHP</h1>";

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

 // Crear un objeto / Instanciar la clase

 $coche = new Coche();

 var_dump($coche);

 // Usar los metodos

 echo $coche->getVelocidad();

 $coche->setColor("Amarillo");

 echo "El color del coche es: ".$coche->getColor()."<br>";

 $coche->acelerar();
 $coche->acelerar();
 $coche->acelerar();
 $coche->acelerar();
 $coche->frenar();

 echo "La velocidad del coche es: ".$coche->getVelocidad()."<br>";

 $coche2 = new Coche();

 echo "El color del coche2 es: ".$coche2->getColor()."<br>";

 var_dump($coche);
 var_dump($coche2);

 $coche2->setColor("Verde");

 var_dump($coche2);

 echo "El color del coche2: ".$coche2->getColor()."<br>";

 echo "Y el modelo del coche2 es: ".$coche2->getModelo()."<br>";

 $coche2->setModelo("Jaguar");

 var_dump($coche2);

 echo "Pero ahora yo decido que el modelo del coche2 es: ".$coche2->getModelo()."<br>";

?>