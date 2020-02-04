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
                        <h3>Edit Customer <small
                                class="text-muted">{{ $customer->name  }} {{ env('APP_ENV') == 'local' ? '(ID: ' . $customer->id . ')' : '' }}</small>
                        </h3>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav float-right">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Options <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.customers.show', $customer->id) }}">View
                                        Customer</a>
                                    {{-- Add more links here --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>

                <form action="{{ route('admin.customers.update', $customer->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="" class="col-md-3">Customer Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="name"
                                   value="{{ old('name', $customer->name) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Address 1</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address_1"
                                   value="{{ old('address_1', $customer->address_1) }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Address 2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="address_2"
                                   value="{{ old('address_2') ? old('address_2') : $customer->address_2 }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">City</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="city"
                                   value="{{ old('city') ? old('city') : $customer->city }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Province</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="province"
                                   value="{{ old('province') ? old('province') : $customer->province }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Country</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="country"
                                   value="{{ old('country') ? old('country') : $customer->country }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email"
                                   value="{{ old('email') ? old('email') : $customer->email }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Phone 1</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone_1"
                                   value="{{ old('phone_1') ? old('phone_1') : $customer->phone_1 }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Phone 2</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="phone_2"
                                   value="{{ old('phone_2') ? old('phone_2') : $customer->phone_2 }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Fax</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fax"
                                   value="{{ old('fax') ? old('fax') : $customer->fax }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Contact Person</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="contact_person"
                                   value="{{ old('contact_person') ? old('contact_person') : $customer->contact_person }}">
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
