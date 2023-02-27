### Inteiros (integers)

- Os inteiros são os **números inteiros da matemática**, como: 1, 2, 15;
- Incluindo os **números negativos**;
- Os números positivos **não precisam** de um sinal de + na frente;
- Já os números negativos devem ser descritos assim, ex: **-12**;

### Checando número inteiro

- Podemos validar se um dado é inteiro com a função **is_int()**;
- Caso um número seja inteiro, será retornado **true** (um outro tipo de dado);
- Caso não seja, receberemos um retorno de **false** (tipo de dado também);
- Precisamos utilizar uma estrutura **if** para validar o valor;

---

### Números decimais ( floats )

- Os floats são todos os números com casas decimais;
- Como o padrão universal é da língua inglesa, temos a separação de casas
  com . e não ,
- Exemplos de floats: 2.123, 0.04, -12.8

### Checando se é float

- Podemos utilizar a função **is_float()** para verificar se um dado é um float;
- A função recebe um **valor como parâmetro**;
- Novamente receberemos **true** or **false**, dependendo do dado enviado;
- Precisamos utilizar uma estrutura **if** para validar o valor;

---

### Textos (strings)

- Os textos são conhecidos como **strings**;
- Em PHP podemos escrever textos em **aspas simples ou duplas**, não há diferença para texto puro;
- **As aspas duplas interpretam variáveis**;

### Checando se é string

- Podemos utilizar a função **is_string()** para verificar se um dado é uma string;
- A função recebe um **valor como parâmetro**;
- Novamente receberemos **true** or **false**, dependendo do dado enviado;
- Precisamos utilizar uma estrutura **if** para validar o valor;

---

### Booleanos

- O boolean é um tipo de dado que só possui **dois valores**:
- **True** - verdadeiro;
- **False** - falso;
- Alguns valores são considerados como falsos: **0, 0.0, “0”, [ ], NULL**;

### Checando se é booleano

- Podemos utilizar a função **is_boolean()** para verificar se um dado é um boolean;
- A função recebe um **valor como parâmetro**;
- Novamente receberemos **true** or **false**, dependendo do dado enviado;
- Precisamos utilizar uma estrutura **if** para validar o valor;

---

### Arrays (conjunto, lista)

- O array é um **tipo de dado** que **serve para agrupar um conjunto de valores**;
- Podemos inserir **qualquer tipo de dado** na lista;
- A sintaxe é: **[1, 2, 3, 4, 5]**;
- Sempre entre **[]**, dados separados por **,**;
- Veremos arrays em mais detalhes futuramente, é uma estrutura de dados muito importante e muito utilizada;

### Array Associativo

- O **array associativo** é basicamente um **array**, porém com **chave e valor**;
- **Chave entre aspas, seta para apontar o valor e valor**;
- A **estrutura base é a mesma**, mas vamos construir dessa maneira:

```php
$array = [‘nome’ => ‘Matheus’, idade => 29]
```

---

### Objetos

- PHP possui o paradigma de **orientação a objetos**;
- Podemos criar **classes e objetos**, e o **objeto** é considerado um **tipo de dado**;
- Objetos possuem **métodos** que são suas ações e propriedades que são suas **características**;
- Veremos objetos em maiores detalhes futuramente no curso;
- **Exemplo:**

```php
class Pessoa {
  function falar(){
    echo "Olá Pessoal";
  }
}

$savio = new Pessoa();
```

---

### Null

- O tipo de dado Null tem apenas um valor, o **NULL**;
- Um **caso de uso** do Null seria **checar se uma variável tem ou não valor**;
- Podemos checar se um valor é null com **is_null()**;
