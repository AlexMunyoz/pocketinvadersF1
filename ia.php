<?php
class ia
{

  // propiedades las cuales se definen mediante public
  public $columna = 0;
  public $fila = 1;

  // Declaración de un método
  //en metodos usamos public function, get  pide y return da.
  public function getColumna() {
      return $this->columna = rand(1,3);
  }
  public function getFila() {
    //rand es random (aleatorio en ingles) y lleva un codigo el cual hara que sea aleatorio la fila (el numero)
      return $this->fila =rand(1,3);
  }
}

?>
