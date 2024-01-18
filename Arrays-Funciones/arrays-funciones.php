<?php
echo "<div style='text-align: center;'>";
echo "<h2>Arrays/Funciones</h2>";
/* 1. Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
en pantalla y por consola el resultado */
print_r("<h4>Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
en pantalla y por consola el resultado.</h4>\n");

function suma($num1, $num2)
{

    return $num1 + $num2;
};

echo "La suma de 10 + 43 es: " . suma(10, 43) . "\n";

/* 2. Crear función que determine si un número es par o impar. Imprime por consola y pantalla */
print_r("<h4>Crear función que determine si un número es par o impar. Imprime por consola y pantalla.</h4>\n");
function par_impar($numero)
{

    return $numero % 2 == 0 ? "El numero $numero es par " : "El número $numero es impar" . "\n";
};

echo par_impar(7);


/* 3. Crear un array de 10 números */
print_r("<h4>Crear un array de 10 números.</h4>\n");
$array_nums = [2, 4, 5, 8, 22, 12, 7, 20, 40, 21];

/* 4. Obtén el largo del array e imprime en pantalla y consola. */
print_r("<h4>Obtén el largo del array e imprime en pantalla y consola.</h4>\n");
$longitud_array = count($array_nums);
echo "La longitud del array tiene: $longitud_array caracteres";

/* 5. Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla */
print_r("<h4>Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla.</h4>\n");
array_push($array_nums, "Manzana");
echo "Se añadió un elemento nuevo al array: ";
print_r($array_nums);

/* 6. Ahora agrega 2 elementos más a tu array e imprime en pantalla. */
print_r("<h4>Ahora agrega 2 elementos más a tu array e imprime en pantalla.</h4>\n");
array_push($array_nums, "Naranja", "Banana");
echo "Se añadió dos elementos nuevos al array: ";
print_r($array_nums);

/* 7. Crea un nuevo array y concaténalo con el anterior e imprime en pantalla. */
print_r("<h4>Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.</h4>\n");
$array_nuevo = ["Pajaro", "Gato", "Oso"];
$array_concatenado = array_merge($array_nums, $array_nuevo);
echo "Se concatenaron dos arrays : ";
print_r($array_concatenado);

/* 8. Crear una función que imprima en consola y pantalla todos los números de un array en una lista */
print_r("<h4>Crear una función que imprima en consola y pantalla todos los números de un array en una lista.</h4>\n");

$numeros_array = [2,23,31,40,50,89];
function recorrer_array($numeros_array){
    
    echo "Los números del array son: ";
    foreach($numeros_array as $numero){
        echo $numero . " ";
    }
};
recorrer_array($numeros_array);

/* 9. Crear una función que añade un número al array */
print_r("<h4>Crear una función que añade un número al array.</h4>\n");
function agregar_numero($numeros_array, $otro_numero){
    array_push($numeros_array, $otro_numero);
    echo "El número $otro_numero se ha añadido al array : ";
    print_r($numeros_array);
}
agregar_numero($numeros_array, 888);

/* 10. Crear una función que elimine los números pares de ese array. */
print_r("<h4>Crear una función que elimine los números pares de ese array.</h4>\n");
function eliminar_pares(&$numeros_array){
    $numeros_array = array_filter($numeros_array, function ($numero)
    {
        return $numero % 2 == 1;
    });
};
echo "Array original : ";
print_r($numeros_array);
eliminar_pares($numeros_array);
echo "Array con numeros pares eliminados : ";
print_r($numeros_array);

/* 11. Crear una función que devuelva el número mayor de un array. */
print_r("<h4>Crear una función que devuelva el número mayor de un array.</h4>\n");
function numero_max($numeros_array){
    $max_number = max($numeros_array);
    return $max_number;
};
echo "El numero mayor del array es: " . numero_max($numeros_array) . "\n";

/* 12. Crear una función que devuelva el número menor de un array. */
print_r("<h4>Crear una función que devuelva el número menor de un array.</h4> \n");
function numero_min($numeros_array){
    $min_number = min($numeros_array);
    return $min_number;
}
echo "El numero menor del array es: " . numero_min($numeros_array) . "\n";

/* 13. Crear un función que convierta en minúsculas todas las letras de un texto. */
print_r("<h4>Crear un función que convierta en minúsculas todas las letras de un texto.</h4> \n");

$texto_mayus = "HOLA, QUE TAL";
function char_minus($texto_mayus){
    $texto_minus = strtolower($texto_mayus);
    return $texto_minus;
}
echo "Texto original: $texto_mayus \n <br>";
echo "Texto modificado a minusculas: " . char_minus($texto_mayus);

/* 14. Crear una función que convierta en mayúsculas todas las letras de un texto. */
print_r("<h4>Crear una función que convierta en mayúsculas todas las letras de un texto.</h4> \n");
$texto_minus = "hola, como estas?";
function char_mayus($texto_minus){
    $texto_mayus = strtoupper($texto_minus);
    return $texto_mayus;
}
echo "Texto original: $texto_minus \n <br>";
echo "Texto modificado a minusculas: " . char_minus($texto_minus);

/* 15. Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
en mayúscula. */
print_r("<h4>Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
en mayúscula.</h4> \n");
$array_nombres = ["luis", "pepe", "juanito"];
function primera_letra_mayus($array_nombres){
    foreach ($array_nombres as $primer_char) {
        $primer_char = ucfirst($primer_char);
        echo "<li>". $primer_char ."</li>\n";
    }
}
primera_letra_mayus($array_nombres);
echo "</div>"
?>