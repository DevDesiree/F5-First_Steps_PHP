<?php

print_r("<h2>Variables</h2>");
/* 1. Declara una variable por cada tipo de dato y asignar un valor */
/* 2. Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor
booleano (que imprima true o false), un array y un valor nulo (que imprima NULL) */
print_r("<h4>Declara una variable por cada tipo de dato y asignar un valor </h4>\n");
print_r("<h4>Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor
booleano (que imprima true o false), un array y un valor nulo (que imprima NULL) \n </h4>");
echo "\n";

//String
$cadena_texto = "Hola mundo!";
echo "Cadena de texto: " . $cadena_texto . "\n" . "<br>";

//Integer
$numero_entero = 37;
echo "Numero entero: " . $numero_entero . "\n" . "<br>";

//Float
$numero_decimal = 36.5;
echo "Numero Decimal: " . $numero_decimal . "\n" . "<br>";

//Boolean
$verdadero = true;
echo "Valor Booleano: " . gettype($verdadero) . " y su valor es: " . var_export($verdadero, true) . "\n" . "<br>";

//Null
$nulo = null;
echo "Esta variable es de tipo: " . gettype($nulo) . "\n" . "<br>"; 

//Array
$lista = ["rosa", "verde", "azul"];
print_r($lista) . "\n" . "<br>";
;
echo "\n";

/* 3. ¿Qué tipo de dato son las siguientes variables? */
print_r("<h4>¿Qué tipo de dato son las siguientes variables?</h4> \n");
//Fácil
echo "<b>Fácil \n </b><br>";
$nombre = "Luna";
var_dump($nombre);
$apellido = "Lovegood";
var_dump($apellido);
$edad = 42;
var_dump($edad);
$Ravenclaw = true;
var_dump($Ravenclaw);
echo "\n <br>";


//Medio
echo "<b>Medio \n </b><br>";
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
var_dump($promedio);
$nombre_completo = $nombre . " " . $apellido;
var_dump($nombre_completo);
$presento_examen = (bool) 1;
var_dump($presento_examen);
echo "\n <br>";


//Avanzado
echo "<b>Avanzado \n </b><br>";
$numero_preguntas = 5 + "5";
var_dump($numero_preguntas);
$numero_respuestas = "5" + 5;
var_dump($numero_respuestas);
$promedio_maximo = $numero_respuestas / 1.0;
var_dump($promedio_maximo);
$nargles = 3 . "5 nargles";
var_dump($nargles);
echo "\n <br>";

/* 4. Suponiendo estas variables */
print_r("<h4>Suponiendo estas variables, ¿Cuál es el resultado según las tablas de verdad?</h4> \n");
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado según las tablas de verdad?
print_r("¿<b>Cuál es el resultado según las tablas de verdad? </b> \n <br>");
var_dump($es_un_michi_grande && $le_gusta_comer);
var_dump($es_un_michi_grande || $sabe_volar);
var_dump($es_un_michi_grande || $sabe_volar);
var_dump($sabe_volar || $tiene_2_patas);
var_dump(!$le_gusta_comer);
var_dump(!$le_gusta_comer || $es_un_michi_grande);

/* 5. Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
variable original. */
print_r("<h4>Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
variable original.</h4>\n");
$string_mayusculas = strtoupper($cadena_texto);
echo "La variable original era: $cadena_texto y ahora esta en mayúsculas: $string_mayusculas <br>";

/* 6. Imprime en pantalla la longitud de la variable tipo string. */
print_r("<h4>Imprime en pantalla la longitud de la variable tipo string.</h4>\n");
echo "La longitud de este string es de:" . strlen($cadena_texto);

/* 7. Imprime en pantalla la cantidad de palabras de la variable tipo string.*/
print_r("<h4>Imprime en pantalla la cantidad de palabras de la variable tipo string.</h4>\n");
echo "Cantidad de palabras en el string: " . str_word_count($cadena_texto);

/* 8. Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
variable original. */
print_r("<h4>Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
variable original.</h4>\n");
$orden_inverso = strrev($cadena_texto);

echo "String original: $cadena_texto , orden inverso : $orden_inverso";

/* 9. Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla. */
print_r("<h4>Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.</h4>\n");
$valor_original = "Gato";

$nuevo_valor = str_replace("Gato", "Michi", $valor_original);

echo "Valor original : $valor_original | Valor reemplazado : $nuevo_valor \n <br>";

/* 10. Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla */
print_r("<h4>Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla.</h4>\n");
$integer_1 = 10;
$integer_2 = 20;

echo "Valor de primera variable :  $integer_1  \n Valor de segunda variable : $integer_2";

/* 11. Suma ambas variables de tipo integer e imprime en pantalla. */
print_r("<h4>Suma ambas variables de tipo integer e imprime en pantalla.</h4>\n");
$suma_enteros = $integer_1 + $integer_2;

echo "La suma total de $integer_1 + $integer_2 es : $suma_enteros";

/* 12. Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
consola */
print_r("<h4> Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
consola</h4>\n");
$valor_1 = 1;
$valor_2 = 0;

echo "El tipo de dato de valor_1 es : " . gettype($valor_1) . "\n <br>";
echo "El tipo de dato de valor_2 es : " . gettype($valor_2) . "<br>";

/* 13. A las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
en pantalla y consola. */
print_r("<h4>A las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
en pantalla y consola.</h4>\n");
$valor_1 = true;
$valor_2 = false;

echo "El nuevo tipo de dato de valor_1 es : " . gettype($valor_1) . "\n <br>";
echo "El nuevo de dato de valor_2 es : " . gettype($valor_2) . "\n <br>";

?>



