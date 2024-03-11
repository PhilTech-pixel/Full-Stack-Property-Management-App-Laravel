@extends('layout')
@section('title', 'Login')
@section('content')
<div class="container">
    <h2 style="text-align: center;">Login</h2>
    <form action="{{route('login.post')}}" method="post" class="ms-auto me-auto mt-3" style="width: 500px">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection