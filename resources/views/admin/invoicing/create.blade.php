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
                        <h3>Create Invoice <small class="text-muted" id="customer-name">This is a subtitle</small></h3>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav float-right">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Options <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.customers.create') }}">Create
                                        Customer</a>
                                    {{-- Add more links here --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <form action="{{ route('admin.invoicing.store') }}" method="post">
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
                </form>
            </div>
        </div>
    </div>

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
                    <ul class="list-group">
                        @foreach(Customer::all() as $customer)
                            <li class="list-group-item" onclick="getCustomerDetails({{ $customer->id }})">{{ $customer->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('footer-scripts')
@endpush
