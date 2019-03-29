# Teste para desenvolvedor back-end
O Focus Concursos é uma empresa que oferece cursos online preparatórios para concurso público.
> https://focusconcursos.com.br 

## Instruções
1. Faça um fork deste repositório;
2. Implemente os items descritos na próxima seção;
3. Envie email para luis@grupofocus.com.br com o assunto **Vaga back-end**;

## O que esperamos que desenvolva
O teste consiste em gerar uma API que tenha os recursos de CRUD de produto e realize o cálculo de frete, usando serviço dos Correios, entre 02 CEP's.

Utilize sqlite como banco de dados para o teste.

Relação de tarefas para executar o teste:
1. Criar migrations e seeders para a tabela produto;
2. Criar comando no composer.json que permita executar refresh e seeder no banco;
3. Cadastrar produto com os seguintes dados:
  - nome do produto;
  - sku;
  - peso;
  - altura;
  - largura;
  - profundidade;
  - valor;
4. Criar validador;
5. Consultar produto por nome ou id. A consulta deve retornar apenas nome, id, sku e valor, em formato JSON ou XML;
6. Editar os dados de um produto;
7. Excluir um produto;
8. Consultar o valor de frete entre 02 CEP's para um produto, em quantidade N, usando serviço dos Correios;
9. Enviar uma notificação por email ao cadastrar um produto. O email pode ser enviado para o [mailtrap](http://mailtrap.io);
10. Escrever testes;


## Considerações para o teste
1. Utilizar linguagem PHP;
2. Utilizar o framework [Laravel](https://laravel.com);
3. Utilizar repository pattern;
4. Implementar classes de serviços para chamar as classes de regras de negócio;
5. Utilizar uma camada de apresentação/transformação de dados;
6. Utilize interface para a classe de cálculo de frete;
7. Utilize o service container para resolver a classe que implementa a interface de cáculo de frete, e registre num service provider chamado ApplicationServiceProvider.
8. Não é permitido utilizar pacotes além dos que fazem parte da instalação padrão do Laravel;


## O que iremos avaliar
1. Conhecimento da linguagem;
2. Conhecimento do framework;
3. Qualidade do código;
4. Abordagem para solução do teste;
5. Conhecimento de orientação a objetos;
6. Conhecimento de design patterns;
7. Conhecimento de conceitos do SOLID;
8. Conhecimento sobre API REST;
