@extends('layouts.app')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
@endsection

@section('content')
    <div class="card mt-3">
        <div class="card-body">
            <h3>This is a title <small class="text-muted">This is a subtitle</small></h3>
        </div>
    </div>
@endsection
