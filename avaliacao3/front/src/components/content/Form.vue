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

    <b-form @submit="onSubmit" @reset="onReset" v-if="show" class="p-4" novalidate="true">

      <!-- begin: CNPJ -->
      <b-form-group
        id="input-group-cnpj"
        label="CNPJ: *"
        label-for="input-cnpj"
        description="Caso seu CNPJ exista iremos preencher os dados automáticamente"
        valid-feedback = "CNPJ válido!"
        invalid-feedback = "Digite o CNPJ"
        :state="validCNPJ"
      >

        <b-form-input
          id="input-cnpj"
          v-model="form.cnpj"
          :state="validCNPJ"
          v-mask="'##.###.###/####-##'"
          trim
          placeholder="Insira o CNPJ"
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
          
          placeholder="Insira o Nome Fantasia"
        ></b-form-input>

      </b-form-group>
      <!-- end: Nome fantasia -->

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
          
          placeholder="Insira o endereço"
        ></b-form-input>

      </b-form-group>
      <!-- end: Logradouro -->

      <b-row>
        <!-- begin: CEP -->
        <b-form-group
          class="col-6"
          id="input-group-cep"
          label="CEP: *"
          label-for="input-cep"
          description=""
        >

          <b-form-input
            id="input-cep"
            v-model="form.cep"
            type="number"
            
            placeholder="Insira o CEP"
            v-mask="'#####-###'"
          ></b-form-input>

        </b-form-group>
        <!-- end: CEP -->   

        <!-- begin: Número -->
        <b-form-group
          class="col-6"
          id="input-group-numero"
          label="Número: *"
          label-for="input-numero"
          description=""
        >

          <b-form-input
            id="input-numero"
            v-model="form.numero"
            type="text"
            
            placeholder="Insira o número"
          ></b-form-input>

        </b-form-group>
        <!-- end: Número -->
      </b-row>

      <b-row>
        <!-- begin: Telefone -->
        <b-form-group
          class="col-6"
          id="input-group-telefone"
          label="Telefone: *"
          label-for="input-telefone"
          description=""
        >

          <b-form-input
            id="input-telefone"
            v-model="form.telefone"
            type="text"
            
            placeholder="Insira o telefone"
            v-mask="'+55 (##) # ####-####'"
          ></b-form-input>

        </b-form-group>
        <!-- end: Telefone -->

        <!-- begin: e-mail -->
        <b-form-group
          class="col-6"
          id="input-group-email"
          label="E-mail Comercial:"
          label-for="input-email"
          description="Nós nunca vamos compartilhar seu e-mail."
        >
        
          <b-form-input
            id="input-email"
            v-model="form.email"
            type="email"
            
            placeholder="Insira o e-mail comercial"
            @blur="validateEmail"
          ></b-form-input>

        </b-form-group>
        <!-- end: e-mail -->
      </b-row>

      <b-row>
        <!-- begin: Complemento -->
        <b-form-group
          class="col-6"
          id="input-group-complemento"
          label="Complemento: "
          label-for="input-complemento"
          description=""
        >

          <b-form-input
            id="input-complemento"
            v-model="form.complemento"
            type="text"
            placeholder="Insira o complemento"
          ></b-form-input>

        </b-form-group>
        <!-- end: Complemento -->

        <!-- begin: Bairro -->
        <b-form-group
          class="col-6"
          id="input-group-bairro"
          label="Bairro: *"
          label-for="input-bairro"
          description=""
        >

          <b-form-input
            id="input-bairro"
            v-model="form.bairro"
            type="text"
            
            placeholder="Insira o bairro"
          ></b-form-input>

        </b-form-group>
        <!-- end: Bairro -->
      </b-row>

      <b-row>
        <!-- begin: Cidade -->
        <b-form-group
          class="col-6"
          id="input-group-cidade"
          label="Cidade: *"
          label-for="input-cidade"
          description=""
        >

          <b-form-input
            id="input-cidade"
            v-model="form.cidade"
            type="text"
            
            placeholder="Insira a Cidade"
          ></b-form-input>

        </b-form-group>
        <!-- end: Cidade -->

        <!-- begin: Estado -->
        <b-form-group
          class="col-6"
          id="input-group-estado"
          label="Estado: *"
          label-for="input-estado"
          description=""
        >

          <b-form-input
            id="input-estado"
            v-model="form.estado"
            type="text"
            
            placeholder="Insira o estado"
          ></b-form-input>

        </b-form-group>
        <!-- end: Estado -->
      </b-row>

      <!-- begin: Segmento -->
      <b-form-group
        id="input-group-segmento"
        label="Segmentos: *"
        label-for="input-segmento"
        description=""
      >

        <b-form-input
          id="input-segmento"
          v-model="form.segmento"
          type="text"
          
          placeholder="Selecione o Segmento"
        ></b-form-input>

      </b-form-group>
      <!-- end: Segmento -->

      <b-row>
        <!-- begin: Inscrição Municipal -->
        <b-form-group
          class="col-6"
          id="input-group-inscricaoMunicipal"
          label="Inscrição Municipal: *"
          label-for="input-inscricaoMunicipal"
          description=""
        >

          <b-form-input
            id="input-inscricaoMunicipal"
            v-model="form.inscricaoMunicipal"
            type="text"
            
            placeholder="Digite a Inscrição Municipal"
          ></b-form-input>

        </b-form-group>
        <!-- end: Inscrição Municipal -->

        <!-- begin: Inscrição Estadual -->
        <b-form-group
          class="col-6"
          id="input-group-inscricaoEstadual"
          label="Inscrição Estadual: *"
          label-for="input-inscricaoEstadual"
          description=""
        >

          <b-form-input
            id="input-inscricaoEstadual"
            v-model="form.inscricaoEstadual"
            type="text"
            
            placeholder="Digite a Inscrição Estadual"
          ></b-form-input>

        </b-form-group>
        <!-- end: Inscrição Estadual -->
      </b-row>

      <b-button type="submit" variant="primary">Submit</b-button>
      <b-button type="reset" variant="danger">Reset</b-button>

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
          razaoSocial: '',
          nomeFantasia: '',
          cep: '',
          logradouro: '',
          numero: '',
          telefone: '',
          email: '',
          complemento: '',
          bairro: '',
          cidade: '',
          estado: '',
          segmento: '',
          inscricaoMunicipal: '',
          inscricaoEstadual: ''
        },
        show: true
      }
    },
    computed: {
      validCNPJ() {
        return this.form.cnpj.length >= 18
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
        this.form.razaoSocial = ""
        this.form.nomeFantasia = ""
        this.form.cep = ""
        this.form.logradouro = ""
        this.form.numero = ""
        this.form.telefone = ""
        this.form.complemento = ""
        this.form.bairro = ""
        this.form.cidade = ""
        this.form.estado = ""
        this.form.segmento = ""
        this.form.inscricaoMunicipal = ""
        this.form.inscricaoEstadual = ""

        // limpar o estado de validação do formulário do navegador nativo
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