<?php
echo "<div style='text-align: center;'>";
print_r("<h2>Clases y Funciones PHP");
/* 1. Crear una clase coche con sus atributos y un atributo puede ser de tipo array */
print_r("<h4>Crear una clase coche con sus atributos y un atributo puede ser de tipo array.</h4> \n");
/* 2. Crear una función que devuelva la marca del carro. */
print_r("<h4>Crear una función que devuelva la marca del carro.</h4> \n");

/* 3. Crear una función que devuelva la cantidad de puertas que tiene el carro.*/
print_r("<h4>Crear una función que devuelva la cantidad de puertas que tiene el carro.</h4> \n");

/* 4. Crear una función que devuelva un atributo del array. */
print_r("<h4>Crear una función que devuelva un atributo del array.</h4> \n");

class Coche{
   public $marca;
   public $numero_puertas;
   public $caracteristicas = [];

   public function __construct($marca, $numero_puertas, $caracteristicas)
   {
        $this->marca = $marca;
        $this->numero_puertas = $numero_puertas;
        $this->caracteristicas = $caracteristicas;
   }

   function obtener_marca(){
        return $this->marca;
   }

   function obtener_numero_puertas(){
        return $this->numero_puertas;
   }

   function obtener_elementos_array(){
        return $this->caracteristicas;
   }
}

$caracteristicas_coche = ["Airbags", "Aire Acondicionado", "GPS"];
$mi_coche = new Coche("BMW", 5, $caracteristicas_coche);

echo "La marca de este coche es : " . $mi_coche->obtener_marca() . "\n <br>"; 
echo "Este vehículo tiene : " .  $mi_coche->obtener_numero_puertas() . " puertas \n <br>";
echo "Y cuenta con estas características : " . implode(", ", $mi_coche->obtener_elementos_array()) . "\n <br>";  
echo "</div>"
?>
