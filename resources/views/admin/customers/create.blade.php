@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.invoicing.dashboard') }}">Invoicing</a></li>
    <li class="breadcrumb-item">Settings</li>
@endsection

@section('content')
    <div class="container">

        @include('components.alerts.pack')

        <div class="card mt-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h3>Create a Customer</h3>
                    </div>
                </div>
                <hr>
                <form action="{{ route('admin.customers.store') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="" class="col-md-3">Customer Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Address 1</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address_1" value="{{ old('address_1') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Address 2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address_2" value="{{ old('address_2') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Postal Code</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="postal_code" value="{{ old('postal_code') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">City</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Province</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="province" value="{{ old('province') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Country</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="country" value="{{ old('country') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Phone 1</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone_1" value="{{ old('phone_1') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Phone 2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone_2" value="{{ old('phone_2') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Fax</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fax" value="{{ old('fax') }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Contact Person</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="contact_person" value="{{ old('contact_person') }}">
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
