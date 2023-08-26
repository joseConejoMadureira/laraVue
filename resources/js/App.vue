<template>
  <nav-comp></nav-comp>
  <main>
    <section class="container">
      <router-view> </router-view>
    </section>
  </main>
  <v-btn size="x-large">X-Large Button</v-btn>
  <footerComp> </footerComp>
</template>

<script>
import footerComp from "./components/Footer.vue";
import navComp from "./components/Nav.vue";
export default {
  components: { footerComp, navComp },
};
</script>


