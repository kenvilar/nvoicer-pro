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
                        <input type="text" class="form-control" name="from">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Address</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="address">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Postal Code</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="postal_code">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">City</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="city">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Province</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="province">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Country</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="country">
                    </div>
                </div>

                <h5>For <span class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#customersModal">Customer</span></h5>
                <hr>

                <div class="form-group row">
                    <label for="" class="col-3">For</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Address</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_address">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Postal Code</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_postal_code">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">City</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_city">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Province</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_province">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-3">Country</label>
                    <div class="col-9">
                        <input type="text" class="form-control" name="for_country">
                    </div>
                </div>
            </div>
        </div>

        <CustomerModal></CustomerModal>
    </div>
</template>

<script>
    import CustomerModal from './partials/CustomerModal';

    export default {
        mounted() {

        },
        components: {
            CustomerModal: CustomerModal,
        },
        data() {
            return {

            }
        },
        methods: {

        }
    }
</script>
