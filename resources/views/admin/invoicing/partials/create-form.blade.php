{{--
@csrf
<div class="row">
    <div class="col-5">
        <div class="form-group">
            <label for="">Invoice ID</label>
            <input type="text" class="form-control" name="id" value="{{ old('id') }}">
        </div>
        <div class="form-group">
            <label for="">Issue Date</label>
            <input type="date" class="form-control" name="issue_date"
                   value="{{ old('issue_date') ? old('issue_date') : date('Y-m-d') }}">
        </div>
        <div class="form-group">
            <label for="">Due Date</label>
            <input type="date" class="form-control" name="due_date"
                   value="{{ old('due_date') ? old('due_date') : date('Y-m-d', time() + (60 * 60 * 24 * 14)) }}">
        </div>
        <div class="form-group">
            <label for="">Subject</label>
            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}">
        </div>
    </div>
    <div class="col-5 offset-2">
        <h5>From</h5>
        <hr>

        <div class="form-group row">
            <label for="" class="col-3">From</label>
            <div class="col-9">
                <input type="text" class="form-control" name="from"
                       value="{{ old('from') ? old('from') : config('company.name') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Address</label>
            <div class="col-9">
                <input type="text" class="form-control" name="address"
                       value="{{ old('address') ? old('address') : config('company.address') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Postal Code</label>
            <div class="col-9">
                <input type="text" class="form-control" name="postal_code"
                       value="{{ old('postal_code') ? old('postal_code') : config('company.postal_code') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">City</label>
            <div class="col-9">
                <input type="text" class="form-control" name="city"
                       value="{{ old('city') ? old('city') : config('company.city') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Province</label>
            <div class="col-9">
                <input type="text" class="form-control" name="province"
                       value="{{ old('province') ? old('province') : config('company.province') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Country</label>
            <div class="col-9">
                <input type="text" class="form-control" name="country"
                       value="{{ old('country') ? old('country') : config('company.country') }}">
            </div>
        </div>

        <h5>For <span class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#customersModal">Customer</span></h5>
        <hr>

        <div class="form-group row">
            <label for="" class="col-3">For</label>
            <div class="col-9">
                <input type="text" class="form-control" name="for"
                       value="{{ old('for') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Address</label>
            <div class="col-9">
                <input type="text" class="form-control" name="for_address"
                       value="{{ old('for_address') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Postal Code</label>
            <div class="col-9">
                <input type="text" class="form-control" name="for_postal_code"
                       value="{{ old('for_postal_code') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">City</label>
            <div class="col-9">
                <input type="text" class="form-control" name="for_city"
                       value="{{ old('for_city') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Province</label>
            <div class="col-9">
                <input type="text" class="form-control" name="for_province"
                       value="{{ old('for_province') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="col-3">Country</label>
            <div class="col-9">
                <input type="text" class="form-control" name="for_country"
                       value="{{ old('for_country') }}">
            </div>
        </div>
    </div>
</div>
--}}
