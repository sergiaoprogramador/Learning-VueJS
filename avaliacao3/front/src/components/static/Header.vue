<template>
  <header class="border-bottom">

    <b-row class="">
      <b-col cols="4" class="logo-unemat d-flex align-item-center pl-5">
        <a href="http://sinop.unemat.br/si/"></a>
        <img class="my-auto" src="../../assets/si-sinop.gif" title="Sistemas de Informação Sinop" alt="Sistemas de Informação Sinop">
      </b-col>

      <b-col cols="4" class="img-sergiao d-flex align-item-center">
        <a  href="/" class="custom-logo-link m-auto" rel="home" aria-current="page">
          <img src="../../assets/img/Sergio Ramos.png" class="custom-logo" alt="Empreenda com Your Business City">
        </a>
      </b-col>

      <b-col cols="4" class="link-sergiao d-flex align-item-center justify-content-end pr-5">
        <b-button variant="dark link" href="https://sergiaoprogramador.github.io/" class="my-auto">Meu Portfólio</b-button>
      </b-col>
    </b-row>

  </header>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
  header {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 1;
    background: #eee;

    .logo-unemat {
      img {
        width: 150px;
      }
    }

    .img-sergiao {
      img {
        width: 150px;
      }
    }

    .link-sergiao {
    }
  }
</style>
