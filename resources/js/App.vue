<template>
  <nav-comp></nav-comp>
  <main>
    <section class="container">
      <router-view> </router-view>
    </section>
  </main>
  <footerComp> </footerComp>
</template>

<script>
import footerComp from "./components/Footer.vue";
import navComp from "./components/Nav.vue";
export default {
  components: { footerComp, navComp },
};
</script>


