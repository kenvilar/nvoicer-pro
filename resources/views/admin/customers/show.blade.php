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
                        <h3>Customer Details <small class="text-muted">{{ $customer->name  }}</small></h3>
                    </div>
                    <div class="col-2">
                        <ul class="navbar-nav float-right">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Options <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.customers.edit', $customer->id) }}">Edit
                                        Customer</a>
                                    {{-- Add more links here --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <table class="table table-hover table-borderless">
                    <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{$customer->name}}</td>
                    </tr>
                    <tr>
                        <th>Address 1</th>
                        <td>{{$customer->address_1}}</td>
                    </tr>
                    <tr>
                        <th>Address 2</th>
                        <td>{{$customer->address_2}}</td>
                    </tr>
                    <tr>
                        <th>City</th>
                        <td>{{$customer->city}}</td>
                    </tr>
                    <tr>
                        <th>Province</th>
                        <td>{{$customer->province}}</td>
                    </tr>
                    <tr>
                        <th>Country</th>
                        <td>{{$customer->country}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$customer->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone 1</th>
                        <td>{{$customer->phone_1}}</td>
                    </tr>
                    <tr>
                        <th>Phone 2</th>
                        <td>{{$customer->phone_2}}</td>
                    </tr>
                    <tr>
                        <th>Fax</th>
                        <td>{{$customer->fax}}</td>
                    </tr>
                    <tr>
                        <th>Contact Person</th>
                        <td>{{$customer->contact_person}}</td>
                    </tr>
                    <tr>
                        <th>Created</th>
                        <td>{{ Dates::pretty_dates($customer->created_at) }}</td>
                    </tr>
                    <tr>
                        <th>Last Updated</th>
                        <td>{{ Dates::pretty_dates($customer->updated_at) }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
