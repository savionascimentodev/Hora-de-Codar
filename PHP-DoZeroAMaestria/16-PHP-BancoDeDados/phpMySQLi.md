### Criando usuários

- Podemos criar usuários no banco, depois utilizá-los para **conectar** e **realizar as queries**;
- Além de criar precisamos **adicionar os privilégios**;
- **Exemplo:**

```sql
CREATE USER ‘usuario’@’localhost’ IDENTIFIED BY ‘senha’;
GRANT ALL PRIVILEGES ON _ . _ TO ‘usuario’@’localhost’;
FLUSH PRIVILEGES;
```

---

### MySQLi x PDO

- O **mysqli** é uma extensão do próprio PHP para conectar ao banco MySQL, e tem uma proximidade do código nativo, sendo **mais rápida do que a PDO**;
- **PDO** é uma **API para conexão de bancos de dados**, não limitada ao MySQL, que abstrai alguns conceitos com código PHP tornando esta abordagem mais lenta;
- **Ambas as formas podem ser utilizadas da forma orientada a objetos**;

### Conectando com mysqli

- Para conectar ao MySQL com o mysqli é muito simples, precisamos utilizar a função **mysqli_connect**;
- Passar os parâmetros de: **host, usuário, senha e banco de dados**;
- Com a **conexão feita** podemos **utilizar as queries**;
- **Exemplo:**

```php
$conn = new mysqli(“host”, “user”, “pass”, “db”);
```

### Checando a conexão

- Para verificar se houve algum erro na conexão podemos utilizar a propriedade **connect_error**;
- E para verificar o erro podemos utilizar o método **connect_error()**;
- Podemos inserir a checagem em um if e mostrar a mensagem de erro com um echo, por exemplo;

### Executando uma query

- Para executar uma query vamos usar o método query;
- Ele deve ser utilizado a partir do objeto que fez a conexão;
- Vamos receber um determinado retorno como resultado, que podem ser os dados, caso seja um SELECT, por exemplo;
- É importante ao fim de todas as queries fechar a conexão, com o método close;
- Conexões abertas gastam recursos do servidor e prejudicam a aplicação;

### Criando e deletando tabelas com mysqli

- Para criar e deletar tabelas vamos utilizar as mesmas queries de SQL
  puro, porém com o auxílio do método query;
- DROP TABLE para deletar tabelas;
- CREATE TABLE para criar tabelas;
- Lembre de fechar a conexão!
