<template>
  <div>
    <h2 class="text-center">Products List</h2>

    <div class="table-responsive-sm">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
            <!-- <th>Actions</th> -->
          </tr>
        </thead>
        <tbody>
          <tr v-for="product in products" :key="product.id">
            <th scope="row">{{ product.id }}</th>

            <td>{{ product.name }}</td>
            <td>{{ product.price }}</td>
            <td>
              <div class="btn-group" role="group">
                <router-link
                  :to="{ name: 'edit', params: { id: product.id } }"
                  class="btn btn-success"
                  >Edit</router-link
                >
                <button
                  class="btn btn-danger"
                  @click="deleteProduct(product.id)"
                >
                  Delete
                </button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      products: [],
    };
  },
  created() {
    axios
      .get("http://localhost:8000/api/products/")
      .then((response) => (this.products = response.data));
  },
  methods: {
    deleteProduct(id) {
      axios
        .delete(`http://localhost:8000/api/products/${id}`)
        .then((response) => {
          let i = this.products.map((data) => data.id).indexOf(id);
          this.products.splice(i, 1);
        });
    },
  },
};
</script>
