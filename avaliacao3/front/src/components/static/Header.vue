<template>
  <header class="border-bottom">

    <b-row class="">
      <b-col cols="4" class="logo-unemat d-flex align-item-center pl-5">
        <a href="http://sinop.unemat.br/si/"></a>
        <img class="my-auto" src="https://lh3.googleusercontent.com/proxy/05pzO1ZAG7SEh0BYSJsmk9SDkFdATBGu3VGDqc4pt-VKGSGy0nfCWXU1-dXLXYFDvuepaFQ7yJvGkfDLyfhnsXTMUkxYI6IhaGsV8fDyeFroJ8Jg5YOU9oOn" title="Grupo Your" alt="Grupo Your">
      </b-col>

      <b-col cols="4" class="img-sergiao d-flex align-item-center">
        <a  href="/" class="custom-logo-link m-auto" rel="home" aria-current="page">
          <img src="https://sergiaoprogramador.github.io/assets/img/Sergio%20Ramos.png" class="custom-logo" alt="Empreenda com Your Business City">
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
