<template>
  <div>
    <h4>Welcome to my Sergio's Test</h4>
    <button @click="getCompanies">Get Companies</button>

    <table>
      <thead>
        <tr>
          <th>ID#</th>
          <th>Company#</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(company, index) in companies" :key="index">
          <td>{{ company.id }}</td>
          <td>{{ company.name }}</td>
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
      axios.get('http://127.0.0.1:8000/api/companies/validCNPJ/37463944000105')
      .then(response=>{
        console.log(response.data.company)
        // this.companies = response.data.companies
      })
      .catch(error=>{
        console.log(error)
      })
    }
  }
}

</script>