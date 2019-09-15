@component('mail::message')
    #Thank you for the message
    <strong>Name:</strong>{{$data['name']}}
    <strong>Email:</strong>{{$data['email']}}
    <strong>Message:</strong>
    {{$data['message']}}

@endcomponent
