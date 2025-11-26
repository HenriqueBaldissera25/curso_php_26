<?php 
/**
 * string 'texto qulquer'
 * char || character 'A'
 * int || integer 23
 * float 23.8
 * double 23.8 
 * decimal 23.8
 */

// $aviao = "Boeing747";
// $valor1 = 10;
// $valor2 = 15;
// $soma = $valor1 + $valor2; // 10 + 15 -> 25
// // mesma coisa
// //$soma = $soma + 3; // 28
// $soma +=3; // 28

// echo "soma é: " . $soma;
// //tabuada do 5
// $numero = 5;
// echo "<br>Tabuada do $numero<br>";
// echo "1 x $numero = " . $numero * 1 . "<br>";
// echo "2 x $numero = " . $numero * 2 . "<br>";
// echo "3 x $numero = " . $numero * 3 . "<br>";
// echo "4 x $numero = " . $numero * 4 . "<br>";
// echo "5 x $numero = " . $numero * 5 . "<br>";
// echo "6 x $numero = " . $numero * 6 . "<br>";
// echo "7 x $numero = " . $numero * 7 . "<br>";
// echo "8 x $numero = " . $numero * 8 . "<br>";
// echo "9 x $numero = " . $numero * 9 . "<br>";
// echo "10 x $numero = " . $numero * 10 . "<br>";

// //tabuada do 6
// $numero = 6;
// echo "<br>Tabuada do $numero<br>";
// echo "1 x $numero = " . $numero * 1 . "<br>";
// echo "2 x $numero = " . $numero * 2 . "<br>";
// echo "3 x $numero = " . $numero * 3 . "<br>";
// echo "4 x $numero = " . $numero * 4 . "<br>";
// echo "5 x $numero = " . $numero * 5 . "<br>";
// echo "6 x $numero = " . $numero * 6 . "<br>";
// echo "7 x $numero = " . $numero * 7 . "<br>";
// echo "8 x $numero = " . $numero * 8 . "<br>";
// echo "9 x $numero = " . $numero * 9 . "<br>";
// echo "10 x $numero = " . $numero * 10 . "<br>";

// //aritimetica
// echo "<br>Média Aritimeticas<br>";
// $valor1 = 10;
// $valor2 = 20;
// $valor3 = 30;

// $mediaAritimetica = ($valor1 + $valor2 + $valor3) / 3;
// echo "<br>A  Média é: $mediaAritimetica<br>";

// // Pondereada
// echo "<br>Calcular a Média Ponderada.<br>";
// $prova1 = 10; // 3
// $prova2 = 5; // 1.5
// $prova3 = 7; // 3.2

// $peso1 = 3;
// $peso2 = 3;
// $peso3 = 4;

// $mpNumerador = ($prova1 * $peso1) + ($prova2 * $peso2) +($prova3 * $peso3);
// $mpDenominador = $peso1 + $peso2 + $peso3;

// $mediaPonderada = $mpNumerador / $mpDenominador;
// echo "<br>A Média é: $mediaPonderada<br>";

// // Harmonica
// echo "<br>Calcular a Média Ponderada.<br>";
// $prova1 = 2; 
// $prova2 = 5; 
// $prova3 = 3; 
// $prova4 = 4;
// $prova5 = 5;

// $quantidadeProvas = 3; // n
// $mhDenominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3) + (1 / $prova4) + (1 / $prova5);
// $mediaHarmonica = $quantidadeProvas / $mhDenominador;
// echo "<br>A Média é: $mediaHarmonica<br>";

// // Calcular o volume de uma esfera com raio 5cm
// // Dica: Elevar ao cubo -> 2 ** 3 = 8

// // volume de esfera
// echo "<br>Calcular o volume de uma esfera com raio 5cm<br>";
// $raio = 5;
// $volumeEsfera = (4/3) * 3.14 * ($raio ** 5);
// echo "<br>O volume da esfera é: $volumeEsfera cm³<br>";

// //Area do triangulo
// echo "<br>Calcular a área do triângulo<br>";
// $base = 8;
// $altura = 6;
// $areaTriangulo = ($base * $altura) / 2;
// echo "<br>A área do triângulo é: $areaTriangulo cm²<br>";

// //Calcular quantos segundos tem em 2 horas e 30 minutos
// echo"<br>Calcular quantos segundos tem em 2 horas e 30 minutos<br>";
// $horas =2;
// $minutos = 30;
// $segundosTotais = ($horas * 3600) + ($minutos * 60);
// echo "<br>O total de segundos em 2 horas e 30 minutops é: $segundosTotais segundos<br>";

// //Calcular o IMC de uma Pessoa
// echo "<br>Calcular o IMC de uma Pessoa <br>";
// $peso = 70; // kg
// $altura = 1.75; // metros
// $imc = $peso / ($altura ** 2);
// echo "<br>O IMC da pessoa é: $imc kg/m²<br>";

// // Converter graus Celsius para Fahrenheit. 35°C -> ?°F
// echo "<br>Converter graus Celsius para Farenheit<br>";
// $grausCelsius = 35;
// $grausFahrenheit = ($grausCelsius * 9/5) + 32;
// echo "<br>35°C é igual a: $grausFahrenheit °F<br>";

// // Aplicar a forula de bahskara para a seguinte equação do segundo grau:
// // $a = 1; $b = -3; $c = -4;
// $a = 1;
// $b = -3;
// $c = -4;
// $delta = ($b ** 2) - (4 * $a * $c);
// $x1 = (-$b + sqrt($delta)) / (2 * $a);
// $x2 = (-$b + sqrt($delta)) / (2 * $a);
// echo "<br>o x1: $x1 e o x2 é: $x2<br>";

// // Converter graus Fahrenheit para Celsius. 95°F -> ?°F (35)
// $grausFahrenheit = 95;
// $grausCelsius = $grausFahrenheit / 1.8;
// echo "<br>95°F é igual a: $grausCelsius °C<br>";

// //Converter graus Celsius para Kelvin. 35ºC -> ?ºK.
// $grausCelsius = 35;
// $grausKelvin = $grausCelsius + 273.15;
// echo "<br>35ºC é igual a: $grausKelvin Kº";

// // Converter graus Kelvin para Celsius. ?ºK -> 35ºC.
// $grausKelvin = 308.15;
// $grausCelsius = $grausKelvin - 273.15;
// echo "<br>A temperatura $grausKelvin ºK em graus Celsius é: $grausCelsius ºC <br>";

// $tenhoDinheiro = true; 
// $tenhoVontadeCafe = true;

// if ($tenhoDinheiro && $tenhoVontadeCafe) {
//     echo "vou tomar café<br>";
// } else if ($tenhoDinheiro && !$tenhoVontadeTomarCafe) {
//     echo "vou comprar chocolate<br>";
// } else {
//     echo "nao tenho vontade de nada<br>";
// }

// $soma = 10 + 10;

// // Converter graus Fahrenheit para Celsius. 95°F -> ?°F (35)
// $grausFahrenheit = 95;
// $grausCelsius = $grausFahrenheit / 1.8;
// echo "<br>95°F é igual a: $grausCelsius °C<br>";

// //Converter graus Celsius para Kelvin. 35ºC -> ?ºK.
// $grausCelsius = 35;
// $grausKelvin = $grausCelsius + 273.15;
// echo "<br>35ºC é igual a: $grausKelvin Kº";

// // Converter graus Kelvin para Celsius. ?ºK -> 35ºC.
// $grausKelvin = 308.15;
// $grausCelsius = $grausKelvin - 273.15;
// echo "<br>A temperatura $grausKelvin ºK em graus Celsius é: $grausCelsius ºC <br>";

// $tenhoDinheiro = true; 
// $tenhoVontadeCafe = true;

// if ($tenhoDinheiro && $tenhoVontadeCafe) {
//     echo "vou tomar café<br>";
// } else if ($tenhoDinheiro && !$tenhoVontadeTomarCafe) {
//     echo "vou comprar chocolate<br>";
// } else {
//     echo "nao tenho vontade de nada<br>";
// }

// $soma = 10 + 10;

// /* Simular o funcionamento de uma calculadora
//     utilizar if,else if, else
//     Operadores: + - * / 
//     Dica: vão ter uma variavel $operador.
// */
// // Dados da Calculadora
// $operador = "-";
// $valor1 = 2;
// $valor2 = 6;

// if($valor1 < $valor2){
//     $temporaria = $valor1;
//     $valor1 = $valor2;
//     $valor2 = $temporaria;
// }

// if($operador == "+") {
//     $soma = $valor1 + $valor2;
//     echo "soma dos valores $valor1 + $valor2: $soma";
// } else if ($operador == "-"){
//     $resultado = $valor1 - $valor2;
//     echo "A subtração dos valores $valor1 - $valor2: $resultado";
// } else if ($operador == "*") {
//     $resultado = $valor1 * $valor2;
//     echo "A multiplicação dos valores $valor1 * $valor2: $resultado";
// } else if ($operador == "/") {
//     $resultado = $valor1 / $valor2;
//     echo "A divisão dos valores $valor1 / $valor2: $divisão"; 
// } 

// /*Fazer exercicio 8 da pagina 15 da apostila
//     Não utilizar array.
//     utilizar os exercicios das médias e aplicar
//     a logica que valida se o aluno passou de ano
// */

// echo "<br>Média Aritimeticas<br>";
// $valor1 = 8;
// $valor2 = 5;
// $valor3 = 7;
// $mediaAritimetica = ($valor1 + $valor2 + $valor3) / 3;

// if($mediaAritimetica >=6) {
//     echo "Aluno foi aprovado $mediaAritimetica"; 
// } else {
//     echo "Aluno foi reprovado $mediaAritimetica"; 
// }

// echo "<br>Calcular a Média Ponderada.<br>";
// $prova1 = 10; // 3
// $prova2 = 5; // 1.5
// $prova3 = 7; // 3.2

// $peso1 = 3;
// $peso2 = 3;
// $peso3 = 4;

// $mpNumerador = ($prova1 * $peso1) + ($prova2 * $peso2) +($prova3 * $peso3);
// $mpDenominador = $peso1 + $peso2 + $peso3;

// $mediaPonderada = $mpNumerador / $mpDenominador;

// if($mediaPonderada>=6) {
//     echo "Aluno foi aprovado $mediaPonderada"; 
// } else {
//     echo "Aluno foi reprovado $mediaPonderada"; 
// }

// echo "<br>Calcular a Média Ponderada.<br>";
// $prova1 = 2; 
// $prova2 = 5; 
// $prova3 = 3; 
// $prova4 = 4;
// $prova5 = 5;

// $quantidadeProvas = 3; // n
// $mhDenominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3) + (1 / $prova4) + (1 / $prova5);
// $mediaHarmonica = $quantidadeProvas / $mhDenominador;

// if($mediaHarmonica>=6) {
//     echo "Aluno foi aprovado $mediaHarmonica"; 
// } else {
//     echo "Aluno foi reprovado $mediaHarmonica";
// }

// $nome="Fernanda";
// $idade= 21;

// if($idade >= 18);

// //Dados da calculadora SWITCH CASE

// switch($operador) {
//     case "+";
//         $resultado = $valor1 + $valor2;
//         echo "A soma dos valores $valor1 + $valor2: $resultado";
//         break;
//     case "+" :
//          $resultado = $valor1 - $valor2;
//          echo "A subtração dos valores $valor1 - $valor2: $resultado";
//          break;
//     case "-" :
//         $resultado = $valor1 * $valor2;
//         echo "A multiplicação dos valores $valor1 * $valor2: $resultado";
//         break;
//     case "*" :
//         $resultado = $valor1 / $valor2;
//         echo "A divisão dos valores $valor1 / $valor2: $divisão";
//         break;
//     default :
// }

// // Exercicio 5 pag 15.
// $num =2;
// $restoDivisão = $num % 2;

// if($restoDivisão == 0) {
//     echo "O $num é par";
// } else {
//     echo "O $num é impar";
// }       
      
// // $contar = $contar + 1 || $contar += 1; || $contar++;
// for($contar = 0; $contar < 10; $contar++) {
//     if ($contar == 5) {
//         continue;
//     }

//     echo "<br>";
//     echo "O numero é: $contar";
// }

// //tabuada do 5
// $numero = 5;
// echo "<br>Tabuada do $numero<br>";
// for($contar = 0; $contar <= 10; $contar++) {
//     echo "<br>";
//     // echo "$numero = x $contar = " . $numero * $contar;

//     $restoDivisão = $contar % 2;
//     $ehDivisãoExata = $restoDivisão == 0;

//     if($ehDivisãoExata) {
//         echo "$contar é par";
//     } else {
//         echo "$contar é impar";
//     } 
// }

// // Exibir os numeros pares de 1 até 50;

// // Exibir os numeros em ordem DECRESCENTE (Maior para Menor - DESC) de 10 - 0.

// // Calcular o fatorial de um numero. Ex.: calcular o fatorial de 5.


// echo "<br>";
// for($contar = 1; $contar <= 50; $contar++) {
    
//      $restoDivisão = $contar % 2;
//     $ehDivisãoExata = $restoDivisão == 0;
    
//     if($ehDivisãoExata) {
//         echo "<br> $contar é par";
//     } 
    
// }

// for($numero = 10; $numero >= 1; $numero--) {
//      echo "<br> $numero  ";
// }


// $fatorial = 5;
// $antecessor = $fatorial -1;

// for($numero = $antecessor; $numero >= 1; $numero--) {
//     $fatorial *= $numero; 
// }

// echo "<br> $fatorial  ";




// for($numero = $antecessor; $numero >= 1; $numero--) {
//     // $fatorial = $fatorial * $numero; // 120
//     $fatorial *= $numero;
// }

// $fatorial = 5;
// $antecessor = $fatorial -1; //4
// $numero = $antecessor;

// while($numero >= 1) {
//     //$fatorial = $fatorial *$numero; // 120
//     $fatorial *= $numero;

//     $numero;
// }

// echo "Fatrial: $fatorial <br>";

// $fatorial = 5;
// $antecessor = $numero >= 1;
// $numero = $antecessor;

// while ($numero >= 1);

  
/** 
 *  Fazer o mesmo execicio utilizando FOR e WHILE
 *  Exercicio: Encontrar os 5 primeiros numeros primos.
 *  Primos: 3, 5, 7, 11, 13.
 */


$contPrimos = 0;
$contDivisores = 0;
$numeroAvaliado = 7;
$antecessor = $numeroAvaliado -1; //6



for($divisor = 2; $divisor <= $antecessor; $divisor++) {

    if ($contPrimos == 5) {     
        break;
    }

    $restoDivisão =$numeroAvaliado % $divisor; // 7 % 2 
    $ehDivisãoExata = $restoDivisão == 0;

    if ($ehDivisãoExata) {
        $numeroAvaliado++;
        $antecessor = $numeroAvaliado -1;
        continue;
    }

    if ($divisor == $antecessor) {
        echo "O numero $numeroAvaliado é primo!";
        $numeroAvaliado++;
        $antecessor = $numeroAvaliado -1;
        $contPrimos++;
        $divisor = 1;
    }

} //Fim do FOR



$contPrimos = 0;
$numeroAvaliado = 3;


for($numeroAvaliado = 3; $contPrimos <= 5; $numeroAvaliado++) {

    $antecessor = $numeroAvaliado -1;

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {

    }
}

 /** 
 *  Fazer o mesmo execicio utilizando FOR e WHILE
 *  Exercicio: Encontrar os 5 primeiros numeros primos.
 *  Primos: 3, 5, 7, 11, 13.
 */   

for($numeroAvaliado = 3; $contPrimos <= -5; $numeroAvaliado++) {

    $antecessor = $numeroAvaliado -1;
    $ehPrimo = true;

    for($divisor = 2; $divisor <= $antecessor; $divisor++) {

        $restoDivisão =$numeroAvaliado % $divisor; // 7 % 2 
        $ehDivisãoExata = $restoDivisão == 0;  

        if ($ehDivisãoExata) {
            $ehPrimo = False;
            break;
        }

    } // Fim FOR
    
    if($ehPrimo == true) {
        echo "O numero $numeroAvaliativo é primo<br>";
        $contPrimos++;
    }
    
}  // Fim FOR

    

    
