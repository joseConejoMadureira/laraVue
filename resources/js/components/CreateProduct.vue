<template>

    <h3 class="text-center">Criar Produto</h3>
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <form @submit.prevent="addProduct">
          <div class="form-group mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" v-model="product.name" />
          </div>
          <div class="form-group mb-3">
            <label class="form-label">Preço</label>
            <input type="number" class="form-control" v-model="product.price" />
          </div>

          <button type="submit" class="btn btn-primary">Criar</button>
        </form>
      </div>

  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      product: {},
    };
  },
  methods: {
    addProduct() {
      axios
        .post("http://localhost:8000/api/products", this.product)
        .then((response) => this.$router.push({ name: "home" }))
        .catch((err) => console.log(err))
        .finally(() => (this.loading = false));
    },
  },
};
</script>
