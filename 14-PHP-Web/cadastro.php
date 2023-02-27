<?php 

// ! Teste de Formulário POST

// ?  Vamos precisar criar um formulário e definir o método como POST, e também o arquivo ou rota que vamos acessar em action;
// ? No lado do servidor vamos acessar a variável $_POST que contém os parâmetros enviados para o servidor;
// ? Faremos o processamento e retornamos algo para o usuário;

print_r($_POST);

$nome = $_POST['nome'];
$marca = $_POST['marca'];

?>

<h3>Seu carro é da marca <?=$marca?></h3>
<h3>Parabéns pela compra do seu <?=$nome?>!</h3>