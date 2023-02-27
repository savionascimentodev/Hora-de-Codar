<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teste de Requisição POST</title>
</head>

<body>
  <form action="cadastro.php" method="POST">
    <div>
      <input type="text" name="marca" placeholder="Marca do carro">
    </div>
    <div>
      <input type="text" name="nome" placeholder="Nome do carro">
    </div>
    <div>
      <input type="checkbox" name="opcionais[]" value="Teto solar"> Teto solar
    </div>
    <div>
      <input type="checkbox" name="opcionais[]" value="Som"> Som
    </div>
    <div>
      <input type="submit" value="Enviar">
    </div>
  </form>
</body>

</html>