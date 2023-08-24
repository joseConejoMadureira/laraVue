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
  <footer class="bg-secondary pt-4 pb-4">
    <div class="container d-flex justify-content-between align-items-center">
      <span> © 2023 Todos os direitos reservados </span>

      <ul class="social">
        <li>
          <a
            href="https://www.linkedin.com/in/jos%C3%A9-antonio-conejo-madureira-785989230/"
            class="text-hide"
            >Linkedin</a
          >
        </li>
        <li>
          <a href="https://github.com/joseConejoMadureira" class="text-hide"
            >Github</a
          >
        </li>
      </ul>
    </div>
  </footer>
</template>

<script>
export default {};
</script>
<style>
.social a {
  display: block;
  width: 36px;
  height: 36px;
  text-indent: -9999px;
}

.social li {
  display: inline-block;
  margin-left: 1em;
}
.social a[href='https://www.linkedin.com/in/jos%C3%A9-antonio-conejo-madureira-785989230/']
{
  background: url(./assets/icone-linkedin.png);
  background-size: 36px 36px;
}

.social a[href='https://github.com/joseConejoMadureira']
{
  background: url(./assets/icone-github.png);
  background-size: 36px 36px;
}
footer {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: auto;
  width: 100vw;
  padding-top: 40px;
}
</style>
