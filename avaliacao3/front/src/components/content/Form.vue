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

    <b-form @submit.prevent="submit" @reset="onReset" v-if="show"  action="" method="post" class="p-4">

      <!-- begin: CNPJ -->
      <b-form-group
        id="input-group-cnpj"
        label="CNPJ: *"
        label-for="input-cnpj"
        description="Caso seu CNPJ exista iremos preencher os dados automáticamente"
        :class="{ 'form-group--error': $v.form.cnpj.$error, 'form-group--loading': $v.form.cnpj.$pending }"
      >

        <b-form-input
          id="input-cnpj"
          v-model.trim="$v.form.cnpj.$model"
          :class="{ 'form-control is-invalid': $v.form.cnpj.$error }"
          v-mask="'##.###.###/####-##'"
          placeholder="Insira o CNPJ"
        ></b-form-input>

        <div class="error" v-if="!$v.form.cnpj.required" :class="{ 'invalid-feedback d-block': !$v.form.cnpj.required }">CNPJ é Obrigatório.</div>

        <div class="error" v-if="!$v.form.cnpj.minLength" :class="{ 'invalid-feedback d-block': !$v.form.cnpj.minLength }">O CNPJ deve ter pelo menos {{$v.form.cnpj.$params.minLength.min}} caracteres.</div>

        <div class="error" v-if="!$v.form.cnpj.fetchCNPJ" :class="{ 'invalid-feedback d-block': !$v.form.cnpj.fetchCNPJ }">Este CNPJ não existe.</div>


      </b-form-group>
      <!-- end: CNPJ -->

      <!-- begin: Razão Social -->
      <b-form-group
        id="input-group-razaoSocial"
        label="Razão Social: *"
        label-for="input-razaoSocial"
        description=""
        :class="{ 'form-group--error': $v.form.razaoSocial.$error }"
      >

        <b-form-input
          id="input-razaoSocial"
          type="text"
          v-model.trim="$v.form.razaoSocial.$model"
          :class="{ 'form-control is-invalid': $v.form.razaoSocial.$error }"
          placeholder="Insira a Razão Social"
        ></b-form-input>

        <div class="error" v-if="!$v.form.razaoSocial.required" :class="{ 'invalid-feedback d-block': !$v.form.razaoSocial.required }">Razão Social é Obrigatório</div>

      </b-form-group>
      <!-- end: Razão Social -->

      <!-- begin: Nome fantasia -->
      <b-form-group
        id="input-group-nomeFantasia"
        label="Nome Fantasia:"
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
        :class="{ 'form-group--error': $v.form.logradouro.$error }"
      >

        <b-form-input
          id="input-logradouro"
          v-model="form.logradouro"
          type="text"
          v-model.trim="$v.form.logradouro.$model"
          :class="{ 'form-control is-invalid': $v.form.logradouro.$error }"
          placeholder="Insira o endereço"
        ></b-form-input>

        <div class="error" v-if="!$v.form.logradouro.required" :class="{ 'invalid-feedback d-block': !$v.form.logradouro.required }">Logradouro é Obrigatório</div>

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
            type="text"
            v-model.trim="$v.form.cep.$model"
            :class="{ 'form-control is-invalid': $v.form.cep.$error }"
            placeholder="Insira o CEP"
            v-mask="'##.###-###'"
          ></b-form-input>

          <div class="error" v-if="!$v.form.cep.required" :class="{ 'invalid-feedback d-block': !$v.form.cep.required }">CEP é Obrigatório</div>

          <div class="error" v-if="!$v.form.cep.minLength" :class="{ 'invalid-feedback d-block': !$v.form.cep.minLength }">O nome deve ter pelo menos {{$v.form.cep.$params.minLength.min}} caracteres.</div>

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
            type="text"
            v-model.trim="$v.form.numero.$model"
            :class="{ 'form-control is-invalid': $v.form.numero.$error }"
            placeholder="Insira o número"
          ></b-form-input>

          <div class="error" v-if="!$v.form.numero.required" :class="{ 'invalid-feedback d-block': !$v.form.numero.required }">Número é Obrigatório</div>

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
            v-model.trim="$v.form.telefone.$model"
            :class="{ 'form-control is-invalid': $v.form.telefone.$error }"
            placeholder="Insira o telefone"
            v-mask="'+55 (##) # ####-####'"
          ></b-form-input>

          <div class="error" v-if="!$v.form.telefone.required" :class="{ 'invalid-feedback d-block': !$v.form.telefone.required }">Telefone é Obrigatório</div>

          <div class="error" v-if="!$v.form.telefone.minLength" :class="{ 'invalid-feedback d-block': !$v.form.telefone.minLength }">O número deve ter pelo menos {{$v.form.telefone.$params.minLength.min}} caracteres.</div>

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
            type="text"
            v-model.trim="$v.form.email.$model"
            :class="{ 'form-control is-invalid': $v.form.email.$error }"
            placeholder="Insira o e-mail comercial"
          ></b-form-input>

          <div class="error" v-if="!$v.form.email.required" :class="{ 'invalid-feedback d-block': !$v.form.email.required }">E-mail é Obrigatório</div>

          <div class="error" v-if="!$v.form.email.email" :class="{ 'invalid-feedback d-block': !$v.form.email.email }">Digite um e-mail válido</div>

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
            type="text"
            v-model.trim="$v.form.bairro.$model"
            :class="{ 'form-control is-invalid': $v.form.bairro.$error }"
            placeholder="Insira o bairro"
          ></b-form-input>

          <div class="error" v-if="!$v.form.bairro.required" :class="{ 'invalid-feedback d-block': !$v.form.bairro.required }">Bairro é Obrigatório</div>

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
            v-model.trim="$v.form.cidade.$model"
            :class="{ 'form-control is-invalid': $v.form.cidade.$error }"
            placeholder="Insira a Cidade"
          ></b-form-input>

          <div class="error" v-if="!$v.form.cidade.required" :class="{ 'invalid-feedback d-block': !$v.form.cidade.required }">Cidade é Obrigatório</div>

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
        
          <b-form-select 
          id="input-estado" 
          v-model="form.estado.selected">

            <template #first>
              <b-form-select-option :value="null" disabled>-- Selecione um Estado --</b-form-select-option>
            </template>

            <b-form-select-option v-for="estado in form.estado.options" v-bind:key="estado.id" v-bind:value="estado.sigla">{{ estado.title }}</b-form-select-option>

          </b-form-select>

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
          v-model.trim="$v.form.segmento.$model"
          :class="{ 'form-control is-invalid': $v.form.segmento.$error }"
          placeholder="Selecione o Segmento"
        ></b-form-input>

        <div class="error" v-if="!$v.form.segmento.required" :class="{ 'invalid-feedback d-block': !$v.form.segmento.required }">Segmento é Obrigatório</div>

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
            type="text"
            v-model.trim="$v.form.inscricaoMunicipal.$model"
            :class="{ 'form-control is-invalid': $v.form.inscricaoMunicipal.$error }"
            placeholder="Digite a Inscrição Municipal"
          ></b-form-input>

          <div class="error" v-if="!$v.form.inscricaoMunicipal.required" :class="{ 'invalid-feedback d-block': !$v.form.inscricaoMunicipal.required }">Inscrição Municipal é Obrigatório</div>


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

      <b-form-group>
        <b-button type="submit" variant="primary" class="mr-3 button" :disabled="submitStatus === 'PENDING'">Enviar</b-button>
        <b-button type="reset" variant="danger">Limpar</b-button>
      </b-form-group>

      <p class="typo__p" v-if="submitStatus === 'OK'">OK, Tudo certo!</p>
      <p class="typo__p invalid-feedback" v-if="submitStatus === 'ERROR'">Por favor preencha o formulário corretamente.</p>
      <p class="typo__p" v-if="submitStatus === 'PENDING'">Enviando...</p>

    </b-form>

    <b-card class="mt-3" header="Form Data Result">
      <pre class="m-0">{{ form }}</pre>
    </b-card>

  </div>
</template>

<script>

  import { mask } from 'vue-the-mask'
  import { required, minLength, email } from 'vuelidate/lib/validators'
  import axios from "axios"

  export default {
    data() {
      return {
        submitStatus: null,
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
          estado: {
            selected: null,
            options: []
          },
          segmento: '',
          inscricaoMunicipal: '',
          inscricaoEstadual: ''
        },
        show: true
      }
    },
    mounted: function () {
      axios
      .get('http://127.0.0.1:8000/api/getStates')
      .then(response=>{
        this.form.estado.options = response.data
        // console.log(response.data)
        console.log(this.form.estado.options[0])
      })
    },
    validations: {
      form : {
        cnpj: {
          required,
          minLength: minLength(18),
          fetchCNPJ(value) {
            if(value === "") return true
            let company = ""

            if(this.$v.form.cnpj.minLength) {
              let cnpj = this.form.cnpj

              cnpj = cnpj.replace(/\D/gim, '')
              
              axios.get('http://127.0.0.1:8000/api/companies/validCNPJ/' + cnpj)
              .then(response=>{
                

                console.log(response.data)

                if (response.data.status == 200) {

                  company = response.data.company
                  
                  this.form.razaoSocial = company.nome
                  this.form.nomeFantasia = company.fantasia
                  this.form.cep = company.cep
                  this.form.logradouro = company.logradouro
                  this.form.numero = company.numero
                  this.form.telefone = company.telefone
                  this.form.email = company.email
                  this.form.complemento = company.complemento
                  this.form.bairro = company.bairro
                  this.form.cidade = company.municipio
                  this.form.estado.selected = company.uf
                  this.form.segmento = company.atividade_principal[0].text

                }
                

              })
              .catch(error=>{
                console.log(error)
              })

            }
            
            return true
          }
        },
        razaoSocial: {
          required
        },
        logradouro: {
          required
        },
        cep: {
          required,
          minLength: minLength(8)
        },
        numero: {
          required
        },
        telefone: {
          required,
          minLength: minLength(11)
        },
        email: {
          required,
          email
        },
        bairro: {
          required
        },
        cidade: {
          required
        },
        estado: {
          required
        },
        segmento: {
          required
        },
        inscricaoMunicipal: {
          required
        }
      }
    },
    methods: {
      submit() {
        this.$v.$touch()

        if (this.$v.$invalid) {
          this.submitStatus = 'ERROR'
        } else {
          // do your submit logic here
          this.submitStatus = 'PENDING'
          setTimeout(() => {
            this.submitStatus = 'OK'
            axios.post('http://127.0.0.1:8000/api/companies', this.form)
            .then(response=>{
              console.log(response)
            })
          }, 500)
        }
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