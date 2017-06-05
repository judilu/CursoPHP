<?php

    //echo 'Hola mundoo!';
    /*
        DECLARAR VARIABLES
        $variableStringg = "cadena"; 
        $variableIntt = 5;
        $variableBooll = false;
        $variableArray = array();
        $variableNulll = null;
    */

    /*
    $variableCadena = "JUDITH MORENO <br>";
    $variableNum = 23;
    $variableBooll = true; // estas variables van en minusculas y null tambien y false tambien
    $variableArray = array(4,5);
    echo $variableCadena;
    var_dump($variableCadena); // Estas instrucción de retorna el tipo y lo que trae la variable se utiliza para desarrollo
    echo $variableNum;
    include("./lib/codigo.php");
        
    echo $variableBooll;
    var_dump($variableArray);
    //Cuando tengamos un número y es muy grande mejor utilizar cadena por que luego se puede perder
    */
    /*
        echo.- Dar salida puede o no llevar parentesis
        isset.- Verificar la existencia o declaración de una variable o no sea null
        print_r.- Es similar al var_dump pero no especifica tanto.
        var_dump.- Es para imprimir da más detalle como el tipo y el valor
        die.- termina la ejecución del script no continua se le puede enviar una palabra.
        exit.- es igual que die.
        include.- es para incluir el archivo si no se encuentra solo marca warning.
        require.- Forzosamente tiene que incluir el archivo y si no puede para el documento

        Ruta absoluta: viene toda la ruta c:/ balbalbal
        Ruta relativa: se coloca el puro nombre
        ./ -> significa directorio actual
        Es preferible especificar una ruta como ./ por que puede ir a buscar en otro lado primero
        y es preferible usar rutas relativas para poder migrar facilmente.
        Si no se especifica el ./ primero va y busca en el include Path.
        /.. -> Se utiliza para salirse un directorio hacia atrás

        include_once.- es lo mismo que el include pero si ya está incluido lo omite.
        require_once.- 
    */
    /*
    var_dump(isset($variableCadena));
    print_r($variableArray);
    */
    /*die("Error");
    echo("hola");*/

    /*exit("Error");
    echo("hola");*/

    /*
        OPERACIONES
        $a = 5 + 2 Suma
        $a = 5 - 2 Resta
        $a = 5 * 2 Multiplicación
        $a = 5 / 2 Division

        Operadores de asignación
        =.- Asignar normalmente
        += Se suma
        -=
        .= Se concatenan cadenas
    */

    /*
    $numero1 = 4;
    $numero2 = 6;
    $resultado = 0; //Inicializar 


    echo ("Número1 = " . $numero1 . "<br>");
    echo ("Número2 = " . $numero2 . "<br>");
   
    $resultado = $numero1 + $numero2;
    echo ("Resultado Suma = " . $resultado . "<br>");

    $resultado = $numero1 - $numero2;
    echo ("Resultado Resta = " . $resultado . "<br>");

    $resultado = $numero1 * $numero2;
    echo ("Resultado Multiplicación = " . $resultado . "<br>");

    $resultado = $numero1 / $numero2;
    echo ("Resultado División = " . $resultado . "<br>");

    $resultado = $numero1 % $numero2;
    echo ("Resultado Modulo = " . $resultado . "<br>");

    $resultado = $numero1 ** $numero2;
    echo ("Resultado Exponenciar= " . $resultado . "<br>");

    $resultado = - $numero2;
    echo ("Resultado = " . $resultado . "<br>");

    $resultado += $numero2;
    echo ("Resultado = " . $resultado . "<br>");

    $resultado -= $numero1;
    echo ("Resultado = " . $resultado . "<br>");

    $resultado .= $numero2;
    echo ("Resultado = " . $resultado . "<br>");
    */

    /*
        Operadores Logicos
        && no usar AND
        || no usar OR
        xor.- Espera que alguno de los dos sea verdadero pero si los dos son verdaderos es falso
        !.- Negación

    */

    /*
    $expresion1 = false;
    $expresion2 = true;
    $resultado = false;

    $resultado = $expresion1 && $expresion2;
    var_dump($resultado);

    $resultado = $expresion1 || $expresion2;
    var_dump($resultado);

     $resultado = !$expresion1 ;
    var_dump($resultado);
    */

    /*
        OPERADORES DE COMPARACIÓN
        == valor
        === tipo y valor
        != diferente o <>
        !== tipo y valor
        <,<= menor, menor o igual
        >,>= mayor, mayor o igual
    */

    /*
    $expresion1 = 5;
    $expresion2 = 7;

    $resultado = false;

    $resultado = $expresion1 < $expresion2;
    var_dump($resultado);

    $resultado = $expresion1 > $expresion2;
    var_dump($resultado); */

    /*
        CADENAS

        $variable = "Una cadena";
        $variable = 'tambien una cadena';
    */

    /*
    $cadena = 'Judith';
    $resultado = "<br> La cadena resultado es: $cadena";
    //imprime el valor de cadena
    var_dump($resultado);

    $resultado = '<br> La cadena resultado es: $cadena <br>';
    //imprime tal cual el texto
    var_dump($resultado);

    $resultado = " <br> La {$cadena}cadena resultado es: $cadena";
    //imprime el valor de cadena
    var_dump($resultado);

    $resultado = "<br> La cadena resultado es: " . $cadena;
    //concatena
    var_dump($resultado);

     $resultado .= $cadena;
    //concatena
    var_dump($resultado);

    echo("<br> \"");

    echo('<br> La frase es "Nuevo dia"');
    */

    /*
        Entrada dinamica al script

         $valor = $_GET['valor'];

    */
    // El GET se utiliza en la URL y el POST se utiliza en el cuerpo
    /*
    $valor = $_GET['valor'];
    $valor2 = $_GET['valor2'];

    $cadena = "$valor | $valor2";

    var_dump($cadena);   
    */
    /*
        TIPOS DE ERROR
        notice.- ejem: variables no definidas.CORRE..!
        warning.- permite continuar con la ejecución pero si hay que averiguar que paso (include,division entre cero) CORRE..!
        fatal error.- se detiene la ejecución (require) NO CORRE..!

        en el paseo .- ni siquiera comienza la ejecución

        En un productivo se inhabilitan los mensajes (ni notice, warning, fatal error)
    */

    /*
    //Notice
    $resultado = 0;
    $salida = "";
    echo $salida;

    //Warning
    $resultado = 5/5;
    echo $resultado;
    include("hola.php");

    //fatal error
    require("hola.php"); */

    /*
        ARREGLOS
        $arreglo = array();

        $arreglo[0] = 1;
        $arreglo[] = 1;
        $arreglo["uno"] = 1;
    */
    /*
    //No necesariamente ocupan de ser de un solo tipo
    $arreglo = array(4,"judith",true,null,6.2);
    $arreglo2 = [4,"judith",true,null,6.2];
    var_dump($arreglo);
    var_dump($arreglo2);
    echo $arreglo[1] . "<br>";

    // Puedo agregar valores
    $arreglo[5] = 24;
    echo count($arreglo);
    echo ($arreglo[5]);

    //Array asociativo
    $arreglo3 = array('nombre' => 'Judith', 0 => 'Toscano');

    //un arreglo foreach lo recorre el array tal cual
    var_dump($arreglo3);

    //Arreglos bidimensionales
    $arregloBidi[] = [3,9];
    $arregloBidi[] = [4,10];

    var_dump($arregloBidi[0][0]);

    $arreglo[0] = [];
    $arreglo[1] = [];

    $arreglo[0][0] = [5,16];
    $arreglo[1][0] = [67,23];
    var_dump($arreglo[1][0][1]);

    //Construir arreglos
    $arreglo = array();
    $arreglo = [];
    
    $arreglo = array(3,6,8);
    $arreglo = [5,6,8];

    $arreglo = array("nombre" => 5,"otro" => 6);
    $arreglo = ["nombre" => 5,"otro" => 6];

    $arreglo[] = 10;
    $arreglo["nombre"] = 10;
    $arreglo[56] = 10;

    count($arreglo);
    */

    /*
    //Estructuras de control
    $valor = 5;
    if ($valor == 3) {
        // Sentencias verdad
        echo 'Verdad';
    } elseif($valor == 5){
        // Sentencias verdad
        echo 'Es 5';
    } else {
        //Sentencias Falso
        echo 'falso';
    }

    //Operador terniario para asignación, debe ir forzosamente los dos
    $valor = 5 == 5 ? "verdad" : "falso";
    echo($valor); */
    /*
    // Switch

    $numero = $_GET['num'];
    switch($numero) {
        case 1:
            echo "El numero es 1";
            break;
        case 2:
            echo "El numero es 2";
            break;
         case "nombre":
            echo "es un nombre";
            break;
        default;
            echo "si no entra a ninguno entra aquí";
            break;
    }*/
    /*
    //for 
    $arreglo = [3,5,7,9];

     //$arreglo = [3,5,7,9,10 => 11]; Esto marcaria un error por que el arreglo quiere acceder a la posición 4 y no tiene nada
    $cantidad = count($arreglo);
    for ($indice = 0; $indice < $cantidad; $indice++) {
        //Cuerpo del ciclo for
        echo $arreglo[$indice] . "<br>";
    } */

    /*
    // while
    $arreglo = [3,5,7,9];
    $indice = 0;
    $cantidad = count($arreglo);

    while ($indice < $cantidad) {
        echo $arreglo[$indice] . "<br>";
        $indice++;
    } */


    /*
    //do while
    $arreglo = [2,3,4,5];
    $indice = 0;
    $cantidad = count($arreglo);

    do {
        // por lo menos se realiza una vez
        //Cuerpo de do while
        echo $arreglo[$indice] . "<br>";

        $indice++;
    } while($indice < $cantidad); */

    /*
    //foreach
    // va leyendo a como estan ordenados en memoria. no importa el tipo ni nada
    $arreglo = [2,"edad" => 23,3,4,5,"nombre" => "carlos"];
    foreach ($arreglo as $key => $valor) {
        //Cuerpo
        echo "$key => " .  $valor . "<br>";
    }

    $arreglo1 = [2,3,4,5];
    foreach ($arreglo1 as $valor) {
        //Cuerpo
        echo $valor . "<br>";
    }*/

    /*
    //Funciones
    function imprimir() {
        echo "Soy una función <br>";
    }

    function valor() {
        return 10;
    }
    echo "Se llamara una función <br> ";

    //funcion con argumentos
    // En php no existe la sobrecarga de funciones, pues marcaria una redefinición
    // Se utiliza cuando no manda parametro y por defecto en este caso toma 10
    // si se dejan parametros opcionales de preferencia que sean al final de la lista de parametros.
    function cuadrado($parametro = 10) {
        return $parametro * $parametro;
    }

    function sumar($numero1,$numero2) {
        return $numero1 +  $numero2;
    }

    //El & es para pasar una variable por referencia
    function incrementar(&$numero1,$numero2 = 10) {
        $numero1 += $numero2;
    }
    imprimir();
    $valor = valor();
    echo $valor . "<br>";

    $valor = cuadrado(4);
    echo $valor . "<br>";

    $valor = sumar(4,6);
    echo $valor . "<br>";

    $valor = 0;
    incrementar($valor,5);
    echo $valor;*/
    
    /*
    //FUnciones anonimas
    $incrementar = null;

    $incrementar = function(&$numero1,$numero2 = 10) {
        $numero1 += $numero2;
    };

    echo "Se llamara a una función <br>";
    
    $valor = 2;
    $incrementar($valor);
    echo $valor; */

    /*
    //clousher
    $incrementar = null;
    $valor = 2;

    $incrementar = function() use ($valor) {
        return $valor + 10;
    };

    echo "Se llamara a una función <br>";

    echo $incrementar(); */

    //Clases PHP es orientado a objetos

    /*class NombreClase{
        function nombre(argument){

        }
    }*/

    /* DOCUMENTACIÓN AL INICIO */

    /*
    CLASES
    require './clases/Cliente.php';

    $cliente = new Cliente();

    $cliente->setNumero(10);
    $cliente->nombre = 'Judith';
    $cliente->apellido = 'Moreno';
    $cliente->edad = 24;
    $cliente->fechaAlta = new DateTime(); // Se puede mandar directamente al parametro por que es publico.$_COOKIE

    var_dump($cliente);

    $cliente->imprimir(); */

    /*
    // Ejemplo de interfacez

    require './clases/Calculadora.php';
    require './clases/CalculadoraCientifica.php';
    

    $calculadora = new Calculadora();
    $calculadoraCientifica = new CalculadoraCientifica();

    echo $calculadora->sumar(4,10) . "<br>";
    echo $calculadoraCientifica->elevar(4,3) . "<br>";
    */

    /*
        JSON
        Notación de objetos de JavaScript

        {
            "nombre": "Judith",
            "apellido": "Moreno",
            "direccion" : {
                            "calle": "Alvaro Obregón",
                            "numero": 120
                            },
            edad: 12

        }
    */

    /*
        STDCLASS.- FUnciona como un bojeto
        $objeto = new stdClass();
        $objeto

    */