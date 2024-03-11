@extends('tenants.layout')
@section('content')

<div class="card">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

        <form action="{{ url('tenants/' .$tenants->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$tenants->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$tenants->name}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$tenants->address}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mobile" value="{{$tenants->mobile}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="number" name="total_paid" id="total_paid" value="{{$tenants->total_paid}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>

    </div>
</div>

@stop