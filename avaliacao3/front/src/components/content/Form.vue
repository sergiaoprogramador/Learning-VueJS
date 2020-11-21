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

      <b-form-group
        id="input-group-nome"
        label="CNPJ: *"
        label-for="input-cnpj"
        description="Caso seu CNPJ exista iremos preencher os dados automáticamente"
      >

        <b-form-input
          id="input-cnpj"
          v-model="form.cnpj"
          type="text"
          required
          placeholder="Insira o CNPJ"
          v-mask="'##.###.###/####-##'"
        ></b-form-input>

      </b-form-group>

      <b-form-group
        id="input-group-nome"
        label="Nome Empresa: *"
        label-for="input-nome"
        description=""
      >

        <b-form-input
          id="input-nome"
          v-model="form.nome"
          type="text"
          required
          placeholder="Insira o nome da empresa"
        ></b-form-input>

      </b-form-group>

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