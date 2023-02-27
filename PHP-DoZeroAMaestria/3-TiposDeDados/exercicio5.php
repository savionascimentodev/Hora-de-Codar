<?php 

// ! Exercício 5

// ? Crie um arquivo PHP, que imprime textos com aspas duplas e também com aspas simples;

echo "Texto com aspas duplas <br>";
echo 'Texto com aspas simples <br>';

// Validando se é uma String com is_string;
$nome = "Sávio";

if(is_string($nome)){
  echo "É uma string!";
} else {
  echo "Não é uma string";
}
?>