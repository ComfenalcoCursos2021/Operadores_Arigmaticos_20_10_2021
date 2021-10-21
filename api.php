<?php
    // Operadores Arigmeticos
    header("Content-Type: application/json");
    header('Access-Control-Allow-Origin: *');
    
    // Operador suma '+'
    $PRECIO = (integer) 2000;
    $IVA = (integer) 400;
    $TOTAL = (string) number_format($PRECIO + $IVA, 0, ",", ".");
//     print_r(<<<SUMA
//     La suma de los valores es: $${!${''} = $TOTAL} \n
// SUMA);
  

    //Operador resta '-'
    $_TOTAL = (integer) 5000;
    $DESCUENTO = (integer) 3200;
    $OFERTA = (string) number_format($_TOTAL - $DESCUENTO, 0, ",", ".");
//     print_r(<<<RESTA
//     La oferta es de: $${!${''} = $OFERTA} \n
// RESTA);


    //Operador multiplicacion '*'
    $_PRECIO = (integer) 9000;
    $_IVA = (string) number_format($_PRECIO * 0.16, 0, ",", ".");
//     print_r(<<<MULTIPLICACION
//     El iva es de: $${!${''} = $_IVA} \n
// MULTIPLICACION);

    //Operador division '/'
    $SUMA = (integer) 9500;
    $TOTAL_MEDIA = (integer) 2000;
    $MEDIA = (string) number_format($SUMA / $TOTAL_MEDIA, 2, ",", ".");
//     print_r(<<<DIVISION
//     La media es de: $${!${''} = $MEDIA} \n
// DIVISION);

    //Operador modulo '%'
    $_SUMA = (integer) 8;
    $_RESTO = (string) number_format($_SUMA % 5, 0, ",", ".");    
//     print_r(<<<MODULO
//     Lo que sobra es: $$_RESTO \n
// MODULO);

    echo <<<JSON
{
    "SUMA": "La suma de los valores es: $${!${''} = $TOTAL}",
    "RESTA": "La oferta es de: $${!${''} = $OFERTA}",
    "MULTIPLICACION": "El iva es de: $${!${''} = $_IVA}",
    "DIVISION": "La media es de: $${!${''} = $MEDIA}",
    "MODULO": "Lo que sobra es: $$_RESTO",
    "AUTOR": "Miguel Angel Castro Escamilla",
    "SERVISOR": "${!${''} = $_SERVER['HTTP_HOST']}"
}
JSON;


    
?>