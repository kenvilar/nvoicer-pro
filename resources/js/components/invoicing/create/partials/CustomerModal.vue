<template>
    <div>
        <!-- Modal -->
        <div class="modal fade" id="customersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Select a C ustomer</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div v-if="customers !== null">
                            <ul class="list-group" v-for="customer in customers" :key="customer.id">
                                <li class="list-group-item">{{ customer->name  }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    export default  {
        mounted() {
            //
        },
        data() {
            return {
                customers: null,
            }
        },
        methods: {
            getCustomers() {
                axios.get('/admin/customers/data/all').then(response => {
                    console.log('response.data', response.data);
                    this.customers = response.data.customers;
                });
            }
        },
    }
</script>
