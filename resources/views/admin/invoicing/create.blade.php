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
                    {{--@include('admin.invoicing.partials.create-form')--}}
                    <div id="create-invoice">
                        <create-invoice></create-invoice>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    {{--<div class="modal fade" id="customersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>--}}
@endsection

@push('footer-scripts')
    <script>
        var createForm = new Vue({
            el: '#create-invoice',
        });
    </script>
@endpush
