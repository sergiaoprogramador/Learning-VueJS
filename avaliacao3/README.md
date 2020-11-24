# Projeto Eduxe teste e Avaliação (Tópicos em computação aplicada) 

### Briefing do projeto:

1. **Cadastro de Empresas**.
    - Cadastrar empresas a serem utilizadas na criação de unidades, podendo ser
empresas de atuação principal na unidade e de secundária (a serem associadas para
distribuição de faturamento).
        - **Ações:** Listagem, criação, edição e deleção (soft-delete)

    - Criar um aplicativo mobile, e ter um campo CNPJ. Ao digitar o CNPJ, o aplicativo deve consultar a API citada na regras de negócio, e retornar os dados conforme consulta.

#### Proprieadades do form Empresas:
1. **CNPJ**
    1. Obrigatório
    2. String
    3. 14 caracteres
    4. Deve permitir apenas números ao salvar
    5. Deve possuir máscara para o usuário
    6. Deve validar através do digito verficador 
2. **Razão Social**
    1. Obrigatório
    2. String 
3. **Nome Fantasia**
    1. String 
4. **CEP**
    1. Obrigatório 
    2. 8 caracteres apenas numéricos
5. **Logradouro**
    1. Texto
    2. Obrigatório
6. **Número**
    1. Obrigatório
    2. Texto
7. **Telefone**
    1. Obrigatório
    2. Texto
    3. 10 ou 11 caracteres
    4. Deve ser um telefone válido
8. **E-mail**
    1. Obrigatório
    2. Deve ser um e-mail válido
9. **Complemento**
    1. Texto
    2. Opcional
10. **Bairro**
    1. Obrigatório
    2. Texto
11. **Cidade**
    1. Obrigatório
    2. Texto
12. **Estado**
    1. Obrigatório
    2. 2 caracteres
    3. Lista de estados (UF)
13. **Segmento**
    1. Lista de opções
        1. Produto
        2. Serviço
        3. Produto e Serviço
    2. Obrigatório
14. **Inscrição Municipal**
    1. Texto
    2. Obrigatório
15. **Inscrição Estadual**
    1. Texto
    2. Opcional no caso de empresas do segmento de serviços

#### Regras adicionais do Negócio:
O CNPJ é campo único, sendo assim duas empresas não podem usar o mesmo CNPJ.

O CNPJ deve ser consultado na API abaixo. Todos os campos poderão ser preenchidos no
caso de retorno positivo da API. O usuário poderá sobrescrever os dados caso deseje.

```https://receitaws.com.br/api```

O campo CEP deve consultar API e preencher os dados de endereço caso o mesmo seja
preenchido manualmente.

```https://viacep.com.br/```

---

** Para a gestão do projeto: Gitflow **
** As hards skills utilizadas são: PHP 7.4, MySql, Laravel 8, API, Composer, Vue.js, Axios **

---

### Como iniciar o projeto:

+ O Laravel possui um conjunto de requisitos para funcionar perfeitamente em ambientes específicos. Esta seção específica - [requisítos do laravel](https://laravel.com/docs/7.x#server-requirements) - Laravel Documentação.

+ Para compilar o projeto é necessário ter instalado o [Composer](https://getcomposer.org/) , [Node](https://nodejs.org/) e [Yarn](https://yarnpkg.com/) em sua máquina.

Assumindo que sua máquina possua os requisitos listados - Vamos processar a instalação e compilar o projeto para ser executado.

+ Caso ainda não o tenha feito, clone este repositório com o Git 
```
git clone https://github.com/sergiaoprogramador/Learning-VueJS.git
```

1. Abra no cmd ou aplicativo de terminal e navegue até esta pasta inicial do projeto em: Learning-VueJS\avaliacao3

2. Execute os comandos a seguir para as configurações de backend:

#### Configurando o Backend:

+ Abra a pasta back 

```bash
composer install
```

```bash
cp .env.example .env
```
+ Configure as variaveis de Banco de dados no arquivo .env para configuração das tabelas (configure um Banco para fins de teste)

```bash
php artisan key:generate
```

```bash
php artisan migrate:fresh --seed
```

```bash
php artisan serve
```

+ Deixe o servidor rodando


2. Execute os comandos a seguir para as configurações de frontend:

#### Configurando o Frontend:

+ Abra um novo terminal de linha de comando e acesse a pasta front

```
yarn install
```

##### Compiles and hot-reloads for development
```
yarn serve
```

##### Compiles and minifies for production
```
yarn build
```

##### Lints and fixes files
```
yarn lint
```

### Componentes
Para os componentes utilizei o [BootstrapVue](https://bootstrap-vue.org/docs)
Para as validações utilizei o [VueValidate](https://vuelidate.js.org/)

### Copyright

Sergio Ramos - [sergiaoprogramador.github.io](https://sergiaoprogramador.github.io)
