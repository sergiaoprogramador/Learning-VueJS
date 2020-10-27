# AVALIAÇÃO 1

## Objetivos principais

1. Explicar e aplicar os conceitos introdutório do Vue.JS. 
2. Preparar ambiente de desenvolvimento com o Framework
3. Usar os componentes básicos

### Objetivos específicos

1. Construir o ambiente de desenvolvimento
2. Criar e entender e explicar textualmente a estrutura de um projeto Vue.Js usando CLI
3. Construir uma página web contendo elementos construídos a partir de uso de componentes com o framework Vue.Js (Básico)

** OBJETIVO 1 **
O Vue.JS é um framework progressivo que utiliza SPA (Single Page Application) em seu core. Este conceito nasce na era de desenvolvimento com Frameworks Reativos, tanto o Vue.JS, quanto React e Angular agrega em seu core estruturas para responder instantaneamente interatividade e usabilidade no Front-end. Vue se difere do React, principalmente pela facilidade de uso. Com Vue, basta uma linha de código e temos todo o poder do Framework em nossas mãos, enquanto com React precisamos de uma camada de código gerenciado pelo Node além de um processo com inumeras configurações para transpilação do código JSX; Em sua comparação com Angular, a principio, Vue se inspirou em algumas sintaxes com (v-if e ng-if), porém adicionou melhorias significativas no quesito facilidade. Angular tem TypeScript em todo seu core, que já exige um grande esforço por parte do desenvolvedor, é claro que isto traz vantagens em aplicações em larga escala por trazer os conceitos de tipagem, porém sua curva de aprendizagem é acentuada trazendo. 

** DISCLAIMER **
> Há um bom tempo tenho procurado uma oportunidade de aprender um bom framework para performar meus projetos no lado do cliente. Trabalho alguns anos com desenvolvimento de projetos Web e sempre usei HTML, CSS e JavaScript nativo. No lado do servidor, o dono do meus commits é o PHP em conjunto com Laravel. São alguns bons projetos entregando alta performance com este gigante framework tão querido pelos Devs. A minha escolha por Vue.Js foi na mesma linha do Taylor B. Otwell (Criador do Laravel), a facilidade de uso e performance do framework no Front. Eu que sempre usei o Blade, template nativo do laravel para renderizar meus Front, agora me vejo adentrando este universo de possibilidades com Vue. E é neste entusiasmo, que faço esta primeira avaliação para a Disciplina de Tópicos em Computação Aplicada.

** OBJETIVO 3 **
No exemplo olaVue.html utilizamos o "Ola Vue" para demonstrar como é fácil sua utilização. O DOM é totalmente ligado e seus dados reativos. Podemos demonstrar um simples uso deste conceito aplicando no console um app.message e setando um valor diferente a ele. Voilà, temos o valor alterado e renderizado instantanemente no browse. 

Não precisamos fazer muita coisa, basta ter um html com um Id e criar uma instancia Vue referenciando no atributo el, assim temos todo o controle deste componente para manipularmos da forma que quisermos. 

No Vue, um conceito bem interessante são suas diretivas, que basicamente funcionam como atributos HTML iniciadas com o v- de Vue. A primeira diretiva que vamos abordar é a v-bind, utilizado para trazer ratividade e atualizar dados dentro da aplicação. No file vbindUse.html, podemos ver um simples uso na prática.

Para estruturas condicionais, é possível usar o v-if. No exemplo vIfUse.html,podemos demonstar de um forma resumida um simples show ou hide apenas setando no console a variavel app3.seen como true ou false. Algo que uma tarefa com javascript nativo seria um tanto quanto verbosa. Assim como no exemplo vForUse.html, podemos demonstrar um laço de repetição for, iterando e listando os elementos do array todos. Caso queira adicionar ou remover usamos o app4.todos.push({ text: 'Novo item' }) ou app4.todos.pop();

Para eventos de interatividade do client, podemos usar a diretiva v-on, que escuta chamadas invocadas pelo metodo das nossas instancias. No exemplo vOnClickUse.html usamos simples button para inverter a mensagem de nossa string. Os metodos relacionados a esta diretiva, fica na opção methods, onde teremos as funções responsaveis por tais eventos. 

Uma outra diretiva que exemplifica bem o poder reativo do Vue, é a v-model. Ela é muito simples porém muito poderosa, basicamente setamos um atributo v-model defindndo sua variavel no valor, esta variavel podemos usar em qualquer lugar. No exemplo, demonstramos um input com a v-model e no campo de texto setamos a variavel que é atualizada instantantanemante no browser, este é o conceito de mão dupla do Vue (two-way binding). Imagina isto dentro de formulários atualizando valores ou fazendo cache dos nossos dados. HAHAA!

Este guia, foi uma imersão básica há alguns conceitos demonstrando algumas das aplicações do Vue.JS, o guia oficial pode ser acompanhado na documentação do Vue no [menu Intrdução](https://br.vuejs.org/v2/guide/index.html).

** OBJETIVO 2 **

Aqui vamos explorar um pouco o [Vue Cli](https://cli.vuejs.org/) e sua utilização. Basicamente, o Cli do vue é um gerador de projetos SPA. Utiliza o Node e o npm para gerenciar e baixar os pacotes do projeto base. Trazendo uma estrutura de arquivos padronizado pela comunidade Vue. Com apenas um comando, é possivel criar um projeto Vue em alguns segundos. vue create - para criar um novo projeto vue e vue serve para testar o projeto no ambiente de desenvolvimento.

Após iniciar o projeto default usando o ESlit e o Babel, temos um projeto básico criado e com uma estrutura padrão de diretórios que o CLI criado pela Equipe do Vue. 

A estrutura de pastas:

node_modules - É a estrutura de pastas onde estão os arquivos e configurções de suas dependências. O objetivo é armazenar todos os códigos e bibliotecas necessárias para ser usadas no projeto.

public - Temos os arquivos base do projeto, o index.html que é onde será injetar os scripts e css renderizando a aplicação Vue referenciada pelo id do componente html.

package.json - Controle de dependencias da aplicação, tanto as que serão usadas em produção e desenvolvimento. Tbm temos um objeto nela chamado scripts, que é muito utilizado pela comunidade desenvolvedores para criar comandos, como compilar projetos e executar scripts personalizados de validação de testes.  

readme.md - É muito utilizado para docuentaçãos, a extensão MD vem de MarkDown que é uma linguagem de marcação muito utilizadas para documentação de textos e códigos. Este texto está sendo escrito em uma linguagem MarkDown e isto é muito `cool`.

yarn.lock - Neste caso usei o gerenciador yarn para gerenciar o projeto e trazer os arquivos padrão do CLI, e o file com extensão .lock é utilizado para "cadear" as versões dos pacotes. 

.gitignore - seta os arquivos que devem ser ignorados pelo GIT nos commits do projeto. 

babel.config.js - Utilizado para transpilar código javascript afim de buscar compatibilidade em todos os browser web. 

src - pasta responsavel pelos arquivos de regras de negócio do seu front end, é ali que será escrito os componentes vue, guardado os assets e toda a dinâmica do seu front-end. 

src/main.js - arquivo de entrada do webpack, onde importa-se os componentes, gerencia as configurações do projeto e faz a instancia principal do Vue.js

src/App.vue - arquivo com extensão .vue, padrão do Cli que traz o template padrão do vue, com logotipo e importação do componente base. 

src/assets - assets css, imagens, js, etc...

src/components - Traz um componente padrão do CLI base, mas é basicamente a pasta responsavel pelos compontens base da aplicação, como header, nav, footer, entre outros. 

Basicamente tentei explanar o que entendi da estruturação de diretórios que o CLI traz em seu projeto base. Para ver o projeto rodando, basta rodar o comando vue serve para ver o front da aplicação. 