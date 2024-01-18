## Ejercicios Variables PHP

- Declara una variable por cada tipo de dato y asignar un valor
- Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor booleano (que imprima true o false), un array y un valor nulo (que imprima NULL))
- ¿Qué tipo de dato son las siguientes variables?
    ```php
    //Fácil
    $nombre = "Luna";
    $apellido = "Lovegood";
    $edad = 42;
    $Ravenclaw = true;

    //Medio
    $promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
    $nombre_completo = $nombre . " " .
    $apellido;
    $presento_examen = (bool) 1;

    //Avanzado
    $numero_preguntas = 5 + "5";
    $numero_respuestas = "5" + 5;
    $promedio_maximo =
    $numero_respuestas / 1.0;
    $nargles = 3 + "5 nargles"
    ```


- Suponiendo estas variables
    ```php
    $es_un_michi_grande = true;
    $le_gusta_comer = true;
    $sabe_volar = false;
    $tiene_2_patas = false;
    ```
- ¿Cuál es el resultado según las tablas de verdad?
    ```php
    $es_un_michi_grande && $le_gusta_comer
    $es_un_michi_grande || $sabe_volar
    $sabe_volar || $tiene_2_patas
    !$le_gusta_comer
    !$le_gusta_comer || $es_un_michi_grande
    ```
- Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.
- Imprime en pantalla la longitud de la variable tipo string.
- Imprime en pantalla la cantidad de palabras de la variable tipo string.
- Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
variable original.
- Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
- Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
- Suma ambas variables de tipo integer e imprime en pantalla.
- Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
consola
- A las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola.
