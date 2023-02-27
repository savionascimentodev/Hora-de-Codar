<?php 

// ! Teste de Formulário GET

// ? Vamos precisar criar um formulário e definir o método como GET, e também o arquivo ou rota que vamos acessar em action;
// ? No lado do servidor vamos acessar a variável $_GET que contém o sparâmetros enviados para o servidor;
// ? Faremos o processamento e retornamos algo para o usuário;

$nome = $_GET['nome'];
$idade = $_GET['idade'];

?>

<h3>O seu nome é <?=$nome?> e tem <?=$idade?> anos</h3>