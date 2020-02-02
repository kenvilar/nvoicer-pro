@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.invoicing.dashboard') }}">Invoicing</a></li>
    <li class="breadcrumb-item">Dashboard</li>
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <div class="row">
                <div class="col-10">
                    <h3>Invoicing dashboard <small class="text-muted">Manage invoicing</small></h3>
                </div>
                <div class="col-2">
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Options <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Option 1</a>
                                {{-- Add more links here --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
    </div>
@endsection
