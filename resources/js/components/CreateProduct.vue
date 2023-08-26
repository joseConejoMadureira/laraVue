<template>

    <h3 class="text-center">Create Product</h3>
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <form @submit.prevent="addProduct">
          <div class="form-group mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" v-model="product.name" />
          </div>
          <div class="form-group mb-3">
            <label class="form-label">Price</label>
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
