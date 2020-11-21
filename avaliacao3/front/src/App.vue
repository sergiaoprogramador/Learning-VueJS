<template>
  <div id="app">

    <Header />

      <b-container fluid class="p-0 margin-header">

        <b-row>
          <b-col cols="6">
            <Banner />
          </b-col>
          <b-col cols="6">
            <Form />
          </b-col>
        </b-row>

        <h2>Hello, Guys!</h2>
        <companies></companies>

      </b-container>

    <Footer />
  </div>
</template>

<script>

import Header from './components/static/Header.vue'
import Footer from './components/static/Footer.vue'
import Banner from "./components/content/Banner"
import Form from "./components/content/Form"
import Companies from './components/Companies.vue'

export default {
  name: 'App',
  components:{
    Header,
    Footer,
    Banner,
    Form,
    Companies
  }
}

</script>

<style lang="scss">
  .margin-header {
    margin-top: 12rem;
  }
</style>
