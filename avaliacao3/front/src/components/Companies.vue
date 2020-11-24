<template>
  <div>
    <h4>Welcome to my Sergio's Test</h4>
    <p>Click on the button below, and you'll see the registered companies</p>
    <b-button variant="dark" @click="getCompanies">Get Companies</b-button>

    <table>
      <thead>
        <tr>
          <th>ID#</th>
          <th>Compania</th>
          <th>Razão Social</th>
          <th>Nome Fantasia</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(company, index) in companies" :key="index">
          <td>{{ company.id }}</td>
          <td>{{ company.cnpj }}</td>
          <td>{{ company.razaoSocial }}</td>
          <td>{{ company.nomeFantasia }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>

import axios from "axios"

export default {
  data(){
    return {
      companies: []
    }
  },
  methods: {
    getCompanies(){
      axios.get('http://127.0.0.1:8000/api/companies')
      .then(response=>{
        console.log(response)
        this.companies = response.data.companies
      })
      .catch(error=>{
        console.log(error)
      })
    }
  }
}

</script>