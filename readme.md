Nessa aula, aprendemos sobre a estrutura de dados Array. Vimos que um Array:

agrupa vários valores
também é chamado de vetor ou lista (isso depende da linguagem ou plataforma)
usa-se [] ou array() para declarar um novo array
acessa um elemento usamos os []
dentro dos `[]´ vem a posição do elemento
possui um índice que por padrão começa com 0 (zero)
para acessar todos os elementos podemos usar uma estrutura de repetição
para saber quantos elementos um array tem existe a função count()

Nessa aula, aprendemos como criar uma estrutura de dados mais complexa usando e combinando arrays associativos. Vimos e aprendemos que:

1. um array associativo sempre define elementos composto por uma chave e um valor
1.1. a associação entre chave e valor é feito com =>
1.2. a chave funciona como um índice explicito (definido por nós)
1.3. o valor pode ser um valor primitivo ou outro array
1.4. a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter
2. um array associativo também é chamado de mapa ou dicionário
3. podemos combinar um array simples e array associativo para definir estruturas mais complexas
4. o laço foreach oferece uma forma mais expressiva de iteração
no foreach podemos acessar o índice e o valor do elemento da iteração
5. arrays podem crescer e podemos adicionar novos elementos
em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)
5.1. nesse caso o PHP automaticamente incrementa o índice

Nessa aula falamos sobre função! Aprendemos:

1. uma função encapsula uma funcionalidade/um código
2. uma função usa a palavra chave function, possui um nome, pode ter parâmetros, tem um corpo e pode ter um retorno
3. para chamar uma função usamos o nome dela passando o valor dos parâmetros
4. uma função pode especificar os tipos na declaração do parâmetro (a partir da versão 7), como também o tipo do retorno

Nessa aula falamos sobre vários recursos da linguagem PHP.

Primeiro vimos como usar um array associativo dentro de uma string. Aprendemos:

1. para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo "$conta[titular]"
2. e alternativamente podemos usar chaves em volta do array, por exemplo: "{$conta['titular']}"

Também vimos que um código PHP pode ser separado em vários arquivos e orquestrar a execução podem usar include, require e require_once:

1. include não dá erro (apenas avisa) se o arquivo não existe, require dá erro
2. require_once garante que o arquivo será incluído apenas uma vez

Conhecemos que existem níveis de mensagens entre eles:

1. E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução
2. E_ERROR, PHP dá erro e para a execução do programa

Para subir um servidor WEB PHP para testes:
php -S localhost:8000