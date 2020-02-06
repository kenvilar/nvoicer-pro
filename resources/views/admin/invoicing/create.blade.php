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
                                    <a class="dropdown-item" href="{{ route('admin.customers.create') }}">Create Customer</a>
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

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection