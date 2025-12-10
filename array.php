<?php

/* Tipos Primitivos
Int | Integer == 1, 2, 3...
Float | Double == 1.0, 2.0, 3.0...
String | Char-Character == "Oi", 'o'...
*/<?php

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

/** 
 * Somar arrays:
 * $arrayInicio = [5, 10, 50];
 * $arrayFim = [10, 90, 30];
 * Resultado esperado:
 * $arraySoma[15, 100, 80]
 */

$arraySoma = [];
 
$arrayInicio = [5, 10, 50];
$arrayFim = [10, 90, 30];
$arraySoma = [15, 100, 80];

for($i = 0; $i <3; $i++) {
    // $arraySoma[0] = $arrayInicio[0] + $arrayFim[0];
    $arraySoma[$i] = $arrayInicio[$i] + $arrayFim[$i];
}

echo "<br> implode:<br>";
echo implode(", ", $arraySoma);


/** 
 * multiplicar arrays:
 * $arrayInicio = [5, 10, 8];
 * $arrayFim = [10, 100, 3];
 * Resultado esperado:
 * $arrayMultiplicado[50, 1000, 24];
 */

$arrayInicio = [5, 10, 8];
$arrayFim = [10, 100, 3];
$arrayMultiplicado = [];

for($i = 0; $i <3; $i++) {
    // $arraySoma[0] = $arrayInicio[0] + $arrayFim[0];
    $arrayMultiplicado[$i] = $arrayInicio[$i] + $arrayFim[$i];
}

echo "<br>A multiplicação dos vetores:<br>";
echo implode(", ", $arrayMultiplicado);


/**
 * Dada uma palavra informada pelo usuario,
 * verificar se a mesma forma um palíndromo
 * Ex.: Ana, subi no onibus, kaiak, Natan.
 * Dica: um for dentro do outro
 */
echo "<br>Palíndromo:<br>";
$palavra = "ana";

echo $palavra = [0];

$palavra = [0];
$palavraDois = [1];
$palavraTres = [2];

$indo = $palavra[$i]; 
$voltando = $palavra[$j];
$Epalindromo = true;


for($i = 0; $i <3; $i++){
    $palavraInicio = $palavra[$i];

    for($j - 3; $j >= 0; $j--){
        $palavraFim = $palavra[$j];

        $SãoIguais = $palavraInicio == $palavraFim;

        if (!$SãoIguais) {

            $ehPalindromo = false;
            break;
        }
    }
    


}
    
if ($ehPalindromo) {

    echo "<br> A palavra é palindromo";
}
else{
    echo "<br> A palavra não é palindromo";
}
    


    







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

/** 
 * Somar arrays:
 * $arrayInicio = [5, 10, 50];
 * $arrayFim = [10, 90, 30];
 * Resultado esperado:
 * $arraySoma[15, 100, 80]
 */

$arraySoma = [];
 
$arrayInicio = [5, 10, 50];
$arrayFim = [10, 90, 30];
$arraySoma = [15, 100, 80];

for($i = 0; $i <3; $i++) {
    // $arraySoma[0] = $arrayInicio[0] + $arrayFim[0];
    $arraySoma[$i] = $arrayInicio[$i] + $arrayFim[$i];
}

echo "<br> implode:<br>";
echo implode(", ", $arraySoma);


/** 
 * multiplicar arrays:
 * $arrayInicio = [5, 10, 8];
 * $arrayFim = [10, 100, 3];
 * Resultado esperado:
 * $arrayMultiplicado[50, 1000, 24];
 */

$arrayInicio = [5, 10, 8];
$arrayFim = [10, 100, 3];
$arrayMultiplicado = [];

for($i = 0; $i <3; $i++) {
    // $arraySoma[0] = $arrayInicio[0] + $arrayFim[0];
    $arrayMultiplicado[$i] = $arrayInicio[$i] + $arrayFim[$i];
}

echo "<br>A multiplicação dos vetores:<br>";
echo implode(", ", $arrayMultiplicado);


/**
 * Dada uma palavra informada pelo usuario,
 * verificar se a mesma forma um palíndromo
 * Ex.: Ana, subi no onibus, kaiak, Natan.
 * Dica: um for dentro do outro
 */
echo "<br>Palíndromo:<br>";
$palavra = "ana";

echo $palavra = [0];

$palavra = [0];
$palavraDois = [1];
$palavraTres = [2];

$indo = $palavra[$i]; 
$voltando = $palavra[$j];
$Epalindromo = true;


for($i = 0; $i <3; $i++){
    $palavraInicio = $palavra[$i];

    for($j - 3; $j >= 0; $j--){
        $palavraFim = $palavra[$j];

        $SãoIguais = $palavraInicio == $palavraFim;

        if (!$SãoIguais) {

            $ehPalindromo = false;
            break;
        }
    }
    


}
    
if ($ehPalindromo) {

    echo "<br> A palavra é palindromo";
}
else{
    echo "<br> A palavra não é palindromo";
}
    


    





