@extends('guest.template.base') 

@section('title', $title)

@section('content')
    <main>
        <h1>{{ $product['title'] }}</h1>
        <img src="{{ $product['thumb'] }}" alt="">
        <p>{!! $product['description'] !!}</p>
    </main>
@endsection