<?php 
/**
 * string 'texto qualquer'
 * char || character 'A'
 * int || integer 23
 * float 23.8
 * double 23.8 
 * decimal 23.8
 */

$aviao = "Boeing747";
$valor1 = 10;
$valor2 = 15;
$soma = $valor1 + $valor2; // 10 + 15 -> 25
// mesma coisa
//$soma = $soma + 3; // 28
$soma +=3; // 28

echo "soma é: " . $soma;
//tabuada do 5
$numero = 5;
echo "<br>Tabuada do $numero<br>";
echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

//tabuada do 6
$numero = 6;
echo "<br>Tabuada do $numero<br>";
echo "1 x $numero = " . $numero * 1 . "<br>";
echo "2 x $numero = " . $numero * 2 . "<br>";
echo "3 x $numero = " . $numero * 3 . "<br>";
echo "4 x $numero = " . $numero * 4 . "<br>";
echo "5 x $numero = " . $numero * 5 . "<br>";
echo "6 x $numero = " . $numero * 6 . "<br>";
echo "7 x $numero = " . $numero * 7 . "<br>";
echo "8 x $numero = " . $numero * 8 . "<br>";
echo "9 x $numero = " . $numero * 9 . "<br>";
echo "10 x $numero = " . $numero * 10 . "<br>";

//aritimetica
echo "<br>Média Aritimeticas<br>";
$valor1 = 10;
$valor2 = 20;
$valor3 = 30;

$mediaAritimetica = ($valor1 + $valor2 + $valor3) / 3;
echo "<br>A  Média é: $mediaAritimetica<br>";

// Pondereada
echo "<br>Calcular a Média Ponderada.<br>";
$prova1 = 10; // 3
$prova2 = 5; // 1.5
$prova3 = 7; // 3.2

$prova1 = 3;
$prova1 = 3;
$prova1 = 4;

$mpNumerador = ($prova1 * $peso1) + ($prova2 * $peso2) +($prova3 * $peso3);
$mpdenominador = $peso1 + $peso2 + $peso3;

$mediaPonderada = $mpNumerador / $mpDenominador;
echo "<br>A Média é: $mediaPonderada<br>";

// Harmonica
echo "<br>Calcular a Média Ponderada.<br>";
$prova1 = 2; 
$prova2 = 5; 
$prova3 = 3; 
$prova4 = 4;
$prova5 = 5;

$quantidadeProvas = 3; // n
$mhDenominador = (1 / $prova1) + (1 / $prova2) + (1 / $prova3) + (1 / $prova4) + (1 / $prova5);
$mediaHarmonica = $quantidadeProvas / $mhDenominador;
echo "<br>A Média é: $mediaHarmonica<br>";

// Calcular o volume de uma esfera com raio 5cm
// Dica: Elevar ao cubo -> 2 ** 3 = 8

// volume de esfera
echo "<br>Calcular o volume de uma esfera com raio 5cm<br>";
$raio = 5;
$volumeEsfera = (4/3) * 3.14 * ($raio ** 5);
echo "<br>O volume da esfera é: $volumeEsfera cm³<br>";

//Area do triangulo
echo "<br>Calcular a área do triângulo<br>";
$base = 8;
$altura = 6;
$areaTriangulo = ($base * $altura) / 2;
echo "<br>A área do triângulo é: $areaTriangulo cm²<br>";

//Calcular quantos segundos tem em 2 horas e 30 minutos
echo"<br>Calcular quantos segundos tem em 2 horas e 30 minutos<br>";
$horas =2;
$minutos = 30;
$segundosTotais = ($horas * 3600) + ($minutos * 60);
echo "<br>O total de segundos em 2 horas e 30 minutops é: $segundosTotais segundos<br>";

//Calcular o IMC de uma Pessoa
echo "<br>Calcular o IMC de uma Pessoa <br>";
$peso = 70; // kg
$altura = 1.75; // metros
$imc = $peso / ($altura ** 2);
echo "<br>O IMC da pessoa é: $imc kg/m²<br>";

// Converter graus Celsius para Fahrenheit. 35°C -> ?°F
echo "<br>Converter graus Celsius para Farenheit<br>";
$grausCelsius = 35;
$gruasFahrenheit = ($grausCelsius * 9/5) + 32;
echo "<br>35°C é igual a: $gruasFarenheit °F<br>";

// Aplicar a forula de bahskara para a seguinte equação do segundo grau:
// $a = 1; $b = -3; $c = -4;
$a = 1;
$b = -3;
$c = -4;
$deslta = ($b ** 2) - (4 * $a * $c);
$x1 = (-$b + sqrt($delta)) / (2 * $a);
$x1 = (-$b + sqrt($delta)) / (2 * $a);
echo "<br>o x1: $x1 e o x2 é: $x2<br>";

