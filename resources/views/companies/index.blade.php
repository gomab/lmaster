@extends('layouts.app')

@section('content')


<!--
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
-->

    <div class="col-md-6 col-md-6 offset-md-3">
        <div class="card card-primary">
            <div class="card-header">
                Companies
            </div>
            <div class="card-body">

                <ul class="list-group">
                @foreach ($companies as $company )
                        <li class="list-group-item"><a href="/companies/{{ $company->id }}">{{ $company->name }}</a></li>
                @endforeach
                
                </ul>

            </div>
        </div>
    </div>

@endsection