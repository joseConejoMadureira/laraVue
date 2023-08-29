<template>
    <div>
        <h3 class="text-center">Editar Produto</h3>
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <form @submit.prevent="updateProduct">
                    <div class="form-group mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" v-model="product.name">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Preço</label>
                        <input type="number" class="form-control" v-model="product.price">
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from "axios";
    export default {
        data() {
            return {
                product: {}
            }
        },
        created() {
            axios
                .get(`http://localhost:8000/api/products/${this.$route.params.id}`)
                .then((res) => {
                    this.product = res.data;
                });
        },
        methods: {
            updateProduct() {
                axios
                    .patch(`http://localhost:8000/api/products/${this.$route.params.id}`, this.product)
                    .then((res) => {
                        this.$router.push({ name: 'home' });
                    });
            }
        }
    }
</script>
