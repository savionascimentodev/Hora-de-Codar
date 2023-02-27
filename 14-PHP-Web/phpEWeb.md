### Introdução ao HTTP

- A web roda em cima do protocolo **HTTP** (HyperText Transfer Protocol);
- Quando um navegador solicita uma página web é feito um **request HTTP**;
- Esta requisição recebe uma resposta, ambos podem possuir um **body**;
- A resposta contém um **header** (cabeçalho), que é constituído pelo método (GET, POST), arquivo/path solicitado (index.php) e versão do protocolo HTTP (HTTP/1.x);
- Basicamente uma requisição é **enviada** e uma resposta é **recebida**;

### Status HTTP

- Após enviarmos a requisição, vamos receber uma resposta que contém um status, que são separados em algumas categorias:
- **100 - 199** => Respostas de **informação**;
- **200 - 299** => Respostas de **sucesso**;
- **300 - 399** => **Redirecionamento**;
- **400 - 499** => **Erros** do **cliente** (navegador, ex: 404);
- **500 - 599** => **Erros** de **servidor** (ex: 500);

### Métodos HTTP

- As requisições que enviamos também contém métodos, alguns deles são:
- **GET** => Solicita a apresentação de um recurso (ex: visualização de uma página);
- **POST** => Envio de dados ao servidor (ex: cadastro de usuário);
- **PUT** => Atualização de dados;
- **DELETE** => Remoção de dados;
- **PATCH** => Atualização de dado específico;

### Variáveis globais do PHP

- Para lidar com estas requisições o PHP nos dá algumas variáveis globais:
- **$\_ENV** => variáveis de ambiente;
- **$\_GET** = Parâmetros que foram enviados por request GET;
- **$\_POST** => Parâmetros que foram enviados por POST;
- **$\_COOKIE** => Valores de cookies;
- **$\_SERVER** => Informações sobre o servidor;
- **$\_FILES** => Informações sobre os arquivos que vieram por upload;

### Explorando $\_SERVER

- O **$\_SERVER** tem diversas informações importantes;
- **SERVER_SOFTWARE** => Identificação do servidor;
- **SERVER_NAME** => Hostname, DNS ou IP do servidor;
- **SERVER_PROTOCOL** => Protocolo do servidor;
- **SERVER_PORT** => Porta do servidor;
- **QUERY_STRING** => Argumentos após o ? na URL;

---

### Autoprocessamento de páginas

- Podemos criar uma página que faz **o processamento dos dados e também exibe o input de informações**;
- Para isso devemos criar um if que checa se o método de requisição:
  (**$\_SERVER[‘REQUEST_METHOD’]**) é **GET** ou **POST**;
- Depois criar as duas variações, para cada uma das possibilidades;
- Ou checar se algum parâmetro veio pela requisição e então criar as
  variações;
- **OBS:** veja o arquivo **autoprocessamento.php**;

### Preenchimento de formulário com PHP

- Podemos preencher o formulário com dados que vieram da requisição;
- Isso acontece bastante em resultados de busca ou edições de registros;
- Podemos fazer uma **checagem de se o dado foi enviado e recebido** para a página, e utilizar o echo para exibir no atributo value do input;
- **Exemplo**:

```php
<input type=”text” value=”<?php echo $nome?>”>
```

- **OBS:** veja o arquivo **preenchimentoForm.php**;
