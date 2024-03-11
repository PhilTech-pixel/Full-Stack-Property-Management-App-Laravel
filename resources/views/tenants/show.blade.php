@extends('tenants.layout')
@section('content')


<div class="card">
    <div class="card-header">Tenant Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Name : {{ $tenants->name }}</h5>
            <p class="card-text">Address : {{ $tenants->address }}</p>
            <p class="card-text">Mobile : {{ $tenants->mobile }}</p>
            <p class="card-text">Total Paid : {{ $tenants->total_paid }}</p>

        </div>

        </hr>

    </div>
</div>
@endsection