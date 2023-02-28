### Inserindo dados

- Para inserir dados vamos utilizar a instrução **INSERT**;
- Devemos determinar a **tabela, colunas e também os dados que serão inseridos**;
- **Exemplo:**

```sql
INSERT INTO tabela (coluna, coluna2) VALUES (valor, valor2);
```

---

### Selecionando dados

- Para selecionar dados vamos utilizar a instrução **SELECT**;
- Devemos determinar a **tabela e as colunas que serão selecionadas**;
- Podemos utilizar o **(\*)** para selecionar todas as colunas;
- **Exemplo:**

```sql
  SELECT * FROM tabela;
```

### Selecionando dados WHERE

- O **WHERE** é uma cláusula utilizada para **filtrar registros**;
- Vamos poder **resgatar os dados que batem apenas com as características que estamos procurando**;
- **Exemplo:**

```sql
  SELECT colunas
  FROM tabela
  WHERE condição;
```

### AND, OR e NOT

- Os **operadores** **AND**, **OR** e **NOT** são semelhantes aos do PHP e podem **auxiliar** o **WHERE** a **filtrar mais ainda os dados**;
- Podemos utilizar os operadores em conjunto;
- **Exemplo:**

```sql
  WHERE condicao AND condicao2
```

### ORDER BY

- Com o ORDER BY é possível ordenar o retorno com base em alguma coluna;
- Podemos ordenar de forma crescente (ASC) ou descendente (DESC);
- **Exemplo:**

```sql
ORDER BY email ASC;
```

---

### Atualizando dados

- Para atualizar dados em uma tabela vamos utilizar a instrução UPDATE;
- Precisamos determinar a tabela, colunas e valores;
- Obs: Um UPDATE sem WHERE vai atualizar todos os dados da tabela;
- **Exemplo:**

```sql
  UPDATE tabela
  SET coluna1 = valor1
  WHERE condicao;
```

---

### Deletando dados

- Para deletar dados de uma tabela vamos utilizar o DELETE FROM;
- Obs: DELETE sem WHERE vai deletar todos os dados da tabela;
- **Exemplo:**

```sql
  DELETE FROM tabela
  WHERE condicao;
```
