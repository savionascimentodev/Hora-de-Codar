### Interpolação de Dados

- A **interpolação de dados** é um recurso que ensina a trabalhar com os componentes do angular;
- Criamos nossas váriaveis no arquivo .ts, dentro da **classe**;
- Ou seja, estas variáveis são **propriedades** da classe;
- E então teremos acesso a estes dados no arquivo .html, o **template**;
- A impressão é feita atráves de duas chaves: **{{dado}}**;

### Compartilhamento de Dados

- Em angular podemos compartilhar **dados do componente pai para o componente filho**;
- Para isso, vamos disponibilizar na chamada do componente o nome do dado que será recebido com a seguinte sintaxe: [**dado**];
- E no código **.ts** do componente filho utiliza-se o **decorator @input**, que tem papel entregar o dado para o template;

### Diretivas

- Em angular temos um recurso chamado **diretivas**;
- Que podem realizar diversas funções no sistema, como **aplicar estilos a um elemento**;
- Elas começam com **ng**, o nome fica como: **ngAlgumaCoisa**;

### Renderização Condicional

- É possível exibir determinado conteúdo por meio de uma diretiva **condicional**;
- A diretiva **ngIf**;
- Os valores podem ser dinâmicos(**propriedades**), mas podemos realizar outros tipos de comparação;
- Há a possibilidade também de imprimir um cenário para validação de falso, com o **else**;

### Eventos no Angular

- Podemos ativar **eventos** nos componentes para disparar algum método;
- Um evento clássico que utilizamos muito é o **click**;
- A sintaxe é: **(click)="Alguma função"**;
- Os métodos ficam na **classe**;

### Emitindo Eventos

- Podemos comunicar eventos de um componente filho para o pai;
- Para isso vamos precisar do **@Output**, que vai trazer a saída do evento do componente filho;
- **Na tag de invocação do componente no template**, escolhemos um método para executar quando o evento for emitido;
- Exemplo: **(emit)="OnEmit()"**;

### Renderização de Listas

- Outro recurso importante é o **loop** em listas;
- Para isso vamos precisar de **uma propriedade com os itens da lista**;
- E no template do componente vamos utilizar o **\*ngFor**;
- A sintaxe é: **\*ngFor="let item of items"**;
