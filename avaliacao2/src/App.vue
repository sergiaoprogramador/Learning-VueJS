<template>
  <div id="app">
    <Header />
    <b-container fluid class="p-0">
      <b-row>
        <b-col cols="6">
          <Banner />
        </b-col>
        <b-col cols="6">
          <Form />
        </b-col>
      </b-row>
    </b-container>
    <Footer />
  </div>
</template>

<script>
import Header from "./components/static/Header"
import Footer from "./components/static/Footer"
import Banner from "./components/content/Banner"
import Form from "./components/content/Form"

export default {
  name: "App",
  components: {
    Header,
    Footer,
    Banner,
    Form
  }
};
</script>

<style lang="scss"></style>
