<template>
    <div>
        <h5>Invoice Items <button class="btn btn-sm btn-success float-right">Add Item</button></h5>

        <div id="items-container">
            <table class="table table-sm table-hover">
                <tbody v-for="item in items" :key="item.description">
                <tr>
                    <th>{{ item.description }}</th>
                    <td>${{ getCost(item.cost) }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-danger">Delete</button>
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
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
                        description : 'Widget 1',
                        cost: 255.00,
                    }
                ]
            }
        },
        methods: {
            addInvoiceItem() {
                console.log('added!');
            },
            getCost(cost) {
                return cost.toFixed(2);
            }
        }
    }
</script>
