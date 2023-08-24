<template>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li>
            <router-link to="/" class="nav-link">Products List</router-link>
          </li>
          <li>
            <router-link to="/create" class="nav-link"
              >Create Product</router-link
            >
          </li>
        </ul>
      </div>
      <!-- fim .collapse -->
    </div>
    <!-- fim .container -->
  </nav>
  <main>
    <section class="container">
      <router-view> </router-view>
    </section>
  </main>
<footerComp> </footerComp>

</template>

<script>
import footerComp from './components/Footer.vue';

export default {

  components: { footerComp }};
</script>
