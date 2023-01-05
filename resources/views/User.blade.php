@extends('welcome')

@section('content')
    <h1>I am hello</h1>
    @foreach($users as $user)
        <h1> {{ $user  }}  -    </h1>
    @endforeach


@endsection
