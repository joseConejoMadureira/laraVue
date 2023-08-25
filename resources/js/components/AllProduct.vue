<template>
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <div class="table-responsive">
                <DataTable :data="products" :columns="columns" class="table table-striped table-bordered display"
                :options="{responsive:true,autoWidth:false, dom:'Bfrtip',language:{
                    search:'Buscar', zeroRecords:'Não há registros',
                    info: 'Mostrando inicio a _END_ de _TOTAL_ resgistros',
                    infoFiltered: '(Filtrados de _MAX_ registros.)',
                    paginate:{ first:'Primero',previous:'Anterior',next:'Seguinte',last:'Último'}
                }}" >
                    <thead>
                        <tr><th>#</th><th>Name</th><th>Price</th></tr>
                    </thead>
                </DataTable>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import DataTable from 'datatables.net-vue3';
import DataTableLib from 'datatables.net-bs5'

import 'datatables.net-responsive-bs5';

DataTable.use(DataTableLib);

export default{
    components: {DataTable},
    data(){
        return {
            products:null,
            columns:[
                {data:null, render: function(data,type,row,meta)
                {return `${meta.row+1}`}},
                {data:'name'},
                {data: null, render: function(data,type,row,meta)
                {return ('$'+ new Intl.NumberFormat('es-mx').format(data.price))}}
            ],

        }
    },
    mounted(){
        this.getProducts();
    },
    methods:{
        getProducts(){
            axios.get('http://localhost:8000/api/products/').then(
                response => (
                    this.products = response.data
                )
            );
        }
    }
}

</script>
<style>
@import 'datatables.net-bs5';
</style>
