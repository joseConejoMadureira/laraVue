<template>
  <div class="row justify-content-md-center">
    <div class="col-md-5">
      <v-card>
        <v-card-title>
          Busca
          <v-spacer></v-spacer>
          <v-text-field
            v-model="search"
            append-icon="mdi-magnify"
            label="Busca"
            single-line
            hide-details
          ></v-text-field>
        </v-card-title>

        <v-data-table
          v-model:page="page"
          :search="search"
          :headers="headers"
          :items="products"
          :items-per-page="itemsPerPage"
          hide-default-footer
          class="elevation-1"
        >
          <template v-slot:bottom>
            <div class="text-center pt-2">
              <v-pagination v-model="page" :length="pageCount"></v-pagination>
            </div>
          </template>

          <template v-slot:item.actions="{ item }">
            <v-icon small class="mr-2" @click="edit(item.raw.id)"
              >mdi-pencil</v-icon
            >
            <v-icon small @click="deleteProduct(item.raw.id)">mdi-delete</v-icon>
          </template>
        </v-data-table>
      </v-card>
    </div>
  </div>
</template>
<script>
import { VDataTable } from "vuetify/labs/VDataTable";

export default {
  components: {
    VDataTable,
  },
  data() {
    return {
      page: 1,
      itemsPerPage: 5,
      search: "",
      headers: [
        { title: "id", key: "id" },
        { title: "name", key: "name" },
        { title: "price", key: "price" },
        { title: "actions", key: "actions", sortable: false },
      ],
      products: [],
    };
  },
  created() {
    axios
      .get("http://localhost:8000/api/products/")
      .then((response) => (this.products = response.data));
  },
  methods: {
    edit(id) {
        console.log(JSON.stringify(id));

      this.$router.push({ name: "edit", params: { id: id } });
    },
    deleteProduct(id) {
      axios
        .delete(`http://localhost:8000/api/products/${id}`)
        .then((response) => {
          let i = this.products.map((data) => data.id).indexOf(id);
          this.products.splice(i, 1);
        });
    }
  },
  computed: {
    pageCount() {
      return Math.ceil(this.products.length / this.itemsPerPage);
    },
  },
};
</script>
