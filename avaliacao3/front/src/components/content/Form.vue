<template>
  <div id="formCambridge">
    <h3 class="mt-20">
      Cadastre sua empresa <br>
      Cadastre-já!
    </h3>

    <p class="my-10">
      Test <br>
      Form Empresa
    </p>

    <b-form @submit="onSubmit" @reset="onReset" v-if="show" class="p-4">

      <!-- begin: CNPJ -->
      <b-form-group
        id="input-group-cnpj"
        label="CNPJ: *"
        label-for="input-cnpj"
        description="Caso seu CNPJ exista iremos preencher os dados automáticamente"
      >

        <b-form-input
          id="input-cnpj"
          v-model="form.cnpj"
          type="num"
          required
          placeholder="Insira o CNPJ"
          v-mask="'##.###.###/####-##'"
        ></b-form-input>

      </b-form-group>
      <!-- end: CNPJ -->

      <!-- begin: Razão Social -->
      <b-form-group
        id="input-group-razaoSocial"
        label="Razão Social: *"
        label-for="input-razaoSocial"
        description=""
      >

        <b-form-input
          id="input-razaoSocial"
          v-model="form.razaoSocial"
          type="text"
          required
          placeholder="Insira a Razão Social"
        ></b-form-input>

      </b-form-group>
      <!-- end: Razão Social -->

      <!-- begin: Nome fantasia -->
      <b-form-group
        id="input-group-nomeFantasia"
        label="Nome Fantasia: *"
        label-for="input-nomeFantasia"
        description=""
      >

        <b-form-input
          id="input-nomeFantasia"
          v-model="form.nomeFantasia"
          type="text"
          required
          placeholder="Insira o Nome Fantasia"
        ></b-form-input>

      </b-form-group>
      <!-- end: Nome fantasia -->

      <!-- begin: CEP -->
      <b-form-group
        id="input-group-cep"
        label="CEP: *"
        label-for="input-cep"
        description=""
      >

        <b-form-input
          id="input-cep"
          v-model="form.cep"
          type="num"
          required
          placeholder="Insira o CEP"
          v-mask="'#####-###'"
        ></b-form-input>

      </b-form-group>
      <!-- end: CEP -->

      <!-- begin: Logradouro -->
      <b-form-group
        id="input-group-logradouro"
        label="Logradouro: *"
        label-for="input-logradouro"
        description=""
      >

        <b-form-input
          id="input-logradouro"
          v-model="form.logradouro"
          type="text"
          required
          placeholder="Insira o endereço"
        ></b-form-input>

      </b-form-group>
      <!-- end: Logradouro -->

      <!-- begin: Número -->
      <b-form-group
        id="input-group-numero"
        label="Número: *"
        label-for="input-numero"
        description=""
      >

        <b-form-input
          id="input-numero"
          v-model="form.numero"
          type="text"
          required
          placeholder="Insira o número"
        ></b-form-input>

      </b-form-group>
      <!-- end: Número -->

      <!-- begin: Telefone -->
      <b-form-group
        id="input-group-telefone"
        label="Telefone: *"
        label-for="input-telefone"
        description=""
      >

        <b-form-input
          id="input-telefone"
          v-model="form.telefone"
          type="text"
          required
          placeholder="Insira o telefone"
          v-mask="'+55 (##) # ####-####'"
        ></b-form-input>

      </b-form-group>
      <!-- end: Telefone -->

      <!-- begin: e-mail -->
      <b-form-group
        id="input-group-email"
        label="E-mail Comercial:"
        label-for="input-email"
        description="Nós nunca vamos compartilhar seu e-mail."
      >
      
        <b-form-input
          id="input-email"
          v-model="form.email"
          type="email"
          required
          placeholder="Insira o e-mail comercial"
          @blur="validateEmail"
        ></b-form-input>

      </b-form-group>
      <!-- end: e-mail -->

    </b-form>

    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>

  </div>
</template>

<script>

  import {mask} from 'vue-the-mask'

  export default {
    data() {
      return {
        valid: false,
        form: {
          cnpj: '',
          nome: '',
          email: ''
        },
        show: true
      }
    },
    methods: {
      onSubmit(evt) {
        evt.preventDefault()
        alert(JSON.stringify(this.form))
      },
      onReset(evt) {
        evt.preventDefault()
        // Redefina nossos valores de formulário
        this.form.cnpj = ""
        this.form.nome = ""
        this.form.email = ""
        // Truque para redefinir / limpar o estado de validação do formulário do navegador nativo
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      },
      validateEmail() {

        let emailRegex = /^[a-z0-9.]+@[a-z0-9]+\.[a-z]+\.([a-z]+)?$/i

        if (emailRegex.test(this.form.cnpj)) {
          this.valid = true;
        } else {
          this.valid = false;
        }

      }
    },
    directives: {mask}
  }
</script>

<style lang="scss" scoped>
  #formCambridge {
    background: #003245;
    color: #fff;
    padding-top: 7rem;
    margin-top: -5rem;

    h3 {
      text-align: center;
    }
    p {
      text-align: center;
    }
  }
</style>