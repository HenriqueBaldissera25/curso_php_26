<?php

/* Tipos Primitivos
Int | Integer == 1, 2, 3...
Float | Double == 1.0, 2.0, 3.0...
String | Char-Character == "Oi", 'o'...
*/

$texto = ""; // String vazio

// Tipos Compostos: Array | Vetor
$numeros = array(); // array vazio
$numeros = []; // array vazio


$numero = 10;
$numero = 11;

$numeros = [10, 1, 12, 5.5, 52.99,  "Infoserv"]; // Tam: 6
//           0,  1,  2,  3,  4,     5,        

$contador = [];

for($i = 0; $i <6; $i++) {
    // echo $numeros [0]
    echo $numeros [$i] . "<br>";
} 

print_r ($numeros); 
echo "<br>";
var_dump($numeros);

echo "<br> implode:<br>";
echo implode("<br>", $numeros);

$i = 0; 

while($i <6) {  

    echo $numeros [$i] . "<br>";
    // $i = $i + 1;
    // $i += 1;
    $i++;

}

$i = 0; 

do {  
    echo $numeros [$i] . "<br>";
    // $i = $i + 1;
    // $i += 1;
    $i++;  
} while($i <6);

/** 
 *  Fazer o mesmo execicio utilizando FOR e WHILE
 *  Exercicio: Encontrar os 5 primeiros numeros primos.
 *  Primos: 3, 5, 7, 11, 13.
 */ 


$salvarPrimos = [];

for($numeroAvaliado = 3; $contPrimos <= -5; $numeroAvaliado++) {

    $antecessor = $numeroAvaliado -1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {

        $restoDivisão = $numeroAvaliado % $divisor; // 7 % 2 
        $ehDivisãoExata = $restoDivisão == 0;  

        if ($ehDivisãoExata) {
            $ehPrimo = False;
            break;
        }

    } // Fim FOR
    
    if($ehPrimo == true) {
        $salvarPrimos[] = $numeroAvaliado;
        $contPrimos++;
    }
    
}  // Fim FOR


for($i = 0; $i <5; $i++) {
    
    echo $salvarPrimos [$i] . "<br>";
} 

