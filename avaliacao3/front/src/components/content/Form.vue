<template>
  <div id="formCambridge">
    <h3 class="mt-20">
      Cursos Intensivos <br>
      Inscreva-se!
    </h3>

    <p class="my-10">
      Inglês | Alemão | Francês <br>
      Português para Estrangeiros
    </p>

    <b-form @submit="onSubmit" @reset="onReset" v-if="show">

      <b-form-group
        id="input-group-nome"
        label="Nome: *"
        label-for="input-nome"
        description=""
      >

        <b-form-input
          id="input-nome"
          v-model="form.nome"
          type="text"
          required
          placeholder="Insira o nome"
        ></b-form-input>

      </b-form-group>

      <b-form-group
        id="input-group-email"
        label="E-mail:"
        label-for="input-email"
        description="Nós nunca vamos compartilhar seu e-mail."
      >
      
        <b-form-input
          id="input-email"
          v-model="form.email"
          type="email"
          required
          placeholder="Insira seu e-mail"
        ></b-form-input>

      </b-form-group>

    </b-form>

    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>

  </div>
</template>

<script>
  export default {
    data() {
      return {
        form: {
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
        this.form.nome = ""
        this.form.email = ""
        // Truque para redefinir / limpar o estado de validação do formulário do navegador nativo
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
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