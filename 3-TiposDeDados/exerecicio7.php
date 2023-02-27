<?php 

// ! Exercício 7

// ? Crie um arquivo PHP, com um array associativo com características de uma pessoa;
// ! Desafio: faça um if checando se ela é maior de idade e imprima uma mensagem, caso seja;

// Sintaxe de um Array Associativo;
$pessoas = ["nome" => "Savio", "idade" => 19, "sexo" => "M"];

// Dando print nos dados do Array, em vez do indice ele imprime a chave;
print_r($pessoas);
echo '<br>';

// DESAFIO
if($pessoas["idade"] >= 18){
  echo $pessoas["nome"] . " É maior de idade";
} else {
  echo $pessoas["nome"] . " Não é maior de idade";
}
?>