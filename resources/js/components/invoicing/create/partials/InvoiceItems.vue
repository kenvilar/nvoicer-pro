<template>
    <div>
        <h5>Invoice Items <span class="btn btn-sm btn-success float-right" data-toggle="modal" data-target="#addItemModal">Add Item</span></h5>

        <div id="items-container">
            <table class="table table-sm table-hover">
                <tbody v-for="item in items" :key="item.id">
                <tr>
                    <th>{{ item.description }}</th>
                    <td>${{ getCost(item.cost) }}</td>
                    <td>
                        <div class="btn-group">
                            <span class="btn btn-sm btn-danger">Delete</span>
                            <span class="btn btn-sm btn-warning">Edit</span>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-9">
                    <h5 class="text-right">Subtotal:</h5>
                </div>
                <div class="col-3">
                    <h5 class="ml-3">${{ getCost(sub_total) }}</h5>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Item</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Item Description</label>
                            <input type="text" class="form-control" v-model="item_description">
                        </div>
                        <div class="form-group">
                            <label for="">Item Cost:</label>
                            <input type="number" step="0.01" class="form-control" v-model="item_cost">
                        </div>
                        <span class="btn btn-success" v-on:click="addItem()">Add Item</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data() {
            return {
                item_count: 1,
                items: [
                    {
                        id: 1,
                        description : 'Widget 1',
                        cost: 255.00,
                    }
                ],
                item_cost: '',
                item_description: '',
                sub_total: 0.00,
            }
        },
        methods: {
            addInvoiceItem() {
                console.log('added!');
            },
            getCost(cost) {
                return cost.toFixed(2);
            },
            addItem() {
                this.item_count++;
                this.items.push({
                    id: this.item_count,
                    description : this.item_description,
                    cost: parseFloat(this.item_cost) || 0.00,
                });
                this.sub_total = this.calculateTotals();
                console.log('this.calculateTotals()', this.calculateTotals());
                this.item_description = '';
                this.item_cost = '';
                $('#addItemModal').modal('toggle');
            },
            calculateTotals() {
                var x = 0.00;
                this.items.forEach(item => {
                    x += item.cost;
                });
                return x;
            },
        }
    }
</script>
