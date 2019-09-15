@extends('layouts.app')
@section('title','Contact Us')
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
    <h1>Contact Us</h1>
    @if(! session()->has('message'))
        <form action="{{route('contact.store')}}" method="POST">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name"  value="{{old('name')}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="text" name="email" id="email" value="{{old('email')}}" class="form-control" />
            </div>
            <div class="form-group">
                <label for="Message">Message:</label>
                <textarea name="message" id="message" rows="10" cols="30" class="form-control">
                    {{old('message')}}
                </textarea>
            </div>
            @csrf
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    @endif

@endsection
