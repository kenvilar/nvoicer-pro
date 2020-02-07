<template>
    <div>
        <div class="row">
            <div class="col-5">
                <div class="form-group">
                    <label for="">Invoice ID</label>
                    <input type="text" class="form-control" name="id">
                </div>
                <div class="form-group">
                    <label for="">Issue Date</label>
                    <input type="date" class="form-control" name="issue_date">
                </div>
                <div class="form-group">
                    <label for="">Due Date</label>
                    <input type="date" class="form-control" name="due_date">
                </div>
                <div class="form-group">
                    <label for="">Subject</label>
                    <input type="text" class="form-control" name="subject">
                </div>
            </div>
            <div class="col-5 offset-2">
                <h5>From</h5>
                <hr>

                <div class="form-group row">
                    <label for="" class="col-3">From</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="from" v-model="company.name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Address</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="address" v-model="company.address">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Postal Code</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="postal_code" v-model="company.postal_code">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">City</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="city" v-model="company.city">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Province</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="province" v-model="company.province">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Country</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="country" v-model="company.country">
                    </div>
                </div>

                <h5>For <span class="btn btn-sm btn-primary float-right" data-toggle="modal"
                              data-target="#customersModal">Customer</span></h5>
                <hr>

                <input type="hidden" name="id" v-model="customer.id">

                <div class="form-group row">
                    <label for="" class="col-3">For</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for" v-model="customer.name">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Address</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_address" v-model="customer.address_1">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Postal Code</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_postal_code" v-model="customer.postal_code">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">City</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_city" v-model="customer.city">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Province</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_province" v-model="customer.province">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Country</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_country" v-model="customer.country">
                    </div>
                </div>
            </div>
        </div>

        <CustomerModal v-on:customerSelected="assignCustomerData($event)"></CustomerModal>
    </div>
</template>

<script>
    import CustomerModal from './partials/CustomerModal';

    export default {
        mounted() {
            this.getCompany();
        },
        components: {
            CustomerModal: CustomerModal,
        },
        data() {
            return {
                company: {
                    name: '',
                    address: '',
                    city: '',
                    province: '',
                    postal_code: '',
                    country: '',
                },
                customer: {
                    id: '',
                    name: '',
                    address_1: '',
                    postal_code: '',
                    city: '',
                    province: '',
                    country: '',
                }
            }
        },
        methods: {
            getCompany() {
                axios.get('/admin/company/data/details').then(response => {
                    this.company = response.data.company;
                });
            },
            assignCustomerData(item) {
                this.customer = item;
            },
        }
    }
</script>
