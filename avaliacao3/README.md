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

+ Para compilar o projeto é necessário ter instalado o [Composer](https://getcomposer.org/) e [Node](https://nodejs.org/) em sua máquina.

Assumindo que sua máquina possua os requisitos listados - Vamos processar a instalação e compilar o projeto para ser executado.

1. Abra no cmd ou aplicativo de terminal e navegue até esta pasta inicial do projeto
2. Execute os comandos a seguir:

```bash
composer install
```

```bash
cp .env.example .env
```

```bash
php artisan key:generate
```

```bash
npm install
```

```bash
npm install vue-template-compiler --save-dev --production=false
```

```bash
npm run dev
```

3. Caso queira iniciar um servidor execute os comandos a seguir:

```bash
php artisan serve
```

	- navegue até a URL: http://127.0.0.1:8000

---

4. Adicionando Migrations, seeders:
- Configure no arquivo .env , as configurações do projeto e banco de dados. Execute os seguintes comandos em seguida:

```bash
php artisan migrate:fresh --seed
```

5. Populando Tabelas: 

Faça login com os seguinte usuário: 
Login: sergio.b.snp@gmail.com
Senha: @Sbr99611661

Após logar:

Execute a rota ```admin/marcas/populate``` - para popular marcas de veiculos com base na tabela Fipe

Execute a rota ```admin/modelos/populate``` - para popular modelos de veiculos com base na tabela Fipe

### Componentes

Para adicionar novos componentes HTML basta acessar o site do template, selecionar o item que quer e copiar seu código


Link : https://preview.keenthemes.com/metronic/demo1/index.html

### Copyright

Sergio Ramos - [sergiaoprogramador.github.io](https://sergiaoprogramador.github.io)
