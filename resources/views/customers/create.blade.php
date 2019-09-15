@extends('layouts.app')
@section('title','Add New Customer')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <div class="cal-12" >
            <h1>Customers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12" >

            <form action="/customers" method="POST" enctype="multipart/form-data" >
                @include('customers.form')
                <button type="submit" class="btn btn-primary">Add customer</button>

            </form>
        </div>
    </div>
@endsection
