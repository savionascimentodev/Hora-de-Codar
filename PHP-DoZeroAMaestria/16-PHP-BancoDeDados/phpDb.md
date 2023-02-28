### PHP e Banco de Dados

- O PHP tem suporte para **mais de 20 banco de dados**;
- O mais comum a ser utilizado é o **MySQL**;
- Há algumas formas de conexão a bancos disponíveis no PHP, a mais famosa é o **PDO**(PHP Data Objects), porém também temos a **MySQLi**;
- PDO costuma ser implementado por causa da **abordagem orientada a objetos** e outras vantagens sobre a MySQLi;

### Banco de dados Relacionais

- O banco de dado relacional tem sua principal característica **trabalhar com tabelas**;
- Onde ela **possui colunas** que categorizam os dados, que são **inseridos** nas tabelas;
- O PHP é muito utilizado com **DBs relacionais**, como o **MySQL**;
- A linguagem para operações com estes bancos é a **SQL**;
- As instruções em SQL costumam ser escritas em **letras maiúsculas**;

### Criando banco de dados

- Podemos criar bancos de dados manualmente em softwares como o **phpMyAdmin** ou por **SQL**;
- Para criar bancos vamos utilizar o:

```sql
CREATE DATABASE nomedobanco
```

### Removendo bancos

- Podemos também **remover os bancos**, ou seja deletá-los do sistema;
- Isso fará com que **todos os dados e tabelas sejam perdidos**, então tome cuidado;
- O comando para deletar bancos é:

```sql
DROP DATABASE nomedobanco
```

### Principais tipos de dados

- Os tipos de dados do banco funcionam como os tipos de dados de variáveis, porém em **vários ‘níveis’ para a melhor performance**;
- **VARCHAR**: texto de 0 a 65535 caracteres;
- **TEXT**: texto com no máximo 65535 bytes;
- **INT**: números inteiros;
- **BIGINT**: números inteiros com maior proporção que o INT;
- **DATE**: data no formato YYYY-MM-DD

---

### Criando tabelas

- As tabelas ficam dentro dos bancos, e os dados ficam dentro das tabelas, ou seja, é uma parte fundamental do banco relacional;
- Podemos criar tabelas facilmente por SQL,o comando é:

```sql
CREATE TABLE nome (
coluna tipodedado,
coluna2 tipodedado
);
```

### Removendo tabelas

- Há também a possibilidade de **remover tabelas do banco**;
- Os **dados serão removidos para sempre**;
- O comando para deletar tabelas é:

```sql
DROP TABLE nome;
```

### Alterando tabela

- Podemos **alterar uma tabela já criada**, com algumas operações:
  - **adicionar** coluna, **remover** coluna, **modificar** coluna;
- Normalmente o banco não costuma mudar após a sua criação, a operação mais provável é a adição de colunas;
- Comandos de alterar tabelas começam com:

```sql
  ALTER TABLE nome
  ADD/DROP COLUMN/MODIFY COLUMN nome
```

### Constraints

- Constraints **são características que podem ser adicionadas na hora da criação de uma tabela**;
- Podemos definir: **campos que não podem ser nulos, campos únicos,chaves primárias e mais**;
- O comando fica assim após o tipo da coluna:

```sql
coluna tipodedado constraint,
```

### NOT NULL

- A **NOT NULL** é uma **constraint**;
- Esta constraint **não permite** que o dado adicionado a esta coluna esteja **vazio**;
- **Exemplo:**

```sql
 nome VARCHAR(100) NOT NULL
```

### UNIQUE

- A UNIQUE é uma **constraint**;
- **Garante** que todos os **valores** da coluna que foi adicionado **sejam únicos**;
- **Obs**: podemos unir várias constraints;
- **Exemplo:**

```sql
  nome VARCHAR(100) UNIQUE
  email VARCHAR(255) NOT NULL UNIQUE;
```

### PRIMARY KEY

- A PRIMARY KEY é uma **constraint**;
- As **chaves primárias** devem ter **valores únicos** e não podem ser **nulas**,
  geralmente colocadas na coluna de ID;
- Uma **tabela** só pode **ter** uma **PRIMARY KEY**;
- **Exemplo:**

```sql
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
```
